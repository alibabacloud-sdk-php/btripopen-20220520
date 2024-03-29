<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class changeTicketInfoList extends Model
{
    /**
     * @example 03
     *
     * @var string
     */
    public $changeCoachNo;

    /**
     * @example 100
     *
     * @var float
     */
    public $changeGapFee;

    /**
     * @example 100
     *
     * @var float
     */
    public $changeHandlingFee;

    /**
     * @example 004C
     *
     * @var string
     */
    public $changeSeatNo;

    /**
     * @var string
     */
    public $changeSeatTypeName;

    /**
     * @example 100
     *
     * @var float
     */
    public $changeServiceFee;

    /**
     * @example D103
     *
     * @var string
     */
    public $changeTrainNo;

    /**
     * @var string
     */
    public $changeTrainTypeName;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $checkInTime;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $checkOutTime;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $fromStationName;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @example CS987JKDF
     *
     * @var string
     */
    public $originTicketNo;

    /**
     * @example m
     *
     * @var string
     */
    public $outTicketStatus;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example CS987JKDF
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @var string
     */
    public $toStationName;
    protected $_name = [
        'changeCoachNo'       => 'change_coach_no',
        'changeGapFee'        => 'change_gap_fee',
        'changeHandlingFee'   => 'change_handling_fee',
        'changeSeatNo'        => 'change_seat_no',
        'changeSeatTypeName'  => 'change_seat_type_name',
        'changeServiceFee'    => 'change_service_fee',
        'changeTrainNo'       => 'change_train_no',
        'changeTrainTypeName' => 'change_train_type_name',
        'checkInTime'         => 'check_in_time',
        'checkOutTime'        => 'check_out_time',
        'endTime'             => 'end_time',
        'fromStationName'     => 'from_station_name',
        'gmtCreate'           => 'gmt_create',
        'gmtModify'           => 'gmt_modify',
        'originTicketNo'      => 'origin_ticket_no',
        'outTicketStatus'     => 'out_ticket_status',
        'startTime'           => 'start_time',
        'ticketNo'            => 'ticket_no',
        'toStationName'       => 'to_station_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeCoachNo) {
            $res['change_coach_no'] = $this->changeCoachNo;
        }
        if (null !== $this->changeGapFee) {
            $res['change_gap_fee'] = $this->changeGapFee;
        }
        if (null !== $this->changeHandlingFee) {
            $res['change_handling_fee'] = $this->changeHandlingFee;
        }
        if (null !== $this->changeSeatNo) {
            $res['change_seat_no'] = $this->changeSeatNo;
        }
        if (null !== $this->changeSeatTypeName) {
            $res['change_seat_type_name'] = $this->changeSeatTypeName;
        }
        if (null !== $this->changeServiceFee) {
            $res['change_service_fee'] = $this->changeServiceFee;
        }
        if (null !== $this->changeTrainNo) {
            $res['change_train_no'] = $this->changeTrainNo;
        }
        if (null !== $this->changeTrainTypeName) {
            $res['change_train_type_name'] = $this->changeTrainTypeName;
        }
        if (null !== $this->checkInTime) {
            $res['check_in_time'] = $this->checkInTime;
        }
        if (null !== $this->checkOutTime) {
            $res['check_out_time'] = $this->checkOutTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->fromStationName) {
            $res['from_station_name'] = $this->fromStationName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }
        if (null !== $this->originTicketNo) {
            $res['origin_ticket_no'] = $this->originTicketNo;
        }
        if (null !== $this->outTicketStatus) {
            $res['out_ticket_status'] = $this->outTicketStatus;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->toStationName) {
            $res['to_station_name'] = $this->toStationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeTicketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_coach_no'])) {
            $model->changeCoachNo = $map['change_coach_no'];
        }
        if (isset($map['change_gap_fee'])) {
            $model->changeGapFee = $map['change_gap_fee'];
        }
        if (isset($map['change_handling_fee'])) {
            $model->changeHandlingFee = $map['change_handling_fee'];
        }
        if (isset($map['change_seat_no'])) {
            $model->changeSeatNo = $map['change_seat_no'];
        }
        if (isset($map['change_seat_type_name'])) {
            $model->changeSeatTypeName = $map['change_seat_type_name'];
        }
        if (isset($map['change_service_fee'])) {
            $model->changeServiceFee = $map['change_service_fee'];
        }
        if (isset($map['change_train_no'])) {
            $model->changeTrainNo = $map['change_train_no'];
        }
        if (isset($map['change_train_type_name'])) {
            $model->changeTrainTypeName = $map['change_train_type_name'];
        }
        if (isset($map['check_in_time'])) {
            $model->checkInTime = $map['check_in_time'];
        }
        if (isset($map['check_out_time'])) {
            $model->checkOutTime = $map['check_out_time'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['from_station_name'])) {
            $model->fromStationName = $map['from_station_name'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }
        if (isset($map['origin_ticket_no'])) {
            $model->originTicketNo = $map['origin_ticket_no'];
        }
        if (isset($map['out_ticket_status'])) {
            $model->outTicketStatus = $map['out_ticket_status'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['to_station_name'])) {
            $model->toStationName = $map['to_station_name'];
        }

        return $model;
    }
}
