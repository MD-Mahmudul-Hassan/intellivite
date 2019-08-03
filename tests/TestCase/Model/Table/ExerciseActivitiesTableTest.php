<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExerciseActivitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExerciseActivitiesTable Test Case
 */
class ExerciseActivitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExerciseActivitiesTable
     */
    public $ExerciseActivities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.exercise_activities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ExerciseActivities') ? [] : ['className' => ExerciseActivitiesTable::class];
        $this->ExerciseActivities = TableRegistry::get('ExerciseActivities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExerciseActivities);

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
