<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;



class MyController extends Controller {
   public function index(){
      echo 'index';
   }
   public function create(){
      echo 'create';
   }
   public function store(Request $request){
      echo 'store';
   }
   public function show($id){

	$client = new Client([
		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
		'timeout' => 2.0
	]);
	$response = $client->get('chart.tracks.get?page=1&page_siz=5&country=it&f_has_lyrics=1&apikey=af4f17055cd4a57b70e1604b5672f11c');
	echo $response->getStatusCode();	
	echo $response->getBody();
   }
   public function test($name){
	echo 'test';
   }
   public function edit($id){
      echo 'edit';
   }
   public function update(Request $request, $id){
      echo 'update';
   }
   public function destroy($id){
      echo 'destroy';
   }

   public function getArtistSuggestions($name){
	$client = new Client([
		'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
		'timeout' => 2.0
	]);
	$response = $client->get('artist.search?q_artist=' . $name . '&page_size=3&apikey=af4f17055cd4a57b70e1604b5672f11c');
	$obj = json_decode($response->getBody(), true);
	$obj = $obj['message']['body']['artist_list'];
	$artistSuggestions = array();
	if (sizeof($obj) > 0) $artistSuggestions[0] = array("artistName" => $obj[0]['artist']['artist_name'], "artistId" => $obj[0]['artist']['artist_id']);
	if (sizeof($obj) > 1) $artistSuggestions[1]= array("artistName" => $obj[1]['artist']['artist_name'], "artistId" => $obj[1]['artist']['artist_id']);
	if (sizeof($obj) > 2) $artistSuggestions[2]= array("artistName" => $obj[2]['artist']['artist_name'], "artistId" => $obj[2]['artist']['artist_id']);
	
	var_dump($artistSuggestions);
	return view('homepage', ['artistSuggestions' => $artistSuggestions]);
   }

   public function getWordCloudList($artistId){
     $client = new Client([
	'base_uri' => 'http://api.musixmatch.com/ws/1.1/',
	'timeout' => 2.0
     ]);
     $response = $client->get('track.search?f_artist_id=' . $artistId . '&page_size=100&page=1&f_lyrics_language=en&f_has_lyrics=true&apikey=af4f17055cd4a57b70e1604b5672f11c');
     $obj = json_decode($response->getBody(), true);
     $obj = $obj['message']['body']['track_list'];
     var_dump($obj);

   }
}
