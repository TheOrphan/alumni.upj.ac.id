<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Wisuda Entity.
 */
class Wisuda extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'no_induk' => true,
        'no_reg' => true,
        'biaya' => true,
        'tagihan' => true,
        'status' => true,
        'date_create' => true,
    ];
}
