<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserSupplementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserSupplementsTable Test Case
 */
class UserSupplementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserSupplementsTable
     */
    public $UserSupplements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_supplements',
        'app.users',
        'app.orders',
        'app.products',
        'app.questionaires',
        'app.report_status',
        'app.supplement_reports',
        'app.supplements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserSupplements') ? [] : ['className' => UserSupplementsTable::class];
        $this->UserSupplements = TableRegistry::get('UserSupplements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserSupplements);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
