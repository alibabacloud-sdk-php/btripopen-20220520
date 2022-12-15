<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightExceedApplyQueryRequest extends Model
{
    /**
     * @example 175634
     *
     * @var int
     */
    public $applyId;
    protected $_name = [
        'applyId' => 'apply_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightExceedApplyQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        return $model;
    }
}
