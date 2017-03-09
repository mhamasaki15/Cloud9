Feature: Lyric Page
	What the user has an ability to do
	while on the lyric page.

	Scenario: R1Filling the Lyrics Page
		Given the user is on the songListPage
		When the user has selected "Halo"
		And the user has navigated to the lyricsPage
		Then the lyricsPage textbox is filled with the lyrics of "Halo"

	Scenario: R2Correct Highlighted Word
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

	Scenario: Click backToWordCloud Button
		Given the user is on the lyricsPage
		When the user has clicked on the backToWordCloud Button
		Then the user is navigated to the wordCloudPage
		And the wordCloud page has the selected artist

	Scenario: Click backToSongList Button
		Given the user is on the lyricsPage
		When the user has clicked on the BackToSongList button
		Then the user is navigated to the songListPage

	Scenario: R1Lyric title
		Given I am on the lyric page
		When the user picks "Love on Top" by "Beyonce"
		Then the title has "Love on Top" and "Beyonce"

	Scenario: R2Lyric title
		Given I am on the lyric page
		When the user picks "Love on Top" by "Beyonce"
		Then the title is "Love on Top by Beyonce"