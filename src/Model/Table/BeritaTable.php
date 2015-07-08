<?php
namespace App\Model\Table;

use App\Model\Entity\Beritum;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Berita Model
 *
 */
class BeritaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('berita');
        $this->displayField('id_berita');
        $this->primaryKey('id_berita');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id_berita', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_berita', 'create');
            
        $validator
            ->add('no_induk', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_induk', 'create')
            ->notEmpty('no_induk');
            
        $validator
            ->requirePresence('nm_berita', 'create')
            ->notEmpty('nm_berita');
            
        $validator
            ->requirePresence('lingkup', 'create')
            ->notEmpty('lingkup');

        return $validator;
    }
}
