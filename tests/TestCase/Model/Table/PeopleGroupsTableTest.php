<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleGroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleGroupsTable Test Case
 */
class PeopleGroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleGroupsTable
     */
    public $PeopleGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_groups',
        'app.people',
        'app.locations',
        'app.groups',
        'app.sessions',
        'app.people_sessions',
        'app.datasets',
        'app.recurrent_data'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleGroups') ? [] : ['className' => 'App\Model\Table\PeopleGroupsTable'];
        $this->PeopleGroups = TableRegistry::get('PeopleGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleGroups);

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
