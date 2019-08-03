<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property int $gender
 * @property int $role
 * @property string $password
 * @property string $reset_password_token
 * @property string $dob
 * @property string $shipping_street_address
 * @property string $shipping_city
 * @property string $shipping_state
 * @property string $shipping_zip
 * @property string $billing_street_address
 * @property string $billiig_city
 * @property string $billing_state
 * @property string $billing_zip
 * @property int $terms_and_conditions_check
 *
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Questionaire[] $questionaires
 * @property \App\Model\Entity\ReportStatus[] $report_status
 * @property \App\Model\Entity\SupplementReport[] $supplement_reports
 */
class User extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone_number' => true,
        'gender' => true,
        'role' => true,
        'password' => true,
        'reset_password_token' => true,
        'dob' => true,
        'shipping_street_address' => true,
        'shipping_city' => true,
        'shipping_state' => true,
        'shipping_zip' => true,
        'billing_street_address' => true,
        'billing_city' => true,
        'billing_state' => true,
        'billing_zip' => true,
        'terms_and_conditions_check' => true,
        'orders' => true,
        'questionaires' => true,
        'report_status' => true,
        'supplement_reports' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    /**
     * Convert the password into hash
     */
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
