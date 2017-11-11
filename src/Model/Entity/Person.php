<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property int $location_id
 * @property string $identification
 * @property string $last_name
 * @property string $second_last_name
 * @property string $name
 * @property \Cake\I18n\Time $birth
 * @property string $cellphone
 * @property string $phone
 * @property bool $whatsapp
 * @property string $email
 * @property string $facebook
 * @property string $address
 * @property string $medical_center
 *
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\Dataset[] $datasets
 * @property \App\Model\Entity\Group[] $groups
 * @property \App\Model\Entity\Session[] $sessions
 */
class Person extends Entity
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
