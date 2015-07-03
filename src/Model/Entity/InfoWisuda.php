<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InfoWisuda Entity.
 */
class InfoWisuda extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'no_induk' => true,
        'judul' => true,
        'date_create' => true,
        'kontent' => true,
    ];
}
