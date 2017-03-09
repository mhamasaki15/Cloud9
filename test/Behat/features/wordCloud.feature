Feature: Word Cloud
	In order to use the site
	As a user
	I want to see the word cloud

	Scenario: R6Word Cloud text has more than two colors
		Given I am on the word cloud page
		When a valid word cloud was generated
		Then more than two colors are used

	Scenario: R2Word Cloud has 250 words
		Given I am on the word cloud page
		When an artist has at least 250 eligible words
		Then 250 words are displayed

	Scenario: R3Word Cloud still generated with less than 250 eligible words
		Given I am on the word cloud page
		When there are less than 250 eligible words
		Then less than 250 words are displayed

	Scenario: R7Word Cloud font size
		Given I am on the word cloud page
		When a valid word cloud was generated
		Then size of words proportional to the frequency

	Scenario: R8Word cloud word click
		Given I am on the word cloud page
		When a valid word cloud was generated
		And click a word
		Then navigate to the song list page

	Scenario: R1No Common words
		Given I am on the word cloud page
		When a valid word cloud was generated
		Then no common words are displayed

	Scenario: R4Words are Horizontal
		Given I am on the word cloud page
		When a valid word cloud is displayed
		Then the words are horizontal



