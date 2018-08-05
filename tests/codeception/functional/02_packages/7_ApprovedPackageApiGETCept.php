<?php
use tests\codeception\_support\TestHelper;

$I = new FunctionalTester($scenario);
$I->wantTo('Ensure that GET /packages/published works');
$I->haveHttpHeader('Content-Type', 'application/json');
$accessToken = TestHelper::readFile('admin_token');
$I->amBearerAuthenticated($accessToken);
$I->sendGET('/v1/packages/published');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('"status":"Approved"');
$I->seeResponseContains('"items"');
$I->seeResponseContains('"_meta"');
$I->seeResponseContains('"_links"');
$I->seeResponseContains('"totalCount"');
$I->seeResponseContainsJson(['totalCount'=>1]);
