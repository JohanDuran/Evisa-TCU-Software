<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * People Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Locations
 * @property \Cake\ORM\Association\HasMany $Datasets
 * @property \Cake\ORM\Association\BelongsToMany $Groups
 * @property \Cake\ORM\Association\BelongsToMany $Sessions
 *
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleTable extends Table
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

        $this->table('people');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Datasets', [
            'foreignKey' => 'person_id'
        ]);
        $this->belongsToMany('Groups', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'group_id',
            'joinTable' => 'people_groups'
        ]);
        $this->belongsToMany('Sessions', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'session_id',
            'joinTable' => 'people_sessions'
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
            ->requirePresence('identification', 'create')
            ->notEmpty('identification')
            ->add('identification', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->allowEmpty('second_last_name');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('birth')
            ->requirePresence('birth', 'create')
            ->notEmpty('birth');

        $validator
            ->allowEmpty('cellphone');

        $validator
            ->allowEmpty('phone');

        $validator
            ->boolean('whatsapp')
            ->allowEmpty('whatsapp');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('facebook');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('medical_center');

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
        $rules->add($rules->isUnique(['identification']));
        $rules->add($rules->existsIn(['location_id'], 'Locations'));

        return $rules;
    }
}
