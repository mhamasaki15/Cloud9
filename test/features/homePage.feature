Feature: Artist Search
	When User first enters the page
	the User has the ability to access
	all functionalities.

	Scenario: Searching Artists
		Given there is a textbox in the artist web page
		When I add "Beyonce" into the textbox
		Then I should see suggestions in the dropdown box
		And I should have the ability to choose the artist