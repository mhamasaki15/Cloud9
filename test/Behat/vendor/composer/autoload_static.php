<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ba4b0b880dfe0b1a4627f9169b7d502
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\DomCrawler\\' => 29,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\CssSelector\\' => 30,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
            'Symfony\\Component\\BrowserKit\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\DomCrawler\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dom-crawler',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Symfony\\Component\\BrowserKit\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/browser-kit',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'WebDriver' => 
            array (
                0 => __DIR__ . '/..' . '/instaclick/php-webdriver/lib',
            ),
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/finder',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Stream' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/stream',
            ),
            'Guzzle\\Parser' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/parser',
            ),
            'Guzzle\\Http' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/http',
            ),
            'Guzzle\\Common' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/common',
            ),
            'Goutte' => 
            array (
                0 => __DIR__ . '/..' . '/fabpot/goutte',
            ),
        ),
        'B' => 
        array (
            'Buzz' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/buzz/lib',
            ),
            'Behat\\SahiClient' => 
            array (
                0 => __DIR__ . '/..' . '/behat/sahi-client/src',
            ),
            'Behat\\Mink\\Driver' => 
            array (
                0 => __DIR__ . '/..' . '/behat/mink-sahi-driver/src',
                1 => __DIR__ . '/..' . '/behat/mink-zombie-driver/src',
                2 => __DIR__ . '/..' . '/behat/mink-browserkit-driver/src',
                3 => __DIR__ . '/..' . '/behat/mink-goutte-driver/src',
                4 => __DIR__ . '/..' . '/behat/mink-selenium2-driver/src',
            ),
            'Behat\\MinkExtension' => 
            array (
                0 => __DIR__ . '/..' . '/behat/mink-extension/src',
            ),
            'Behat\\Mink' => 
            array (
                0 => __DIR__ . '/..' . '/behat/mink/src',
            ),
            'Behat\\Gherkin' => 
            array (
                0 => __DIR__ . '/..' . '/behat/gherkin/src',
            ),
            'Behat\\Behat' => 
            array (
                0 => __DIR__ . '/..' . '/behat/behat/src',
            ),
        ),
    );

    public static $classMap = array (
        'ChromeDriver' => __DIR__ . '/..' . '/facebook/webdriver/lib/chrome/ChromeDriver.php',
        'ChromeDriverService' => __DIR__ . '/..' . '/facebook/webdriver/lib/chrome/ChromeDriverService.php',
        'ChromeOptions' => __DIR__ . '/..' . '/facebook/webdriver/lib/chrome/ChromeOptions.php',
        'DesiredCapabilities' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/DesiredCapabilities.php',
        'DriverCommand' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/DriverCommand.php',
        'DriverCommandExecutor' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/service/DriverCommandExecutor.php',
        'DriverService' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/service/DriverService.php',
        'ElementNotSelectableException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'ElementNotVisibleException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'EventFiringWebDriver' => __DIR__ . '/..' . '/facebook/webdriver/lib/support/events/EventFiringWebDriver.php',
        'EventFiringWebDriverNavigation' => __DIR__ . '/..' . '/facebook/webdriver/lib/support/events/EventFiringWebDriverNavigation.php',
        'EventFiringWebElement' => __DIR__ . '/..' . '/facebook/webdriver/lib/support/events/EventFiringWebElement.php',
        'ExecuteMethod' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/ExecuteMethod.php',
        'ExpectedException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'FileDetector' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/FileDetector.php',
        'FirefoxDriver' => __DIR__ . '/..' . '/facebook/webdriver/lib/firefox/FirefoxDriver.php',
        'FirefoxProfile' => __DIR__ . '/..' . '/facebook/webdriver/lib/firefox/FirefoxProfile.php',
        'HttpCommandExecutor' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/HttpCommandExecutor.php',
        'IMEEngineActivationFailedException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'IMENotAvailableException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'IndexOutOfBoundsException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'InvalidCookieDomainException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'InvalidCoordinatesException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'InvalidElementStateException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'InvalidSelectorException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'JavaScriptExecutor' => __DIR__ . '/..' . '/facebook/webdriver/lib/JavaScriptExecutor.php',
        'LocalFileDetector' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/LocalFileDetector.php',
        'MoveTargetOutOfBoundsException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoAlertOpenException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoCollectionException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoScriptResultException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoStringException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoStringLengthException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoStringWrapperException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoSuchCollectionException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoSuchDocumentException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoSuchDriverException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoSuchElementException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoSuchFrameException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NoSuchWindowException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'NullPointerException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'RemoteExecuteMethod' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/RemoteExecuteMethod.php',
        'RemoteKeyboard' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/RemoteKeyboard.php',
        'RemoteMouse' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/RemoteMouse.php',
        'RemoteTargetLocator' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/RemoteTargetLocator.php',
        'RemoteTouchScreen' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/RemoteTouchScreen.php',
        'RemoteWebDriver' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/RemoteWebDriver.php',
        'RemoteWebElement' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/RemoteWebElement.php',
        'ScriptTimeoutException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'SessionNotCreatedException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'StaleElementReferenceException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'TimeOutException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'URLChecker' => __DIR__ . '/..' . '/facebook/webdriver/lib/net/URLChecker.php',
        'UnableToSetCookieException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UnexpectedAlertOpenException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UnexpectedJavascriptException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UnexpectedTagNameException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UnknownCommandException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UnknownServerException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UnrecognizedExceptionException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UnsupportedOperationException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'UselessFileDetector' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/UselessFileDetector.php',
        'WebDriver' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriver.php',
        'WebDriverAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverAction.php',
        'WebDriverActions' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/WebDriverActions.php',
        'WebDriverAlert' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverAlert.php',
        'WebDriverBrowserType' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/WebDriverBrowserType.php',
        'WebDriverButtonReleaseAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverButtonReleaseAction.php',
        'WebDriverBy' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverBy.php',
        'WebDriverCapabilities' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverCapabilities.php',
        'WebDriverCapabilityType' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/WebDriverCapabilityType.php',
        'WebDriverClickAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverClickAction.php',
        'WebDriverClickAndHoldAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverClickAndHoldAction.php',
        'WebDriverCommand' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/WebDriverCommand.php',
        'WebDriverCommandExecutor' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverCommandExecutor.php',
        'WebDriverCompositeAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/WebDriverCompositeAction.php',
        'WebDriverContextClickAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverContextClickAction.php',
        'WebDriverCoordinates' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverCoordinates.php',
        'WebDriverCurlException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'WebDriverDimension' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverDimension.php',
        'WebDriverDispatcher' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverDispatcher.php',
        'WebDriverDoubleClickAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverDoubleClickAction.php',
        'WebDriverDoubleTapAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverDoubleTapAction.php',
        'WebDriverDownAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverDownAction.php',
        'WebDriverElement' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverElement.php',
        'WebDriverEventListener' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverEventListener.php',
        'WebDriverException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
        'WebDriverExpectedCondition' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExpectedCondition.php',
        'WebDriverFlickAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverFlickAction.php',
        'WebDriverFlickFromElementAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverFlickFromElementAction.php',
        'WebDriverHasInputDevices' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverHasInputDevices.php',
        'WebDriverKeyDownAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverKeyDownAction.php',
        'WebDriverKeyUpAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverKeyUpAction.php',
        'WebDriverKeyboard' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverKeyboard.php',
        'WebDriverKeys' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverKeys.php',
        'WebDriverKeysRelatedAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverKeysRelatedAction.php',
        'WebDriverLocatable' => __DIR__ . '/..' . '/facebook/webdriver/lib/internal/WebDriverLocatable.php',
        'WebDriverLongPressAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverLongPressAction.php',
        'WebDriverMouse' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverMouse.php',
        'WebDriverMouseAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverMouseAction.php',
        'WebDriverMouseMoveAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverMouseMoveAction.php',
        'WebDriverMoveAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverMoveAction.php',
        'WebDriverMoveToOffsetAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverMoveToOffsetAction.php',
        'WebDriverNavigation' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverNavigation.php',
        'WebDriverOptions' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverOptions.php',
        'WebDriverPlatform' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverPlatform.php',
        'WebDriverPoint' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverPoint.php',
        'WebDriverResponse' => __DIR__ . '/..' . '/facebook/webdriver/lib/remote/WebDriverResponse.php',
        'WebDriverScrollAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverScrollAction.php',
        'WebDriverScrollFromElementAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverScrollFromElementAction.php',
        'WebDriverSearchContext' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverSearchContext.php',
        'WebDriverSelect' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverSelect.php',
        'WebDriverSendKeysAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverSendKeysAction.php',
        'WebDriverSingleKeyAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/internal/WebDriverSingleKeyAction.php',
        'WebDriverTapAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverTapAction.php',
        'WebDriverTargetLocator' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverTargetLocator.php',
        'WebDriverTimeouts' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverTimeouts.php',
        'WebDriverTouchAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverTouchAction.php',
        'WebDriverTouchActions' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/WebDriverTouchActions.php',
        'WebDriverTouchScreen' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/WebDriverTouchScreen.php',
        'WebDriverUpAction' => __DIR__ . '/..' . '/facebook/webdriver/lib/interactions/touch/WebDriverUpAction.php',
        'WebDriverWait' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverWait.php',
        'WebDriverWindow' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverWindow.php',
        'XPathLookupException' => __DIR__ . '/..' . '/facebook/webdriver/lib/WebDriverExceptions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ba4b0b880dfe0b1a4627f9169b7d502::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ba4b0b880dfe0b1a4627f9169b7d502::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5ba4b0b880dfe0b1a4627f9169b7d502::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5ba4b0b880dfe0b1a4627f9169b7d502::$classMap;

        }, null, ClassLoader::class);
    }
}