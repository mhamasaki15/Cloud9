Feature: Home Page Suggestions
	In order to use the site
	As a user
	I want to be able to use the artist suggestions feature

	Scenario: R4Type more than three characters
		Given I am on the home page
		When I type "kany"
		Then suggestion menu appears
		And 3 artists appear
	
	Scenario: R5Suggestions drop down shows
		Given I am on the home page
		When I type "kany"
		Then the suggestion menu appears

	Scenario: Type less than three characters
		Given I am on the home page
		When I type "aa"
		Then I should not see the pop up menu

	Scenario: R7When clicking a suggestion
		Given I am on the home page
		And I type "kany"
		When I click on "Kany Garcia"
		Then "Kany Garcia" should populate the input box
		And the search button should be enabled 
	
	Scenario: R6Each suggestion has a name and an image
		Given I am on the home page
		When "Kanye West" is in the input box
		Then each suggestion has a name and an image


