<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Datasets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\HasMany $RecurrentData
 *
 * @method \App\Model\Entity\Dataset get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dataset newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dataset[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dataset|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dataset patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dataset[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dataset findOrCreate($search, callable $callback = null, $options = [])
 */
class DatasetsTable extends Table
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

        $this->table('datasets');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('RecurrentData', [
            'foreignKey' => 'dataset_id'
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
            ->allowEmpty('year');

        $validator
            ->integer('start_medium_end')
            ->allowEmpty('start_medium_end');

        $validator
            ->boolean('access')
            ->allowEmpty('access');

        $validator
            ->allowEmpty('constancy');

        $validator
            ->boolean('excercise')
            ->allowEmpty('excercise');

        $validator
            ->boolean('medicine')
            ->allowEmpty('medicine');

        $validator
            ->numeric('size')
            ->allowEmpty('size');

        $validator
            ->numeric('weight')
            ->allowEmpty('weight');

        $validator
            ->numeric('bmi')
            ->allowEmpty('bmi');

        $validator
            ->allowEmpty('clasification');

        $validator
            ->numeric('cc')
            ->allowEmpty('cc');

        $validator
            ->numeric('water')
            ->allowEmpty('water');

        $validator
            ->numeric('muscle_mass')
            ->allowEmpty('muscle_mass');

        $validator
            ->numeric('bone_mass')
            ->allowEmpty('bone_mass');

        $validator
            ->integer('visceral_fat')
            ->allowEmpty('visceral_fat');

        $validator
            ->numeric('fat_mass')
            ->allowEmpty('fat_mass');

        $validator
            ->integer('metabolic_age')
            ->allowEmpty('metabolic_age');

        $validator
            ->allowEmpty('frequency_cake');

        $validator
            ->allowEmpty('frequency_soda');

        $validator
            ->allowEmpty('frequency_salad');

        $validator
            ->allowEmpty('frequency_fruit');

        $validator
            ->allowEmpty('frequency_sausage');

        $validator
            ->allowEmpty('frequency_egg');

        $validator
            ->allowEmpty('frequency_vegetable');

        $validator
            ->allowEmpty('frequency_fast_food');

        $validator
            ->allowEmpty('appetite');

        $validator
            ->boolean('breakfast')
            ->allowEmpty('breakfast');

        $validator
            ->boolean('morning_break')
            ->allowEmpty('morning_break');

        $validator
            ->boolean('lunch')
            ->allowEmpty('lunch');

        $validator
            ->boolean('afternon_break')
            ->allowEmpty('afternon_break');

        $validator
            ->boolean('dinner')
            ->allowEmpty('dinner');

        $validator
            ->boolean('night_break')
            ->allowEmpty('night_break');

        $validator
            ->boolean('smoke')
            ->allowEmpty('smoke');

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
        $rules->add($rules->existsIn(['person_id'], 'People'));

        return $rules;
    }
}
