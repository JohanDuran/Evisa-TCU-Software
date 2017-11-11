<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleSessionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleSessionsTable Test Case
 */
class PeopleSessionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleSessionsTable
     */
    public $PeopleSessions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_sessions',
        'app.sessions',
        'app.groups',
        'app.locations',
        'app.people',
        'app.datasets',
        'app.recurrent_data',
        'app.people_groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleSessions') ? [] : ['className' => 'App\Model\Table\PeopleSessionsTable'];
        $this->PeopleSessions = TableRegistry::get('PeopleSessions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleSessions);

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
