<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Questionaire Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $health_goals
 * @property string $about_you
 * @property string $your_nutrition
 * @property string $your_lifestyle
 * @property string $medical_history
 * @property string $form_completion
 * @property string $date_of_update
 * @property int $sent_notification
 *
 * @property \App\Model\Entity\User $user
 */
class Questionaire extends Entity
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
        'health_goals' => true,
        'about_you' => true,
        'your_nutrition' => true,
        'your_lifestyle' => true,
        'medical_history' => true,
        'form_completion' => true,
        'date_of_update' => true,
        'sent_notification' => true,
        'user' => true
    ];
}
