<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Beritum Entity.
 */
class Beritum extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'no_induk' => true,
        'nm_berita' => true,
        'lingkup' => true,
    ];
}
