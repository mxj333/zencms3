<?php
namespace App\Model\Table;

use App\Model\Entity\Management;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Managements Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Structures
 */
class ManagementsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('managements');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Structures', [
            'foreignKey' => 'structure_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('label', 'create')
            ->notEmpty('label');

        $validator
            ->allowEmpty('icon');

        $validator
            ->requirePresence('url', 'create')
            ->allowEmpty('url');

        $validator
            ->requirePresence('target', 'create')
            ->allowEmpty('target');

        $validator
            ->integer('weight')
            ->allowEmpty('weight');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['structure_id'], 'Structures'));
        return $rules;
    }

    //获取全部数据
    public function all() {
        return $this->find('all')
                ->where(['status' => 1])
                ->order(['weight' => 'ASC'])
                ->toArray();
    }
}
