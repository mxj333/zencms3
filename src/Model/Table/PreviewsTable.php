<?php
namespace App\Model\Table;

use App\Model\Entity\Preview;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Previews Model
 *
 * @property \Cake\ORM\Association\HasMany $PreviewDetails
 */
class PreviewsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('previews');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('PreviewDetails', [
            'foreignKey' => 'preview_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('p_name');

        $validator
            ->allowEmpty('p_rate');

        $validator
            ->allowEmpty('p_body');

        $validator
            ->integer('p_date')
            ->allowEmpty('p_date');

        $validator
            ->integer('p_status')
            ->allowEmpty('p_status');

        return $validator;
    }
}
