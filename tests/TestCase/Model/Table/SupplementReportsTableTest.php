<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplementReportsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplementReportsTable Test Case
 */
class SupplementReportsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplementReportsTable
     */
    public $SupplementReports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supplement_reports',
        'app.users',
        'app.orders',
        'app.products',
        'app.questionaires',
        'app.report_status',
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
        $config = TableRegistry::exists('SupplementReports') ? [] : ['className' => SupplementReportsTable::class];
        $this->SupplementReports = TableRegistry::get('SupplementReports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SupplementReports);

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
