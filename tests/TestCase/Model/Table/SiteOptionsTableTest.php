<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SiteOptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SiteOptionsTable Test Case
 */
class SiteOptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SiteOptionsTable
     */
    public $SiteOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.site_options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SiteOptions') ? [] : ['className' => SiteOptionsTable::class];
        $this->SiteOptions = TableRegistry::get('SiteOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SiteOptions);

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
