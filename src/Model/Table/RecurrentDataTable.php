<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecurrentData Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Datasets
 *
 * @method \App\Model\Entity\RecurrentData get($primaryKey, $options = [])
 * @method \App\Model\Entity\RecurrentData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RecurrentData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecurrentData|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RecurrentData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RecurrentData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecurrentData findOrCreate($search, callable $callback = null, $options = [])
 */
class RecurrentDataTable extends Table
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

        $this->table('recurrent_data');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Datasets', [
            'foreignKey' => 'dataset_id',
            'joinType' => 'INNER'
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
            ->date('sample_date')
            ->requirePresence('sample_date', 'create')
            ->notEmpty('sample_date');

        $validator
            ->integer('pressure_scale')
            ->allowEmpty('pressure_scale');

        $validator
            ->integer('anxiety')
            ->allowEmpty('anxiety');

        $validator
            ->integer('food_insecurity')
            ->allowEmpty('food_insecurity');

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
        $rules->add($rules->existsIn(['dataset_id'], 'Datasets'));

        return $rules;
    }
}
