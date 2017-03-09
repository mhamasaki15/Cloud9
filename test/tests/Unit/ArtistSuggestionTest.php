<?php

use PHPUnit\Framework\TestCase;
Use App\Http\Controllers\MyController;

//require __DIR__ . "/../src/MyController.php";


class ArtistSuggestTest extends TestCase{


	/**
	 * @covers App\Http\Controllers\MyController::getArtistListFromJSON()
	**/
	public function testGetArtistFromJSONOnSuccessfulJSONResponse(){

		$myController = new MyController();
		$responseBody = array ( 'message' => array ( 'header' => array ( 'status_code' => 200, 'execute_time' => 0.014384984970093001, 'available' => 1047, ), 'body' => array ( 'artist_list' => array ( 0 => array ( 'artist' => array ( 'artist_id' => 331046, 'artist_mbid' => 'd024da79-b980-40bb-af2d-d2d56b95b3f3', 'artist_name' => 'Hey! Say! JUMP', 'artist_name_translation_list' => array ( ), 'artist_comment' => '', 'artist_country' => 'JP', 'artist_alias_list' => array ( ), 'artist_rating' => 48, 'primary_genres' => array ( 'music_genre_list' => array ( ), ), 'secondary_genres' => array ( 'music_genre_list' => array ( ), ), 'artist_twitter_url' => '', 'artist_vanity_id' => 'Hey-Say-JUMP', 'artist_share_url' => 'https://www.musixmatch.com/artist/Hey-Say-JUMP', 'artist_credits' => array ( 'artist_list' => array ( ), ), 'restricted' => 0, 'managed' => 0, 'updated_time' => '2013-07-19T08:36:58Z', ), ), 1 => array ( 'artist' => array ( 'artist_id' => 28680882, 'artist_mbid' => '', 'artist_name' => 'Hey Violet', 'artist_name_translation_list' => array ( ), 'artist_comment' => '', 'artist_country' => '', 'artist_alias_list' => array ( 0 => array ( 'artist_alias' => 'ヘイヴァイオレット', ), ), 'artist_rating' => 58, 'primary_genres' => array ( 'music_genre_list' => array ( 0 => array ( 'music_genre' => array ( 'music_genre_id' => 14, 'music_genre_parent_id' => 34, 'music_genre_name' => 'Pop', 'music_genre_name_extended' => 'Pop', 'music_genre_vanity' => 'Pop', ), ), ), ), 'secondary_genres' => array ( 'music_genre_list' => array ( ), ), 'artist_twitter_url' => '', 'artist_credits' => array ( 'artist_list' => array ( ), ), 'restricted' => 0, 'managed' => 0, 'updated_time' => '2015-12-01T22:30:07Z', ), ), 2 => array ( 'artist' => array ( 'artist_id' => 401068, 'artist_mbid' => 'fb45c8d9-4c85-4edf-b41b-af69ad344735', 'artist_name' => 'Hey Monday', 'artist_name_translation_list' => array ( 0 => array ( 'artist_name_translation' => array ( 'language' => 'ZH', 'translation' => '星期一樂團', ), ), 1 => array ( 'artist_name_translation' => array ( 'language' => 'ZH-HANS', 'translation' => '星期一乐团', ), ), ), 'artist_comment' => '', 'artist_country' => 'US', 'artist_alias_list' => array ( 0 => array ( 'artist_alias' => '星期一樂團', ), 1 => array ( 'artist_alias' => '星期一乐团', ), ), 'artist_rating' => 40, 'primary_genres' => array ( 'music_genre_list' => array ( 0 => array ( 'music_genre' => array ( 'music_genre_id' => 20, 'music_genre_parent_id' => 34, 'music_genre_name' => 'Alternative', 'music_genre_name_extended' => 'Alternative', 'music_genre_vanity' => 'Alternative', ), ), ), ), 'secondary_genres' => array ( 'music_genre_list' => array ( ), ), 'artist_twitter_url' => '', 'artist_vanity_id' => 'Hey-Monday', 'artist_share_url' => 'https://www.musixmatch.com/artist/Hey-Monday', 'artist_credits' => array ( 'artist_list' => array ( ), ), 'updated_time' => '2015-12-10T15:24:48Z', ), ), ), ), ), );
		$artistLyrics = $myController->getArtistListFromJSON($responseBody);
		$this->assertEquals(count($artistLyrics), 3);
	}



	/**
	 * @covers App\Http\Controllers\MyController::createSuggestionsFromArtistList()
	**/
	public function testCreateArtistSuggestionsFromValidArtistListOfLengthGreaterThanThree(){
		$myController = new MyController();
		$TestArtistList = array ( 0 => array ( 'artist' => array ( 'artist_id' => 331046, 'artist_mbid' => 'd024da79-b980-40bb-af2d-d2d56b95b3f3', 'artist_name' => 'Hey! Say! JUMP', 'artist_name_translation_list' => array ( ), 'artist_comment' => '', 'artist_country' => 'JP', 'artist_alias_list' => array ( ), 'artist_rating' => 48, 'primary_genres' => array ( 'music_genre_list' => array ( ), ), 'secondary_genres' => array ( 'music_genre_list' => array ( ), ), 'artist_twitter_url' => '', 'artist_vanity_id' => 'Hey-Say-JUMP', 'artist_edit_url' => 'https://www.musixmatch.com/artist/Hey-Say-JUMP?utm_source=application&utm_campaign=api&utm_medium=University+of+Southern+California%2C+CSCI+310', 'artist_share_url' => 'https://www.musixmatch.com/artist/Hey-Say-JUMP', 'artist_credits' => array ( 'artist_list' => array ( ), ), 'restricted' => 0, 'managed' => 0, 'updated_time' => '2013-07-19T08:36:58Z', ), ), 1 => array ( 'artist' => array ( 'artist_id' => 28680882, 'artist_mbid' => '', 'artist_name' => 'Hey Violet', 'artist_name_translation_list' => array ( ), 'artist_comment' => '', 'artist_country' => '', 'artist_alias_list' => array ( 0 => array ( 'artist_alias' => 'ヘイヴァイオレット', ), ), 'artist_rating' => 58, 'primary_genres' => array ( 'music_genre_list' => array ( 0 => array ( 'music_genre' => array ( 'music_genre_id' => 14, 'music_genre_parent_id' => 34, 'music_genre_name' => 'Pop', 'music_genre_name_extended' => 'Pop', 'music_genre_vanity' => 'Pop', ), ), ), ), 'secondary_genres' => array ( 'music_genre_list' => array ( ), ), 'artist_twitter_url' => '', 'artist_vanity_id' => 'HEY-VIOLET', 'artist_edit_url' => 'https://www.musixmatch.com/artist/HEY-VIOLET?utm_source=application&utm_campaign=api&utm_medium=University+of+Southern+California%2C+CSCI+310', 'artist_share_url' => 'https://www.musixmatch.com/artist/HEY-VIOLET', 'artist_credits' => array ( 'artist_list' => array ( ), ), 'restricted' => 0, 'managed' => 0, 'updated_time' => '2015-12-01T22:30:07Z', ), ), 2 => array ( 'artist' => array ( 'artist_id' => 401068, 'artist_mbid' => 'fb45c8d9-4c85-4edf-b41b-af69ad344735', 'artist_name' => 'Hey Monday', 'artist_name_translation_list' => array ( 0 => array ( 'artist_name_translation' => array ( 'language' => 'ZH', 'translation' => '星期一樂團', ), ), 1 => array ( 'artist_name_translation' => array ( 'language' => 'ZH-HANS', 'translation' => '星期一乐团', ), ), ), 'artist_comment' => '', 'artist_country' => 'US', 'artist_alias_list' => array ( 0 => array ( 'artist_alias' => '星期一樂團', ), 1 => array ( 'artist_alias' => '星期一乐团', ), ), 'artist_rating' => 40, 'primary_genres' => array ( 'music_genre_list' => array ( 0 => array ( 'music_genre' => array ( 'music_genre_id' => 20, 'music_genre_parent_id' => 34, 'music_genre_name' => 'Alternative', 'music_genre_name_extended' => 'Alternative', 'music_genre_vanity' => 'Alternative', ), ), ), ), 'secondary_genres' => array ( 'music_genre_list' => array ( ), ), 'artist_twitter_
//url' => '', 'artist_vanity_id' => 'Hey-Monday', 'artist_edit_url' => 'https://www.musixmatch.com/artist/Hey-Monday?utm_source=application&utm_campaign=api&utm_medium=University+of+Southern+California%2C+CSCI+310', 'artist_share_url' => 'https://www.musixmatch.com/artist/Hey-Monday', 'artist_credits' => array ( 'artist_list' => array ( ), ), 'restricted' => 0, 'managed' => 0, 'updated_time' => '2015-12-10T15:24:48Z', ), ), );

		$artistSuggestions = $myController->createSuggestionsFromArtistList($TestArtistList);
		$this->assertEquals(count($TestArtistList), count($artistSuggestions));
	}


	/**
	 * @covers App\Http\Controllers\MyController::createSuggestionsFromArtistList()
	**/
	public function testGetSuggestionsFromArtistListFromInvalidInput(){
		$myController = new MyController();
		$emptyString = "dd"; 
		try{
			$this->expectException($myController->createSuggestionsFromArtistList($emptyString));
		} catch (Exception $e){
			$this->assertEquals(1, 1);
		}
	}
} 
?>
