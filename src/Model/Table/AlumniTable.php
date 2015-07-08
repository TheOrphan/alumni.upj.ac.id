<?php
namespace App\Model\Table;

use App\Model\Entity\Alumnus;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumni Model
 *
 */
class AlumniTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('alumni');
        $this->displayField('id_alumni');
        $this->primaryKey('id_alumni');
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
            ->add('id_alumni', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_alumni', 'create');
            
        $validator
            ->add('id_mhs', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_mhs', 'create')
            ->notEmpty('id_mhs');
            
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');
            
        $validator
            ->add('no_induk', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_induk', 'create')
            ->notEmpty('no_induk');
            
        $validator
            ->add('thn_lulus', 'valid', ['rule' => 'datetime'])
            ->requirePresence('thn_lulus', 'create')
            ->notEmpty('thn_lulus');
            
        $validator
            ->requirePresence('nm_tmp_kerja', 'create')
            ->notEmpty('nm_tmp_kerja');
            
        $validator
            ->requirePresence('alamat_kerja', 'create')
            ->notEmpty('alamat_kerja');
            
        $validator
            ->add('date_create', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_create', 'create')
            ->notEmpty('date_create');
            
        $validator
            ->allowEmpty('role');

        return $validator;
    }
}
