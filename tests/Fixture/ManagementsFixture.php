<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ManagementsFixture
 *
 */
class ManagementsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'structure_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '结构表ID', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'comment' => '名称', 'precision' => null, 'fixed' => null],
        'label' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'comment' => '中文显示', 'precision' => null, 'fixed' => null],
        'icon' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'url' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '', 'comment' => '外链地址', 'precision' => null, 'fixed' => null],
        'target' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'comment' => '打开目标窗口', 'precision' => null, 'fixed' => null],
        'weight' => ['type' => 'integer', 'length' => 4, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => '权重', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'integer', 'length' => 4, 'unsigned' => true, 'null' => true, 'default' => '1', 'comment' => '1，启用', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'structure_id' => 1,
            'name' => 'Lorem ipsum dolor ',
            'label' => 'Lorem ipsum dolor ',
            'icon' => 'Lorem ipsum dolor ',
            'url' => 'Lorem ipsum dolor sit amet',
            'target' => 'Lorem ipsum dolor ',
            'weight' => 1,
            'status' => 1
        ],
    ];
}
