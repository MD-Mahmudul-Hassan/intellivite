<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supplement Entity
 *
 * @property int $id
 * @property int $supplement_type_id
 * @property string $name
 * @property string $summary
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\SupplementReport[] $supplement_reports
 */
class Supplement extends Entity
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
        'supplement_type_id' => true,
        'name' => true,
        'summary' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'supplement_reports' => true
    ];
}
