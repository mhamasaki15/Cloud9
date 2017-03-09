Feature: Lyric Page
	What the user has an ability to do
	while on the lyric page.

	Scenario: Filling the Lyrics Page
		Given the user is on the songListPage
		When the user has selected "Halo"
		And the user has navigated to the lyricsPage
		Then the lyricsPage textbox is filled with the lyrics of "Halo"

	Scenario: Correct Highlighted Word
		Given the user is on the songListPage
		When the user has selected "Halo"
		And the user has navigated to the lyricsPage
		Then the lyricsPage textbox is filled with the lyrics of "Halo"
		And the word "awakened" is highlighted everywhere in the lyrics of "Halo"

	Scenario: An appearance of two buttons
		Given the user is on the lyricsPage
		When the user has navigated through the ArtistSearchPage
		And the user has navigated through the wordCloudPage
		And the user has navigated through the songListPage
		Then the lyricsPage will display the backToWordCloud button and the backToSongList button