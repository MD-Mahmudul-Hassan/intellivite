<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplementsTable Test Case
 */
class SupplementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplementsTable
     */
    public $Supplements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supplements',
        'app.supplement_reports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Supplements') ? [] : ['className' => SupplementsTable::class];
        $this->Supplements = TableRegistry::get('Supplements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Supplements);

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
