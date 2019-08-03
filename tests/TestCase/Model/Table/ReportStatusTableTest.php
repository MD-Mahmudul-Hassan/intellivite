<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportStatusTable Test Case
 */
class ReportStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportStatusTable
     */
    public $ReportStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.report_status',
        'app.users',
        'app.orders',
        'app.products',
        'app.questionaires',
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
        $config = TableRegistry::exists('ReportStatus') ? [] : ['className' => ReportStatusTable::class];
        $this->ReportStatus = TableRegistry::get('ReportStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReportStatus);

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
