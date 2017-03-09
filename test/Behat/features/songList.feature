Feature: Song List
	In order to use the site
	As a user
	I want to see the song list page

	Scenario: R5Song list title
		Given I am on the song list page
		And the selected artist is "Beyonce"
		When the word selected is "love"
		Then "love" should be the song title

	Scenario: R4Back to word cloud
		Given I am on the song list page
		When the user clicks on back to word cloud button
		Then the user is navigated back to the word cloud page

	Scenario: R4Go to lyric page
		Given I am on the song list page
		And the selected artist is "Beyonce"
		And the selected word is "love"
		When the user clicks on a song title
		Then the user is navigated to the lyric page

	Scenario: R1Has song list
		Given I am on the song list page
		And the selected artist is "Beyonce"
		When the word selected is "love"
		Then "Love on Top" should be the top song

	Scenario: R2Ordered by frequency
		Given I am on the song list page
		And the selected artist is "Beyonce"
		When the word selected is "love"
		Then songs should be ordered

	Scenario: R53ong title format
		Given I am on the song list page
		And the selected artist is "Beyonce"
		When the word selected is "love"
		Then "Love on Top(8)" should be the top entry