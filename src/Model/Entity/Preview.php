<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Preview Entity.
 *
 * @property int $id
 * @property string $p_name
 * @property string $p_rate
 * @property string $p_body
 * @property int $p_date
 * @property int $p_status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\PreviewDetail[] $preview_details
 */
class Preview extends Entity
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
        'id' => false,
    ];
}
