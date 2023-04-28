<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryResponseBody\module\items;

use AlibabaCloud\Tea\Model;

class invoiceDetails extends Model
{
    /**
     * @description 金额
     *
     * @example 75.21
     *
     * @var string
     */
    public $amount;

    /**
     * @description 行号
     *
     * @example 0
     *
     * @var string
     */
    public $index;

    /**
     * @description 货物或应税劳务、服务名称
     *
     * @var string
     */
    public $itemName;

    /**
     * @description 数量
     *
     * @example 1
     *
     * @var string
     */
    public $quantity;

    /**
     * @description 规格型号
     *
     * @example 66PT11230069
     *
     * @var string
     */
    public $specification;

    /**
     * @description 税额
     *
     * @example 12.79
     *
     * @var string
     */
    public $tax;

    /**
     * @description 税率
     *
     * @example 17%
     *
     * @var string
     */
    public $taxRate;

    /**
     * @description 单位
     *
     * @var string
     */
    public $unit;

    /**
     * @description 单价
     *
     * @example 75.21
     *
     * @var string
     */
    public $unitPrice;
    protected $_name = [
        'amount'        => 'amount',
        'index'         => 'index',
        'itemName'      => 'item_name',
        'quantity'      => 'quantity',
        'specification' => 'specification',
        'tax'           => 'tax',
        'taxRate'       => 'tax_rate',
        'unit'          => 'unit',
        'unitPrice'     => 'unit_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->itemName) {
            $res['item_name'] = $this->itemName;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->specification) {
            $res['specification'] = $this->specification;
        }
        if (null !== $this->tax) {
            $res['tax'] = $this->tax;
        }
        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->unitPrice) {
            $res['unit_price'] = $this->unitPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invoiceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['item_name'])) {
            $model->itemName = $map['item_name'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['specification'])) {
            $model->specification = $map['specification'];
        }
        if (isset($map['tax'])) {
            $model->tax = $map['tax'];
        }
        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['unit_price'])) {
            $model->unitPrice = $map['unit_price'];
        }

        return $model;
    }
}
