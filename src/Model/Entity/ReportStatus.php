<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReportStatus Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $current_status
 * @property string $date_of_change
 *
 * @property \App\Model\Entity\User $user
 */
class ReportStatus extends Entity
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
        'current_status' => true,
        'date_of_change' => true,
        'user' => true
    ];
}
