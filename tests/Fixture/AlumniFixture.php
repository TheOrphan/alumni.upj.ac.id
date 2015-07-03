<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumniFixture
 *
 */
class AlumniFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumni';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_alumni' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_mhs' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'password' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'no_induk' => ['type' => 'integer', 'length' => 15, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'thn_lulus' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'nm_tmp_kerja' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'alamat_kerja' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_create' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'role' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_alumni'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'id_alumni' => 1,
            'id_mhs' => 1,
            'password' => 'Lorem ipsum dolor ',
            'no_induk' => 1,
            'thn_lulus' => '2015-07-03 03:47:59',
            'nm_tmp_kerja' => 'Lorem ipsum dolor sit amet',
            'alamat_kerja' => 'Lorem ipsum dolor sit amet',
            'date_create' => '2015-07-03 03:47:59',
            'role' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
