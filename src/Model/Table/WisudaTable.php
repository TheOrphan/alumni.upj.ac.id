<?php
namespace App\Model\Table;

use App\Model\Entity\Wisuda;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wisuda Model
 *
 */
class WisudaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wisuda');
        $this->displayField('id_wisuda');
        $this->primaryKey('id_wisuda');
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
            ->add('id_wisuda', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_wisuda', 'create');
            
        $validator
            ->add('no_induk', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_induk', 'create')
            ->notEmpty('no_induk');
            
        $validator
            ->add('no_reg', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_reg', 'create')
            ->notEmpty('no_reg');
            
        $validator
            ->add('biaya', 'valid', ['rule' => 'numeric'])
            ->requirePresence('biaya', 'create')
            ->notEmpty('biaya');
            
        $validator
            ->add('tagihan', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tagihan', 'create')
            ->notEmpty('tagihan');
            
        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');
            
        $validator
            ->add('date_create', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_create', 'create')
            ->notEmpty('date_create');

        return $validator;
    }
}
