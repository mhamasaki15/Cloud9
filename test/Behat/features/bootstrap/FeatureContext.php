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
     * @When /^I type more than three characters into the input box$/
     */
    public function iTypeMoreThanThreeCharactersIntoTheInputBox()
    {
        return true;
    }

    /**
     * @Then /^I should see no more than three artist suggestions$/
     */
    public function iShouldSeeNoMoreThanThreeArtistSuggestions()
    {
        return true;
    }



}
