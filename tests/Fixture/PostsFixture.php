<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostsFixture
 *
 */
class PostsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'first_name' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_name' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'position' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'office' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'start_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'age' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'salary' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'seq' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'extn' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'seq' => ['type' => 'index', 'columns' => ['seq'], 'length' => []],
        ],
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
            'first_name' => 'Lorem ipsum dolor sit amet',
            'last_name' => 'Lorem ipsum dolor sit amet',
            'position' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'office' => 'Lorem ipsum dolor sit amet',
            'start_date' => '2016-02-11 12:57:05',
            'age' => 1,
            'salary' => 1,
            'seq' => 1,
            'extn' => 'Lorem '
        ],
    ];
}
