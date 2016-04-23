<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PreviewsFixture
 *
 */
class PreviewsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'p_name' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'p_rate' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => '0', 'comment' => '费率', 'precision' => null, 'fixed' => null],
        'p_body' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '内容', 'precision' => null],
        'p_date' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => '开拍日期', 'precision' => null, 'autoIncrement' => null],
        'p_status' => ['type' => 'integer', 'length' => 4, 'unsigned' => true, 'null' => true, 'default' => '1', 'comment' => '状态：1,发布；9， 禁用', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
            'p_name' => 'Lorem ipsum dolor sit amet',
            'p_rate' => 'L',
            'p_body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'p_date' => 1,
            'p_status' => 1,
            'created' => '2016-02-27 15:33:32',
            'modified' => '2016-02-27 15:33:32'
        ],
    ];
}
