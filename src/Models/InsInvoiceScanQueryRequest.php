<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class InsInvoiceScanQueryRequest extends Model
{
    /**
     * @example 2022-12-01
     *
     * @var string
     */
    public $billDate;

    /**
     * @example 123
     *
     * @var int
     */
    public $billId;

    /**
     * @example 456
     *
     * @var int
     */
    public $invoiceSubTaskId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'billDate'         => 'bill_date',
        'billId'           => 'bill_id',
        'invoiceSubTaskId' => 'invoice_sub_task_id',
        'pageNo'           => 'page_no',
        'pageSize'         => 'page_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }
        if (null !== $this->billId) {
            $res['bill_id'] = $this->billId;
        }
        if (null !== $this->invoiceSubTaskId) {
            $res['invoice_sub_task_id'] = $this->invoiceSubTaskId;
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsInvoiceScanQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }
        if (isset($map['bill_id'])) {
            $model->billId = $map['bill_id'];
        }
        if (isset($map['invoice_sub_task_id'])) {
            $model->invoiceSubTaskId = $map['invoice_sub_task_id'];
        }
        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        return $model;
    }
}
