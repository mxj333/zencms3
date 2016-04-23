<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreviewsTable Test Case
 */
class PreviewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PreviewsTable
     */
    public $Previews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.previews',
        'app.preview_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Previews') ? [] : ['className' => 'App\Model\Table\PreviewsTable'];
        $this->Previews = TableRegistry::get('Previews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Previews);

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
