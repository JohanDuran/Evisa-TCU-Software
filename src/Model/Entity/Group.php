<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Group Entity
 *
 * @property int $id
 * @property int $location_id
 * @property string $name
 * @property int $year
 * @property string $schedule
 * @property int $space
 *
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\Session[] $sessions
 * @property \App\Model\Entity\Person[] $people
 */
class Group extends Entity
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
