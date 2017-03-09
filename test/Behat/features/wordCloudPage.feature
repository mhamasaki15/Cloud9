Feature: Word Cloud Page
	In order to use the site
	As a user
	I want to be able to use the Word Cloud Page

	Scenario: Navigate to word cloud page
		Given I searched for an artist "Beyonce"
		When I am on the word cloud page
		Then the title should be "Beyonce"

	Scenario: Button takes user to word cloud page
		Given I am on the home page
		And search button is clickable
		When I click the search button
		Then the user is navigated to the Word Cloud page

	Scenario: Back Button to search
		Given I am on the word cloud page
		When I click on the back button
		Then the user is navigated to the home page

	Scenario: Add button
		Given I am on the word cloud page
		And there is "Beyonce" in the input box
		And "Kanye West" is the selected artist
		When the user clicks the add button
		Then the user is navigated to the word cloud page
		And the selected artists are "Kanye West" and "Beyonce"

	Scenario: Share button
		Given I am on the word cloud page
		And there is a valid word cloud
		When the user clicks the share button
		Then the facebook share feature is enabled

	Scenario: Search button
		Given I am on the word cloud page
		And there is "Kanye West" in the input box
		And "Beyonce" was the selected artist
		When the user clicks the search button
		Then the user is navigated to the word cloud page
		And the selected artist is "Kanye"
