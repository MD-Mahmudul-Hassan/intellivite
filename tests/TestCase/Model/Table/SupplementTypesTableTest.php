<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplementTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplementTypesTable Test Case
 */
class SupplementTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplementTypesTable
     */
    public $SupplementTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supplement_types',
        'app.supplements',
        'app.supplement_reports',
        'app.user_supplements',
        'app.users',
        'app.orders',
        'app.products',
        'app.questionaires',
        'app.report_status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SupplementTypes') ? [] : ['className' => SupplementTypesTable::class];
        $this->SupplementTypes = TableRegistry::get('SupplementTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SupplementTypes);

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
