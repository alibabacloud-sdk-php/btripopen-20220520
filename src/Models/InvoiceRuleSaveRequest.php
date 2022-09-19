<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveRequest\entities;
use AlibabaCloud\Tea\Model;

class InvoiceRuleSaveRequest extends Model
{
    /**
     * @var bool
     */
    public $allEmploye;

    /**
     * @var entities[]
     */
    public $entities;

    /**
     * @var string
     */
    public $thirdPartId;
    protected $_name = [
        'allEmploye'  => 'all_employe',
        'entities'    => 'entities',
        'thirdPartId' => 'third_part_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allEmploye) {
            $res['all_employe'] = $this->allEmploye;
        }
        if (null !== $this->entities) {
            $res['entities'] = [];
            if (null !== $this->entities && \is_array($this->entities)) {
                $n = 0;
                foreach ($this->entities as $item) {
                    $res['entities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvoiceRuleSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all_employe'])) {
            $model->allEmploye = $map['all_employe'];
        }
        if (isset($map['entities'])) {
            if (!empty($map['entities'])) {
                $model->entities = [];
                $n               = 0;
                foreach ($map['entities'] as $item) {
                    $model->entities[$n++] = null !== $item ? entities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }

        return $model;
    }
}