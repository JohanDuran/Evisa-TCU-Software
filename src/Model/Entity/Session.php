<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Session Entity
 *
 * @property int $id
 * @property int $group_id
 * @property string $goals
 * @property string $opening
 * @property string $feedback
 * @property string $development
 * @property string $check_experience
 * @property string $address
 * @property int $duration
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Person[] $people
 */
class Session extends Entity
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
