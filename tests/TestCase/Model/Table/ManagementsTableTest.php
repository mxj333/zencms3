<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManagementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManagementsTable Test Case
 */
class ManagementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ManagementsTable
     */
    public $Managements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.managements',
        'app.structures'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Managements') ? [] : ['className' => 'App\Model\Table\ManagementsTable'];
        $this->Managements = TableRegistry::get('Managements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Managements);

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
