Feature: Lyric Page
	What the user has an ability to do
	while on the lyric page.

	Scenario: Viewing of the Lyrics Page
		Given the user is on the lyricsPage
		And the user has selected "Halo" in the songListPage
		And the user has selected "awakened" in the wordCloudPage
		And the user has searched and selected "Beyonce" in the ArtistPage
		Then "awakened" in lyricsPage of "Halo" will be highlighted

	Scenario: Filling the Lyrics Page
		Given the user is on the lyricsPage
		And the user has selected "Halo" in the songListPage
		And the user has selected "awakened" in the wordCloudPage
		And the user has searched and selected "Beyonce" in the ArtistSearchPage
		Then the lyricsPage fills the textbox with the lyrics of "Halo"

	Scenario: Correct Highlighted Word
		Given the user is on the lyricsPage
		And the user has selected "Halo" in the songListPage
		And the user has selected "awakened" in the wordCloudPage
		And the user has searched and selected "Beyonce" in the ArtistSearchPage
		Then "awakened" should be highlighted

	Scenario: An appearance of two buttons
		Given the user is on the lyricsPage
		And the user has navigated through the wordCloudPage
		And the user has navigated through the ArtistSearchPage
		And the user has navigated through the songListPage
		Then the lyricsPage will display the backToWordCloud button and the backToSongList button