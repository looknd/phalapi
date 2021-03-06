<?php
/**
 * PhpUnderControl_DomainUser_Test
 *
 * PHPUnit test for Domain_User in ./Demo/Domain/User.php
 *
 * @author: dogstar 20150208
 */

require_once dirname(__FILE__) . '/../test_env.php';

if (!class_exists('Domain_User')) {
    require dirname(__FILE__) . '/./Demo/Domain/User.php';
}

class PhpUnderControl_DomainUser_Test extends PHPUnit_Framework_TestCase
{
    public $domainUser;

    protected function setUp()
    {
        parent::setUp();

        $this->domainUser = new Domain_User();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetBaseInfo
     */ 
    public function testGetBaseInfo()
    {
        $userId = '1';

        $rs = $this->domainUser->getBaseInfo($userId);

        $this->assertArrayHasKey('id', $rs);
        $this->assertArrayHasKey('name', $rs);
        $this->assertArrayHasKey('note', $rs);

        $this->assertEquals('dogstar', $rs['name']);
    }

}
