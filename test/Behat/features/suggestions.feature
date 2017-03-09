Feature: Home Page Suggestions
	In order to use the site
	As a user
	I want to be able to use the artist suggestions feature

	Scenario: Type more than three characters
		Given I am on the home page
		When I type "kany"
		Then I should see no more than three artist suggestions

	Scenario: Type less than three characters
		Given I am on the home page
		When I type "aa"
		Then I should not see the pop up menu

	Scenario: When clicking a suggestion
		Given I am on the home page
		And I type "kany"
		When I click on "Kany Garcia"
		Then "Kany Garcia" should populate the input box
		And the search button should be enabled 
	
	Scenario: Each suggestion has a name and an image
		Given I am on the home page
		When "Kanye West" is in the input box
		Then each suggestion has a name and an image


