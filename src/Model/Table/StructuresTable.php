<?php
namespace App\Model\Table;

use App\Model\Entity\Structure;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Structures Model
 *
 * @property \Cake\ORM\Association\HasMany $Managements
 */
class StructuresTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('structures');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Managements', [
            'foreignKey' => 'structure_id'
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
            ->allowEmpty('name');

        $validator
            ->requirePresence('label', 'create')
            ->notEmpty('label');

        $validator
            ->allowEmpty('icon');

        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->requirePresence('target', 'create')
            ->notEmpty('target');

        $validator
            ->integer('weight')
            ->allowEmpty('weight');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }

    //获取全部数据
    public function all() {
        return $this->find('all')
            ->where(['status' => 1])
            ->order(['weight' => 'ASC'])
            ->toArray();
    }
}
