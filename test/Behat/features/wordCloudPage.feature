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
		
