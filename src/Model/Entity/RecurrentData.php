<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RecurrentData Entity
 *
 * @property int $id
 * @property int $dataset_id
 * @property \Cake\I18n\Time $sample_date
 * @property int $pressure_scale
 * @property int $anxiety
 * @property int $food_insecurity
 *
 * @property \App\Model\Entity\Dataset $dataset
 */
class RecurrentData extends Entity
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
