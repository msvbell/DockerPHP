<?php
namespace Page;

class Login
{
    protected $tester;

    // include url of current page
    public static $URL = '/admin/';

    public static $usernameField = '#input-username';
    public static $passwordField = '#input-password';

    public static $loginButton = "form button[type=submit]";

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    public function login($name, $password)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->fillField(self::$usernameField, $name);
        $I->fillField(self::$passwordField, $password);
        $I->click(self::$loginButton);

        return $this;
    }


}
