<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecurrentDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecurrentDataTable Test Case
 */
class RecurrentDataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecurrentDataTable
     */
    public $RecurrentData;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recurrent_data',
        'app.datasets',
        'app.people',
        'app.locations',
        'app.groups',
        'app.sessions',
        'app.people_sessions',
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
        $config = TableRegistry::exists('RecurrentData') ? [] : ['className' => 'App\Model\Table\RecurrentDataTable'];
        $this->RecurrentData = TableRegistry::get('RecurrentData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RecurrentData);

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
