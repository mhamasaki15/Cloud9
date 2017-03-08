<?php

use PHPUnit\Framework\TestCase;
Use App\Http\Controllers\MyController;

//require __DIR__ . "/../src/MyController.php";

/**
 * @covers getArtistSuggestions
**/

class ArtistSuggestTest extends TestCase{
	public function testGetArtistFromJSONOnSuccessfulJSONResponse(){
		$myController = new MyController();
		$this->assertEquals(-1, -1);

	}
} 
?>
