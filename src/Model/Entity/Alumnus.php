<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumnus Entity.
 */
class Alumnus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id_mhs' => true,
        'no_induk' => true,
        'thn_lulus' => true,
        'nm_tmp_kerja' => true,
        'alamat_kerja' => true,
        'date_create' => true,
    ];
}
