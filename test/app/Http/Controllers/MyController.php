<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;


class MyController extends Controller {
  private $verification = '&apikey=af4f17055cd4a57b70e1604b5672f11c';

  public function getArtistSuggestions($name){
  	$client = new Client([
  		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
  		'timeout' => 2.0
  	]);
  	$response = $client->get('artist.search?q_artist=' . $name . '&page_size=3' . $this->verification);

  	$obj = json_decode($response->getBody(), true);
  	$obj = $obj['message']['body']['artist_list'];

    $artistSuggestions = array();
    if (sizeof($obj) > 0) $artistSuggestions[0] = array("artistName" => $obj[0]['artist']['artist_name'], "artistId" => $obj[0]['artist']['artist_id']);
    if (sizeof($obj) > 1) $artistSuggestions[1]= array("artistName" => $obj[1]['artist']['artist_name'], "artistId" => $obj[1]['artist']['artist_id']);
    if (sizeof($obj) > 2) $artistSuggestions[2]= array("artistName" => $obj[2]['artist']['artist_name'], "artistId" => $obj[2]['artist']['artist_id']);

    var_dump($artistSuggestions);
    $artistSuggestions = json_encode($artistSuggestions);
    return view('homepage', ['artistSuggestions' => $artistSuggestions, 'textString' => $name]);
  }

  public function getWordCloudList($artistId){
    $client = new Client([
      'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
      'timeout' => 2.0
    ]);
    $response = $client->get('track.search?f_artist_id=' . $artistId . '&page_size=25&page=1&f_lyrics_language=en&f_has_lyrics=true' . $this->verification);

    $trackList = json_decode($response->getBody(), true);
    $trackList = $trackList['message']['body']['track_list'];
    $artistName = $trackList[0]['track']['artist_name'];

    $allSongLyrics = " ";
    for ($i = 0; $i < count($trackList); $i++){
      $response = $client->get('track.lyrics.get?track_id=' . $trackList[$i]['track']['track_id'] . $this->verification);

      $songLyrics = json_decode($response->getBody(), true);
      $songLyrics = $songLyrics['message']['body']['lyrics']['lyrics_body'];

      //getting rid of common stuff.
      $toReplace = array(".", ")", "(", "\"", "]", "[", "1409614310238", "\n", ',', '******* This Lyrics is NOT for Commercial use *******'); 
      $songLyrics = str_replace($toReplace, " ", $songLyrics);
      $songLyrics = strtolower($songLyrics);

      $commonEnglishWords = array(" a ", " i ", " i'm ", " it's ", " do ", " am ", " the ", " to ", " in ", " at ", " is ", " it ", " was ", " are ", " that ", " of ", " be ", " at ", " or ", " by ", " this ", " and ", " you ", " me ", " some ", " how ", " my ", " on ", " they ", " get ", " we ", " so ", " but "); 
      $songLyrics = str_replace($commonEnglishWords, " ", $songLyrics);

      //$songLyrics = substr($songLyrics, 0, strrpos($songLyrics, ' '));

      $allSongLyrics = $allSongLyrics . " " . $songLyrics;
    }

    $wordList = explode(" ", $allSongLyrics);
    $wordList = array_filter($wordList);
    $wordList = array_count_values($wordList);
    arsort($wordList);
    $wordList = array_slice($wordList, 0, 250, true);
    echo '<pre>';
    print_r($wordList);
    echo '</pre>';

    $wordList = json_encode($wordList);

     //return view('wordcloud', [wordList => $wordList, artistName => $artistName, artistId => $artistId]);
  }


  public function getSongList($word, $artistId){
    $client = new Client([
  		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
  		'timeout' => 2.0
  	]);
    $response = $client->get('track.search?f_artist_id=' . $artistId . '&page_size=25&page=1&f_lyrics_language=en&f_has_lyrics=true' . $this->verification);

    $trackList = json_decode($response->getBody(), true);
    $trackList = $trackList['message']['body']['track_list'];

    $songList = array();

    for ($i = 0; $i < count($trackList); $i++){
      $response = $client->get('track.lyrics.get?track_id=' . $trackList[$i]['track']['track_id'] . $this->verification);
      $songLyrics= json_decode($response->getBody(), true);
      $songLyrics = $songLyrics['message']['body']['lyrics']['lyrics_body'];

      $toReplace = array(".", ")", "(", "\"", "]", "[", "1409614310238", "\n", ',', '******* This Lyrics is NOT for Commercial use *******'); 
      $songLyrics = str_replace($toReplace, " ", $songLyrics);
      $songLyrics = strtolower($songLyrics);

      $count = substr_count($songLyrics, " " . $word . " ");
      $songList[$trackList[$i]['track']['track_name']] = $count;
    }

    arsort($songList);
//    var_dump($songList);
    $songList = json_encode($songList);

   //return view('songlist', [songList => $songList, word => $word, artistId => $artistId]);
  }

  public function getSongLyrics($songName, $artistId, $word){
    $client = new Client([
  		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
  		'timeout' => 2.0
  	]);
    $response = $client->get('track.search?f_artist_id=' . $artistId . '&q_track=' . $songName . '&f_has_lyrics=true' . $this->verification);
    $track = json_decode($response->getBody(), true);
    $track = $track['message']['body']['track_list'][0]['track'];
    
    $response = $client->get('track.lyrics.get?track_id=' . $track['track_id'] . $this->verification);
    $lyrics = json_decode($response->getBody(), true);    
    $lyrics = $lyrics['message']['body']['lyrics']['lyrics_body'];
    
    $lyrics = str_replace("******* This Lyrics is NOT for Commercial use *******", "", $lyrics);
    $lyrics = str_replace("(1409614310238)", "", $lyrics);
    var_dump($lyrics);

    //return view('lyrics', [lyrics => $lyrics, word => $word, artistId => $artistId]);
  }
}
