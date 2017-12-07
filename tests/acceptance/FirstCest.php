<?php


class FirstCest
{
    public static $pathPage = "Your new career";
    public static $xPath = "//*[contains(@class,'pathHit__title') and contains(text(),'Front-end developer')]";
    public static $titlePath = "FRONT-END DEVELOPER";
    public static $price = "//*[contains(@class,'learningPathCta') and contains(text(),'%s')]";
    public static $value = "€300 per month";

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function pathIsVisible(AcceptanceTester $I)
    {
        $I->amOnPage("/paths");
        $I->waitForElementVisible(self::$xPath);
        $I->click(self::$xPath);
        $I->waitForText(self::$titlePath);
        $price = sprintf(self::$price, self::$value);
        $I->waitForElementVisible($price);
    }
}


/*
 * "//*[contains(@class,'learningPathCta') and contains(text(),'%s')]";
"€300 per month";
"//*[contains(@class,'pathHit__title') and contains(text(),'Front-end developer')]";
 */