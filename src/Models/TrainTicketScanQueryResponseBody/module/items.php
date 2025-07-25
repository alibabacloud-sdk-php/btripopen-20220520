<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $arrStation;

    /**
     * @var string
     */
    public $billDate;

    /**
     * @var string
     */
    public $coachName;

    /**
     * @var string
     */
    public $costCenter;

    /**
     * @var string
     */
    public $depStation;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $department;

    /**
     * @var int
     */
    public $feeTypeShowCode;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $invoiceDate;

    /**
     * @var int
     */
    public $invoiceMaterial;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $ofdUrl;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $passenger;

    /**
     * @var string
     */
    public $pdfUrl;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $purchaserName;

    /**
     * @var string
     */
    public $purchaserTaxNo;

    /**
     * @var string
     */
    public $seat;

    /**
     * @var string
     */
    public $seatNo;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $taxRate;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'applyId' => 'apply_id',
        'arrStation' => 'arr_station',
        'billDate' => 'bill_date',
        'coachName' => 'coach_name',
        'costCenter' => 'cost_center',
        'depStation' => 'dep_station',
        'depTime' => 'dep_time',
        'department' => 'department',
        'feeTypeShowCode' => 'fee_type_show_code',
        'id' => 'id',
        'invoiceDate' => 'invoice_date',
        'invoiceMaterial' => 'invoice_material',
        'invoiceTitle' => 'invoice_title',
        'ofdUrl' => 'ofd_url',
        'orderId' => 'order_id',
        'ossUrl' => 'oss_url',
        'passenger' => 'passenger',
        'pdfUrl' => 'pdf_url',
        'price' => 'price',
        'project' => 'project',
        'purchaserName' => 'purchaser_name',
        'purchaserTaxNo' => 'purchaser_tax_no',
        'seat' => 'seat',
        'seatNo' => 'seat_no',
        'serialNumber' => 'serial_number',
        'taxAmount' => 'tax_amount',
        'taxRate' => 'tax_rate',
        'ticketNo' => 'ticket_no',
        'trainNo' => 'train_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }

        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }

        if (null !== $this->coachName) {
            $res['coach_name'] = $this->coachName;
        }

        if (null !== $this->costCenter) {
            $res['cost_center'] = $this->costCenter;
        }

        if (null !== $this->depStation) {
            $res['dep_station'] = $this->depStation;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->department) {
            $res['department'] = $this->department;
        }

        if (null !== $this->feeTypeShowCode) {
            $res['fee_type_show_code'] = $this->feeTypeShowCode;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->invoiceDate) {
            $res['invoice_date'] = $this->invoiceDate;
        }

        if (null !== $this->invoiceMaterial) {
            $res['invoice_material'] = $this->invoiceMaterial;
        }

        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }

        if (null !== $this->ofdUrl) {
            $res['ofd_url'] = $this->ofdUrl;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->ossUrl) {
            $res['oss_url'] = $this->ossUrl;
        }

        if (null !== $this->passenger) {
            $res['passenger'] = $this->passenger;
        }

        if (null !== $this->pdfUrl) {
            $res['pdf_url'] = $this->pdfUrl;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->purchaserName) {
            $res['purchaser_name'] = $this->purchaserName;
        }

        if (null !== $this->purchaserTaxNo) {
            $res['purchaser_tax_no'] = $this->purchaserTaxNo;
        }

        if (null !== $this->seat) {
            $res['seat'] = $this->seat;
        }

        if (null !== $this->seatNo) {
            $res['seat_no'] = $this->seatNo;
        }

        if (null !== $this->serialNumber) {
            $res['serial_number'] = $this->serialNumber;
        }

        if (null !== $this->taxAmount) {
            $res['tax_amount'] = $this->taxAmount;
        }

        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['arr_station'])) {
            $model->arrStation = $map['arr_station'];
        }

        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }

        if (isset($map['coach_name'])) {
            $model->coachName = $map['coach_name'];
        }

        if (isset($map['cost_center'])) {
            $model->costCenter = $map['cost_center'];
        }

        if (isset($map['dep_station'])) {
            $model->depStation = $map['dep_station'];
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['department'])) {
            $model->department = $map['department'];
        }

        if (isset($map['fee_type_show_code'])) {
            $model->feeTypeShowCode = $map['fee_type_show_code'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['invoice_date'])) {
            $model->invoiceDate = $map['invoice_date'];
        }

        if (isset($map['invoice_material'])) {
            $model->invoiceMaterial = $map['invoice_material'];
        }

        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }

        if (isset($map['ofd_url'])) {
            $model->ofdUrl = $map['ofd_url'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['oss_url'])) {
            $model->ossUrl = $map['oss_url'];
        }

        if (isset($map['passenger'])) {
            $model->passenger = $map['passenger'];
        }

        if (isset($map['pdf_url'])) {
            $model->pdfUrl = $map['pdf_url'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['purchaser_name'])) {
            $model->purchaserName = $map['purchaser_name'];
        }

        if (isset($map['purchaser_tax_no'])) {
            $model->purchaserTaxNo = $map['purchaser_tax_no'];
        }

        if (isset($map['seat'])) {
            $model->seat = $map['seat'];
        }

        if (isset($map['seat_no'])) {
            $model->seatNo = $map['seat_no'];
        }

        if (isset($map['serial_number'])) {
            $model->serialNumber = $map['serial_number'];
        }

        if (isset($map['tax_amount'])) {
            $model->taxAmount = $map['tax_amount'];
        }

        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
