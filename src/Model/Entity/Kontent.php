<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kontent Entity.
 */
class Kontent extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nm_pengurus' => true,
        'dana_bentuk' => true,
        'dana_prosedur' => true,
        'dana_manfaat' => true,
        'faq' => true,
    ];
}
