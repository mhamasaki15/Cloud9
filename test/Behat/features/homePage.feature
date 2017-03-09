Feature: Home Page
	In order to use the site
	As a user
	I want to be able to use the homepage

	Scenario: When no valid artist populates the input box
		Given I am on the home pahe
		When "kan1" is in the input box
		Then the search button should not be enabled

	Scenario: When the text box is empty search not enabled
		Given I am on the home page
		When "" is in the input box
		Then the search button should not be enabled

	Scenario: Input box is editable
		Given I am on the home page
		When I click on the input box
		And enter a character
		Then that character should populate the input box

	Scenario: Everytime user edits text in box the search should be set to no selection
		Given I am on the home pae
		When I edit the input box
		Then the search button should not be enabled