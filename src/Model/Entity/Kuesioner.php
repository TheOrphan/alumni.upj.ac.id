<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kuesioner Entity.
 */
class Kuesioner extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'no_induk' => true,
        'file' => true,
        'nama' => true,
        'date_create' => true,
    ];
}
