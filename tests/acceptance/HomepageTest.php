<?php

class HomepageTest extends \Codeception\Test\Unit
{
    /**
     * @var \AcceptanceTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCanAccessHomepage()
    {
        $this->tester->amOnPage('/');
        $this->tester->see('Hello dear Codeception');
    }
}
