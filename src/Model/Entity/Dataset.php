<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dataset Entity
 *
 * @property int $id
 * @property int $person_id
 * @property string $year
 * @property int $start_medium_end
 * @property bool $access
 * @property string $constancy
 * @property bool $excercise
 * @property bool $medicine
 * @property float $size
 * @property float $weight
 * @property float $bmi
 * @property string $clasification
 * @property float $cc
 * @property float $water
 * @property float $muscle_mass
 * @property float $bone_mass
 * @property int $visceral_fat
 * @property float $fat_mass
 * @property int $metabolic_age
 * @property string $frequency_cake
 * @property string $frequency_soda
 * @property string $frequency_salad
 * @property string $frequency_fruit
 * @property string $frequency_sausage
 * @property string $frequency_egg
 * @property string $frequency_vegetable
 * @property string $frequency_fast_food
 * @property string $appetite
 * @property bool $breakfast
 * @property bool $morning_break
 * @property bool $lunch
 * @property bool $afternon_break
 * @property bool $dinner
 * @property bool $night_break
 * @property bool $smoke
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\RecurrentData[] $recurrent_data
 */
class Dataset extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
