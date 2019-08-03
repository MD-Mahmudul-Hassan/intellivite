<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SupplementReport Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $supplement_id
 * @property string $your_lifestyle
 * @property string $your_goals
 * @property string $your_genetics
 * @property int $activation_status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Supplement $supplement
 */
class SupplementReport extends Entity
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
        'user_id' => true,
        'supplement_id' => true,
        'your_lifestyle' => true,
        'your_goals' => true,
        'your_genetics' => true,
        'activation_status' => true,
        'user' => true,
        'supplement' => true
    ];
}
