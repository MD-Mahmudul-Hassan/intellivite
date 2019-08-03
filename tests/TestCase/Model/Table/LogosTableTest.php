<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogosTable Test Case
 */
class LogosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogosTable
     */
    public $Logos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.logos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Logos') ? [] : ['className' => LogosTable::class];
        $this->Logos = TableRegistry::get('Logos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Logos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
