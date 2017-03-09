Feature: Word Cloud Page
	In order to use the site
	As a user
	I want to be able to use the Word Cloud Page

	Scenario: R3Navigate to word cloud page
		Given I searched for an artist "Beyonce"
		When I am on the word cloud page
		Then the title should be "Beyonce"

	Scenario: R1Multiple artist name
		Given I am on the word cloud page
		When artist names are "Beyonce" and "Kanye West"
		Then "Beyonce, Kanye West" is title

	Scenario: Button takes user to word cloud page
		Given I am on the home page
		And search button is clickable
		When I click the search button
		Then the user is navigated to the Word Cloud page

	Scenario: Back Button to search
		Given I am on the word cloud page
		When I click on the back button
		Then the user is navigated to the home page

	Scenario: R2Add button
		Given I am on the word cloud page
		And there is "Beyonce" in the input box
		And "Kanye West" is the selected artist
		When the user clicks the add button
		Then the user is navigated to the word cloud page
		And the selected artists are "Kanye West" and "Beyonce"

	Scenario: R3Add Changes title
		Given I am on the word cloud page
		And there is "Beyonce" in the input box
		And "Kanye West" is the selected artist
		When the user clicks the add button
		Then the user is navigated to the word cloud page
		And the title is "Beyonce, Kanye West"

	Scenario: R1Add button clickable
		Given I am on the word cloud page
		When there is "Beyonce" in the input box
		And "Kanye West" is the selected artist
		Then add button is clickable

	Scenario: R1Share button
		Given I am on the word cloud page
		And there is a valid word cloud
		When the user clicks the share button
		Then the facebook share feature is enabled

	Scenario: R2Share button
		Given I am on the word cloud page
		And there is a valid word cloud
		When the user clicks the share button
		Then the facebook share feature is enabled
		And image is part of post

	Scenario: R3Share button
		Given I am on the word cloud page
		And there is a valid word cloud
		When the user clicks the share button
		Then the facebook share feature is enabled
		And user is logged in
		



	Scenario: Search button
		Given I am on the word cloud page
		And there is "Kanye West" in the input box
		And "Beyonce" was the selected artist
		When the user clicks the search button
		Then the user is navigated to the word cloud page
		And the selected artist is "Kanye"
