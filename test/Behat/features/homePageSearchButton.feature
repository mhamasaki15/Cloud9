Feature: Home Page Search Button
	In order to use the site
	As a user
	I want to be able to use the home page search button

	Scenario: Button only clickable if search button enabled
		Given I am on the home page
		When search button is enabled
		Then the search button is clickable

	Scenario: Button takes user to word cloud page
		Given I am on the home page
		And search button is clickable
		When I click the search button
		Then the user is navigated to the Word Cloud page


