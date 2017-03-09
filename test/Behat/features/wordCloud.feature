Feature: Word Cloud
	In order to use the site
	As a user
	I want to see the word cloud

	Scenario: Word Cloud text has more than two colors
		Given I am on the word cloud page
		When a valid word cloud was generated
		Then more than two colors are used

	Scenario: Word Cloud has 250 words
		Given I am on the word cloud page
		When an artist has at least 250 eligible words
		Then 250 words are displayed

	Scenario: Word Cloud still generated with less than 250 eligible words
		Given I am on the word cloud page
		When there are less than 250 eligible words
		Then less than 250 words are displayed

	Scenario: Word Cloud font size
		Given I am on the word cloud page
		When a valid word cloud was generated
		Then size of words proportional to the frequency

	Scenario: Word cloud word click
		Given I am on the word cloud page
		When a valid word cloud was generated
		Then each word in the word cloud has a link



