<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mahasiswa Entity.
 */
class Mahasiswa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'no_induk' => true,
        'password' => true,
        'role' => true,
        'nama' => true,
        'alamat' => true,
        'tlpn' => true,
        'email' => true,
        'prodi' => true,
        'thn_masuk' => true,
        'foto' => true,
        'date_create' => true,
    ];
}
