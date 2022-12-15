<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList;
use AlibabaCloud\Tea\Model;

class CarApplyQueryResponseBody extends Model
{
    /**
     * @var applyList[]
     */
    public $applyList;

    /**
     * @example 0
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 407543AF-2BD9-5890-BD92-9D1AB7218B27
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example 6
     *
     * @var int
     */
    public $total;

    /**
     * @example 210bcc3a16583004579056128d33d7
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'applyList' => 'apply_list',
        'code'      => 'code',
        'message'   => 'message',
        'requestId' => 'requestId',
        'success'   => 'success',
        'total'     => 'total',
        'traceId'   => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyList) {
            $res['apply_list'] = [];
            if (null !== $this->applyList && \is_array($this->applyList)) {
                $n = 0;
                foreach ($this->applyList as $item) {
                    $res['apply_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CarApplyQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_list'])) {
            if (!empty($map['apply_list'])) {
                $model->applyList = [];
                $n                = 0;
                foreach ($map['apply_list'] as $item) {
                    $model->applyList[$n++] = null !== $item ? applyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
