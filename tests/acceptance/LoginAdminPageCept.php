<?php
use Page\Login as LoginPage;

$I = new AcceptanceTester($scenario);
$I->wantTo('войти в панель администратора');
$I->amOnPage(LoginPage::$URL);
//$I->amOnUrl("http://localhost:8080/admin/");
$I->wait(3);
$I->fillField(LoginPage::$usernameField, "admin");
$I->fillField(LoginPage::$passwordField, "admin");
$I->click(LoginPage::$loginButton);
$I->wait(3);
$I->see("Dashboard");
