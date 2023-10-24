<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class InsureOrderRefundRequest extends Model
{
    /**
     * @example 1000001
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @example PostalSavingsBank
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 1021000196440356908
     *
     * @var string
     */
    public $outApplyId;

    /**
     * @var string[]
     */
    public $policyNoList;

    /**
     * @var string[]
     */
    public $subInsOrderIds;

    /**
     * @example fliggy
     *
     * @var string
     */
    public $supplierCode;
    protected $_name = [
        'btripUserId'    => 'btrip_user_id',
        'buyerName'      => 'buyer_name',
        'isvName'        => 'isv_name',
        'outApplyId'     => 'out_apply_id',
        'policyNoList'   => 'policy_no_list',
        'subInsOrderIds' => 'sub_ins_order_ids',
        'supplierCode'   => 'supplier_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }
        if (null !== $this->policyNoList) {
            $res['policy_no_list'] = $this->policyNoList;
        }
        if (null !== $this->subInsOrderIds) {
            $res['sub_ins_order_ids'] = $this->subInsOrderIds;
        }
        if (null !== $this->supplierCode) {
            $res['supplier_code'] = $this->supplierCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsureOrderRefundRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }
        if (isset($map['policy_no_list'])) {
            if (!empty($map['policy_no_list'])) {
                $model->policyNoList = $map['policy_no_list'];
            }
        }
        if (isset($map['sub_ins_order_ids'])) {
            if (!empty($map['sub_ins_order_ids'])) {
                $model->subInsOrderIds = $map['sub_ins_order_ids'];
            }
        }
        if (isset($map['supplier_code'])) {
            $model->supplierCode = $map['supplier_code'];
        }

        return $model;
    }
}
