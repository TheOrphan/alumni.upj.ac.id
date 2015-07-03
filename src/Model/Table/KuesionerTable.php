<?php
namespace App\Model\Table;

use App\Model\Entity\Kuesioner;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kuesioner Model
 *
 */
class KuesionerTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('kuesioner');
        $this->displayField('id_kuesioner');
        $this->primaryKey('id_kuesioner');
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
            ->add('id_kuesioner', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_kuesioner', 'create');
            
        $validator
            ->add('no_induk', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_induk', 'create')
            ->notEmpty('no_induk');
            
        $validator
            ->requirePresence('file', 'create')
            ->notEmpty('file');
            
        $validator
            ->requirePresence('nama', 'create')
            ->notEmpty('nama');
            
        $validator
            ->add('date_create', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_create', 'create')
            ->notEmpty('date_create');

        return $validator;
    }
}
