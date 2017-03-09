<?php

use PHPUnit\Framework\TestCase;
Use App\Http\Controllers\MyController;

//require __DIR__ . "/../src/MyController.php";


class LyricsParsingTest extends TestCase{



	/**
	 * @covers App\Http\Controllers\MyController::parseLyrics()
	**/
	public function testLyricsParsing(){
		$myController = new MyController();
		$originalLyrics = "I've got your number I don´t know how long I can wait (oh oh oh oh oh) (oh oh oh oh oh) To call you over So we can waste the night away (oh oh oh oh oh) (oh oh oh oh oh) When the lights go out We're getting up We go where we go We do what we want Do want we want We'll be the colour in All this black and white Are you feeling what I'm feeling 'Cause it's really feeling right Don't wake me if I'm dreaming I could stay here all night I can feel it I can feel it I can feel it coming true I can feel it I can feel it When I'm looking at you Are you feeling what I'm feeling 'Cause i'm really feeling fine Kicking bottles under bleachers And we're hiding from the light I can feel it I can feel it I can feel it coming true I can feel it I can feel it ... ******* This Lyrics is NOT for Commercial use ******* (1409614316181) ";
		$parsedLyrics = $myController->parseLyrics($originalLyrics);
		$this->assertEquals(strpos($parsedLyrics, "This Lyrics"), false);
	}
} 
?>
