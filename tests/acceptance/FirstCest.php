<?php


class FirstCest
{
    public static $cssElement = "//*[contains(@class,'learningPathCta') and contains(text(),'%s')]";
    public static $price = "€300 per month";


    public static $path = "//*[contains(@class,'pathHit__title') and contains(text(),'Front-end developer')]";


    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function pathIsVisible(AcceptanceTester $I)
    {
        $I->amOnPage("paths");
        $I->waitForText("Your new career");
        $I->wait(3);
        $I->click("Development");
        $I->waitForElementVisible(self::$path);
        $I->click(self::$path);
        $result = sprintf(self::$cssElement, self::$price);
        $I->seeElement($result);
    }
}
