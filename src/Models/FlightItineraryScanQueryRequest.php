<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightItineraryScanQueryRequest extends Model
{
    /**
     * @var string
     */
    public $billDate;

    /**
     * @var int
     */
    public $billId;

    /**
     * @var int
     */
    public $invoiceSubTaskId;

    /**
     * @var string
     */
    public $itineraryNum;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'billDate' => 'bill_date',
        'billId' => 'bill_id',
        'invoiceSubTaskId' => 'invoice_sub_task_id',
        'itineraryNum' => 'itinerary_num',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->itineraryNum) {
            $res['itinerary_num'] = $this->itineraryNum;
        }

        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['itinerary_num'])) {
            $model->itineraryNum = $map['itinerary_num'];
        }

        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
