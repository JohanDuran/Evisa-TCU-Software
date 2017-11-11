<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatasetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatasetsTable Test Case
 */
class DatasetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DatasetsTable
     */
    public $Datasets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.datasets',
        'app.people',
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
        $config = TableRegistry::exists('Datasets') ? [] : ['className' => 'App\Model\Table\DatasetsTable'];
        $this->Datasets = TableRegistry::get('Datasets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Datasets);

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
