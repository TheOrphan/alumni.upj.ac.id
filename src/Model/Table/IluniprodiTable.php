<?php
namespace App\Model\Table;

use App\Model\Entity\Iluniprodi;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Iluniprodi Model
 *
 */
class IluniprodiTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('iluniprodi');
        $this->displayField('id_prodi');
        $this->primaryKey('id_prodi');
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
            ->add('id_prodi', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_prodi', 'create');
            
        $validator
            ->requirePresence('nm_prodi', 'create')
            ->notEmpty('nm_prodi');
            
        $validator
            ->requirePresence('nm_ketua', 'create')
            ->notEmpty('nm_ketua');
            
        $validator
            ->add('tlpn', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tlpn', 'create')
            ->notEmpty('tlpn');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
