<?php

$I = new AcceptanceTester($scenario ?? null);
$I->wantTo('see Laravel links on homepage');

$I->amOnPage('/');

$I->seeInTitle('Wirtualna biblioteka');

