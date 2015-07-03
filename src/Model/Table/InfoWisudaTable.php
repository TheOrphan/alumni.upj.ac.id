<?php
namespace App\Model\Table;

use App\Model\Entity\InfoWisuda;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InfoWisuda Model
 *
 */
class InfoWisudaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('info_wisuda');
        $this->displayField('id_informasi');
        $this->primaryKey('id_informasi');
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
            ->add('id_informasi', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_informasi', 'create');
            
        $validator
            ->add('no_induk', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_induk', 'create')
            ->notEmpty('no_induk');
            
        $validator
            ->requirePresence('judul', 'create')
            ->notEmpty('judul');
            
        $validator
            ->add('date_create', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_create', 'create')
            ->notEmpty('date_create');
            
        $validator
            ->requirePresence('kontent', 'create')
            ->notEmpty('kontent');

        return $validator;
    }
}
