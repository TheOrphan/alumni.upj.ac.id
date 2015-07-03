<?php
namespace App\Model\Table;

use App\Model\Entity\Kontent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kontent Model
 *
 */
class KontentTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('kontent');
        $this->displayField('id_kontent');
        $this->primaryKey('id_kontent');
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
            ->add('id_kontent', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_kontent', 'create');
            
        $validator
            ->requirePresence('nm_pengurus', 'create')
            ->notEmpty('nm_pengurus');
            
        $validator
            ->requirePresence('dana_bentuk', 'create')
            ->notEmpty('dana_bentuk');
            
        $validator
            ->requirePresence('dana_prosedur', 'create')
            ->notEmpty('dana_prosedur');
            
        $validator
            ->requirePresence('dana_manfaat', 'create')
            ->notEmpty('dana_manfaat');
            
        $validator
            ->requirePresence('faq', 'create')
            ->notEmpty('faq');

        return $validator;
    }
}
