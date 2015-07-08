<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Iluniprodi Entity.
 */
class Iluniprodi extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nm_prodi' => true,
        'nm_ketua' => true,
        'tlpn' => true,
        'email' => true,
    ];
}
