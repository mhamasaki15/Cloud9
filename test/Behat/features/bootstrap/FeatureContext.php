<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends BehatContext
{
    /**
     * @Given /^I am on the home page$/
     */
    public function iAmOnTheHomePage()
    {
        return true;
    }

    /**
     * @Then /^I should see no more than three artist suggestions$/
     */
    public function iShouldSeeNoMoreThanThreeArtistSuggestions()
    {
        return true;}



    /**
     * @Given /^I am on the home page$/
     */
    /**
     * @When /^"([^"]*)" is in the input box$/
     */
    public function isInTheInputBox($arg1)
    {
        return true;
    }

    /**
     * @Then /^the search button should not be enabled$/
     */
    public function theSearchButtonShouldNotBeEnabled()
    {
        return true;
    }

    /**
     * @When /^I click on the input box$/
     */
    public function iClickOnTheInputBox()
    {
       return true;
    }

    /**
     * @Given /^enter a character$/
     */
    public function enterACharacter()
    {
        return true;
    }

    /**
     * @Then /^that character should populate the input box$/
     */
    public function thatCharacterShouldPopulateTheInputBox()
    {
        return true;
    }

    /**
     * @Given /^I am on the home pae$/
     */
    public function iAmOnTheHomePae()
    {
        return true;
    }

    /**
     * @When /^I edit the input box$/
     */
    public function iEditTheInputBox()
    {
        return true;
    }

    /**
     * @When /^search button is enabled$/
     */
    public function searchButtonIsEnabled()
    {
        return true;
    }

    /**
     * @Then /^the search button is clickable$/
     */
    public function theSearchButtonIsClickable()
    {
        return true;
    }

    /**
     * @Given /^search button is clickable$/
     */
    public function searchButtonIsClickable()
    {
        return true;
    }

    /**
     * @When /^I click the search button$/
     */
    public function iClickTheSearchButton()
    {
        return true;
    }

    /**
     * @Then /^the user is navigated to the Word Cloud page$/
     */
    public function theUserIsNavigatedToTheWordCloudPage()
    {
        return true;
    }

    /**
     * @Given /^I am on the song list page$/
     */
    public function iAmOnTheSongListPage()
    {
        return true;
    }

    /**
     * @Given /^the selected artist is "([^"]*)"$/
     */
    public function theSelectedArtistIs($arg1)
    {
        return true;
    }

    /**
     * @When /^the word selected is "([^"]*)"$/
     */
    public function theWordSelectedIs($arg1)
    {
        return true;
    }

    /**
     * @Then /^"([^"]*)" should be the song title$/
     */
    public function shouldBeTheSongTitle($arg1)
    {
        return true;
    }

    /**
     * @When /^the user clicks on back to word cloud button$/
     */
    public function theUserClicksOnBackToWordCloudButton()
    {
        return true;
    }

    /**
     * @Then /^the user is navigated back to the word cloud page$/
     */
    public function theUserIsNavigatedBackToTheWordCloudPage()
    {
        return true;
    }

    /**
     * @Given /^the selected word is "([^"]*)"$/
     */
    public function theSelectedWordIs($arg1)
    {
        return true;
    }

    /**
     * @When /^the user clicks on a song title$/
     */
    public function theUserClicksOnASongTitle()
    {
        return true;
    }

    /**
     * @Then /^the user is navigated to the lyric page$/
     */
    public function theUserIsNavigatedToTheLyricPage()
    {
        return true;
    }

    /**
     * @When /^I type "([^"]*)"$/
     */
    public function iType($arg1)
    {
        return true;
    }

    /**
     * @Then /^I should not see the pop up menu$/
     */
    public function iShouldNotSeeThePopUpMenu()
    {
        return true;
    }

    /**
     * @When /^I click on "([^"]*)"$/
     */
    public function iClickOn($arg1)
    {
        return true;
    }

    /**
     * @Then /^"([^"]*)" should populate the input box$/
     */
    public function shouldPopulateTheInputBox($arg1)
    {
        return true;
    }

    /**
     * @Given /^the search button should be enabled$/
     */
    public function theSearchButtonShouldBeEnabled()
    {
        return true;
    }

    /**
     * @Then /^each suggestion has a name and an image$/
     */
    public function eachSuggestionHasANameAndAnImage()
    {
        throw Exception;
    }

    /**
     * @Given /^I am on the word cloud page$/
     */
    public function iAmOnTheWordCloudPage()
    {
        return true;
    }

    /**
     * @When /^a valid word cloud was generated$/
     */
    public function aValidWordCloudWasGenerated()
    {
        return true;
    }

    /**
     * @Then /^more than two colors are used$/
     */
    public function moreThanTwoColorsAreUsed()
    {
        return true;
    }

    /**
     * @When /^an artist has at least (\d+) eligible words$/
     */
    public function anArtistHasAtLeastEligibleWords($arg1)
    {
        return true;
    }

    /**
     * @Then /^(\d+) words are displayed$/
     */
    public function wordsAreDisplayed($arg1)
    {
        return true;
    }

    /**
     * @When /^there are less than (\d+) eligible words$/
     */
    public function thereAreLessThanEligibleWords($arg1)
    {
        return true;
    }

    /**
     * @Then /^less than (\d+) words are displayed$/
     */
    public function lessThanWordsAreDisplayed($arg1)
    {
        return true;
    }

    /**
     * @Then /^size of words proportional to the frequency$/
     */
    public function sizeOfWordsProportionalToTheFrequency()
    {
        return true;
    }

    /**
     * @Then /^each word in the word cloud has a link$/
     */
    public function eachWordInTheWordCloudHasALink()
    {
        return true;
    }

    /**
     * @Given /^I searched for an artist "([^"]*)"$/
     */
    public function iSearchedForAnArtist($arg1)
    {
        return true;
    }

    /**
     * @Then /^the title should be "([^"]*)"$/
     */
    public function theTitleShouldBe($arg1)
    {
        return true;
    }

    /**
     * @When /^I click on the back button$/
     */
    public function iClickOnTheBackButton()
    {
        return true;
    }

    /**
     * @Then /^the user is navigated to the home page$/
     */
    public function theUserIsNavigatedToTheHomePage()
    {
        return true;
    }

    /**
     * @Given /^there is "([^"]*)" in the input box$/
     */
    public function thereIsInTheInputBox($arg1)
    {
        return true;
    }

    /**
     * @Given /^"([^"]*)" is the selected artist$/
     */
    public function isTheSelectedArtist($arg1)
    {
        return true;
    }

    /**
     * @When /^the user clicks the add button$/
     */
    public function theUserClicksTheAddButton()
    {
        throw Exception;
    }

    /**
     * @Then /^the user is navigated to the word cloud page$/
     */
    public function theUserIsNavigatedToTheWordCloudPage2()
    {
        return true;
    }

    /**
     * @Given /^the selected artists are "([^"]*)" and "([^"]*)"$/
     */
    public function theSelectedArtistsAreAnd($arg1, $arg2)
    {
        return false;
    }

    /**
     * @Given /^there is a valid word cloud$/
     */
    public function thereIsAValidWordCloud()
    {
        return true;
    }

    /**
     * @When /^the user clicks the share button$/
     */
    public function theUserClicksTheShareButton()
    {
        throw Exception;
    }

    /**
     * @Then /^the facebook share feature is enabled$/
     */
    public function theFacebookShareFeatureIsEnabled()
    {
        return false;
    }

    /**
     * @Given /^"([^"]*)" was the selected artist$/
     */
    public function wasTheSelectedArtist($arg1)
    {
        return true;
    }

    /**
     * @When /^the user clicks the search button$/
     */
    public function theUserClicksTheSearchButton()
    {
       throw Exception;
    }

    /**
     * @Given /^the user is on the songListPage$/
     */
    public function theUserIsOnTheSonglistpage()
    {
      return true;
    }

    /**
     * @When /^the user has selected "([^"]*)"$/
     */
    public function theUserHasSelected($arg1)
    {
        return true;
    }

    /**
     * @Given /^the user has navigated to the lyricsPage$/
     */
    public function theUserHasNavigatedToTheLyricspage()
    {
        return true;
    }

    /**
     * @Then /^the lyricsPage textbox is filled with the lyrics of "([^"]*)"$/
     */
    public function theLyricspageTextboxIsFilledWithTheLyricsOf($arg1)
    {
        return true;
    }

    /**
     * @Given /^the word "([^"]*)" is highlighted everywhere in the lyrics of "([^"]*)"$/
     */
    public function theWordIsHighlightedEverywhereInTheLyricsOf($arg1, $arg2)
    {
        return true;
    }

    /**
     * @Given /^the user is on the lyricsPage$/
     */
    public function theUserIsOnTheLyricspage()
    {
        return true;
    }

    /**
     * @When /^the user has navigated through the ArtistSearchPage$/
     */
    public function theUserHasNavigatedThroughTheArtistsearchpage()
    {
       return true;
    }

    /**
     * @Given /^the user has navigated through the wordCloudPage$/
     */
    public function theUserHasNavigatedThroughTheWordcloudpage()
    {
        return true;
    }

    /**
     * @Given /^the user has navigated through the songListPage$/
     */
    public function theUserHasNavigatedThroughTheSonglistpage()
    {
        return true;
    }

    /**
     * @Then /^the lyricsPage will display the backToWordCloud button and the backToSongList button$/
     */
    public function theLyricspageWillDisplayTheBacktowordcloudButtonAndTheBacktosonglistButton()
    {
       return true;
    }

    /**
     * @When /^the user has clicked on the backToWordCloud Button$/
     */
    public function theUserHasClickedOnTheBacktowordcloudButton()
    {
        return true;
    }

    /**
     * @Then /^the user is navigated to the wordCloudPage$/
     */
    public function theUserIsNavigatedToTheWordcloudpage3()
    {
        return true;
    }

    /**
     * @Given /^the wordCloud page has the selected artist$/
     */
    public function theWordcloudPageHasTheSelectedArtist()
    {
       return true;
    }

    /**
     * @When /^the user has clicked on the BackToSongList button$/
     */
    public function theUserHasClickedOnTheBacktosonglistButton()
    {
        return true;
    }

    /**
     * @Then /^the user is navigated to the songListPage$/
     */
    public function theUserIsNavigatedToTheSonglistpage()
    {
        return true;
    }


}
