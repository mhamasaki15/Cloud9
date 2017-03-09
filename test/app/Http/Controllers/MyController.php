<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;


class MyController extends Controller {
  private $verification = '&apikey=f5da5786a4cf41bbdc7f52e5a71c8e0d';

/***** Artist Suggestions *****/
/*			      */
/******************************/

//Takes JSON string response, converts to PHP array, and returns the artist list
  public function getArtistListFromJSON($json_body){
	return $json_body['message']['body']['artist_list'];
  }


//Takes the artist list array, and formats it into an array of max size 3
//in the format that the front end uses
  public function createSuggestionsFromArtistList($a_l){
	$artistSuggestions = array();
	for ($i=0; $i<sizeof($a_l) && $i <= 2; $i++){
		$currentArtist = $a_l[$i]['artist'];
		$currentArtistName = $currentArtist['artist_name'];
		$currentArtistId = $currentArtist['artist_id'];
		$artistSuggestions[$i] = array(
			"artistName" => $currentArtistName,
			"artistId" => $currentArtistId
		);
	}
	return $artistSuggestions;
  }

//Route that is called to get artist suggestions based off the input text
//Should return the view of the home page with the suggestions passed in
//as variables
  public function getArtistSuggestions($name){
  	$client = new Client([
  		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
  		'timeout' => 2.0
  	]);
  	$response = $client->get('artist.search?q_artist=' . $name . '&page_size=3&s_artist_rating=DESC' . $this->verification);

	$response= json_decode($response->getBody(), true);
	$artistList = $this->getArtistListFromJSON($response);
	$artistSuggestions = $this->createSuggestionsFromArtistList($artistList);

	return view('homepage', ['artistSuggestions' => $artistSuggestions, 'textString' => $name]);
  }




  public function requestSongLyrics($track_id){
  	$client = new Client([
  		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
  		'timeout' => 2.0
  	]);
	$response = $client->get('track.lyrics.get?track_id=' . $track_id . $this->verification);
	$songLyrics = json_decode($response->getBody(), true);
	return $songLyrics['message']['body']['lyrics']['lyrics_body'];
  }

  public function getAllArtistLyrics($trackList){
	$allSongLyrics = " ";
    	for ($i = 0; $i < count($trackList); $i++){
		$songLyrics = $this->requestSongLyrics($trackList[$i]['track']['track_id']);

      	//getting rid of common stuff.
		$toReplace = array(".", ")", "(", "\"", "]", "[", "1409614316181", "\n", ',', '******* This Lyrics is NOT for Commercial use *******'); 
		$songLyrics = str_replace($toReplace, " ", $songLyrics);
		$songLyrics = strtolower($songLyrics);

      		$commonEnglishWords = array(" a ", " i ", " i'm ", " it's ", " do ", " am ", " the ", " to ", " in ", " at ", " is ", " it ", " was ", " are ", " that ", " of ", " be ", " at ", " or ", " by ", " this ", " and ", " you ", " me ", " some ", " how ", " my ", " on ", " they ", " get ", " we ", " so ", " but "); 
    		$songLyrics = str_replace($commonEnglishWords, " ", $songLyrics);

      		$allSongLyrics = $allSongLyrics . " " . $songLyrics;
	    }
	return $allSongLyrics;
  }

  public function createWordListFromLyrics($allSongLyrics){
    $wordList = explode(" ", $allSongLyrics);
    $wordList = array_filter($wordList);
    $wordList = array_count_values($wordList);
    arsort($wordList);
    $wordList = array_slice($wordList, 0, 250, true);
   
    return $wordList;
  } 

  public function createWordCloudString($wordList, $artistId){
    $wordCloudString = "";
    $startingATag = "<a style='color:";
    $fontSizeString = "; font-size:";
    $linkString = "px;' href='http://localhost:8000/api/songlist/";
    $colors = array("red", "blue", "green", "purple", "yellow", "black", "orange", "gray");

    $shuffled_array = array();
    $shuffled_keys = array_keys($wordList);
    shuffle($shuffled_keys);
    foreach ($shuffled_keys as $shuffled_key){
      $shuffled_array[$shuffled_key] = $wordList[$shuffled_key];
    }

    foreach ($shuffled_array as $key => $value){
      $color = $colors[array_rand($colors, 1)];
      //echo $color;
      $fontSize = $value * 6;
      if ($fontSize > 40) $fontSize = 40;
      if ($fontSize < 12) $fontSize = 10;
      $toAdd = $startingATag . $color . $fontSizeString . $fontSize . $linkString . $key . "/" . $artistId . "'> " . $key . " </a>";
      $wordCloudString = $wordCloudString . $toAdd;
    }

    return $wordCloudString;
  }


  public function getWordCloudList($artistId){
    $client = new Client([
      'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
      'timeout' => 2.0
    ]);
    $response = $client->get('track.search?f_artist_id=' . $artistId . '&page_size=5&page=1&f_lyrics_language=en&f_has_lyrics=true' . $this->verification);

    $trackList = json_decode($response->getBody(), true);
    $trackList = $trackList['message']['body']['track_list'];
    $artistName = $trackList[0]['track']['artist_name'];

    $allSongLyrics = $this->getAllArtistLyrics($trackList);
    $wordList = $this->createWordListFromLyrics($allSongLyrics);
    $wordCloudString = $this->createWordCloudString($wordList, $artistId);

    $wordList = json_encode($wordList);

    return view('wordcloud', ['wordCloudString' => $wordCloudString, 'wordList' => $wordList, 'artistName' => $artistName, 'artistId' => $artistId]);
  }


  public function getSongListFromTrackList($trackList, $artistId, $word){
    $songList = array();

    for ($i = 0; $i < count($trackList); $i++){
      $songLyrics = $this->requestSongLyrics($trackList[$i]['track']['track_id']);

      $toReplace = array(".", ")", "(", "\"", "]", "[", "1409614316181", "\n", ',', '******* This Lyrics is NOT for Commercial use *******'); 
      $songLyrics = str_replace($toReplace, " ", $songLyrics);
      $songLyrics = strtolower($songLyrics);

      $count = substr_count($songLyrics, " " . $word . " ");
      $songList[$trackList[$i]['track']['track_name']] = $count;
    }

    arsort($songList);
    return $songList;
  }

  public function getSongList($word, $artistId){
    $client = new Client([
  		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
  		'timeout' => 2.0
  	]);
    $response = $client->get('track.search?f_artist_id=' . $artistId . '&page_size=5&page=1&f_lyrics_language=en&f_has_lyrics=true' . $this->verification);

    $trackList = json_decode($response->getBody(), true);
    $trackList = $trackList['message']['body']['track_list'];
    $songList = $this->getSongListFromTrackList($trackList, $artistId, $word);

    $songList = json_encode($songList);
    $trackList = json_encode($trackList);

    return view('songlist', ['trackList' => $trackList, 'songList' => $songList, 'word' => $word, 'artistId' => $artistId]);
  }

  public function parseLyrics($lyrics){
    $lyrics = str_replace("******* This Lyrics is NOT for Commercial use *******", "", $lyrics);
    $lyrics = str_replace("(1409614310238)", "", $lyrics);
    $lyrics = str_replace("\""," ", $lyrics);
    $lyrics = str_replace("\n", " <br> ", $lyrics);

    return $lyrics;
  }


  public function getSongLyrics($songName, $artistId, $word){
    $client = new Client([
  		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
  		'timeout' => 2.0
  	]);
    $response = $client->get('track.search?f_artist_id=' . $artistId . '&q_track=' . $songName . '&f_has_lyrics=true' . $this->verification);
    $track = json_decode($response->getBody(), true);
    $track = $track['message']['body']['track_list'][0]['track'];
    $trackName = $track['track_name'];
    $artistName = $track['artist_name'];
    
    $lyrics = $this->requestSongLyrics($track['track_id']); 
    $lyrics = $this->parseLyrics($lyrics);

    return view('lyrics', ['lyrics' => $lyrics, 'word' => $word, 'artistId' => $artistId, 'artistName' => $artistName, 'songTitle' => $trackName]);
  }
}
