<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join/login pages');
$I->amOnPage('/');
$I->see('Welcome', 'h1');

$I->seeLink('Join', '/user/join');
$I->seeLink('Login', '/user/login');

$I->amOnPage('/user/join');
$I->see('Join Us', 'h1');

$I->amOnPage('/user/login');
$I->see('Login', 'h1');