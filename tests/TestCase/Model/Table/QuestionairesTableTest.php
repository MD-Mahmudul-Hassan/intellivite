<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionairesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionairesTable Test Case
 */
class QuestionairesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionairesTable
     */
    public $Questionaires;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questionaires',
        'app.users',
        'app.orders',
        'app.products',
        'app.report_status',
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
        $config = TableRegistry::exists('Questionaires') ? [] : ['className' => QuestionairesTable::class];
        $this->Questionaires = TableRegistry::get('Questionaires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questionaires);

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
