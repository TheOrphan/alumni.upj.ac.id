<?php
namespace App\Model\Table;

use App\Model\Entity\Mahasiswa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mahasiswa Model
 *
 */
class MahasiswaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('mahasiswa');
        $this->displayField('id_mhs');
        $this->primaryKey('id_mhs');
        $this->addBehavior('Timestamp');
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
            ->add('id_mhs', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_mhs', 'create');
            
        $validator
            ->add('no_induk', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_induk', 'create')
            ->notEmpty('no_induk');
            
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');
            
        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role');
            
        $validator
            ->requirePresence('nama', 'create')
            ->notEmpty('nama');
            
        $validator
            ->requirePresence('alamat', 'create')
            ->notEmpty('alamat');
            
        $validator
            ->add('tlpn', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tlpn', 'create')
            ->notEmpty('tlpn');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');
            
        $validator
            ->requirePresence('prodi', 'create')
            ->notEmpty('prodi');
            
        $validator
            ->requirePresence('thn_masuk', 'create')
            ->notEmpty('thn_masuk');
            
        $validator
            ->requirePresence('foto', 'create')
            ->notEmpty('foto');
            
        $validator
            ->add('date_create', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_create', 'create')
            ->notEmpty('date_create');

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
