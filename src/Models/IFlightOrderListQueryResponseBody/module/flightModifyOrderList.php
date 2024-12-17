<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList\flightModifySegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList\flightOrderModifyTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList\passengerFee;
use AlibabaCloud\Tea\Model;

class flightModifyOrderList extends Model
{
    /**
     * @var int
     */
    public $corpPayPrice;

    /**
     * @var flightModifySegmentList[]
     */
    public $flightModifySegmentList;

    /**
     * @var flightOrderModifyTicketList[]
     */
    public $flightOrderModifyTicketList;

    /**
     * @example 1005200138736000
     *
     * @var int
     */
    public $modifyApplyId;

    /**
     * @var passengerFee[]
     */
    public $passengerFee;

    /**
     * @var string[]
     */
    public $passengerList;

    /**
     * @var int
     */
    public $personPayPrice;

    /**
     * @example 1005200138736028
     *
     * @var int
     */
    public $relateModifyApplyId;

    /**
     * @var int
     */
    public $serviceFee;

    /**
     * @var int
     */
    public $totalFee;
    protected $_name = [
        'corpPayPrice'                => 'corp_pay_price',
        'flightModifySegmentList'     => 'flight_modify_segment_list',
        'flightOrderModifyTicketList' => 'flight_order_modify_ticket_list',
        'modifyApplyId'               => 'modify_apply_id',
        'passengerFee'                => 'passenger_fee',
        'passengerList'               => 'passenger_list',
        'personPayPrice'              => 'person_pay_price',
        'relateModifyApplyId'         => 'relate_modify_apply_id',
        'serviceFee'                  => 'service_fee',
        'totalFee'                    => 'total_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpPayPrice) {
            $res['corp_pay_price'] = $this->corpPayPrice;
        }
        if (null !== $this->flightModifySegmentList) {
            $res['flight_modify_segment_list'] = [];
            if (null !== $this->flightModifySegmentList && \is_array($this->flightModifySegmentList)) {
                $n = 0;
                foreach ($this->flightModifySegmentList as $item) {
                    $res['flight_modify_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightOrderModifyTicketList) {
            $res['flight_order_modify_ticket_list'] = [];
            if (null !== $this->flightOrderModifyTicketList && \is_array($this->flightOrderModifyTicketList)) {
                $n = 0;
                foreach ($this->flightOrderModifyTicketList as $item) {
                    $res['flight_order_modify_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyApplyId) {
            $res['modify_apply_id'] = $this->modifyApplyId;
        }
        if (null !== $this->passengerFee) {
            $res['passenger_fee'] = [];
            if (null !== $this->passengerFee && \is_array($this->passengerFee)) {
                $n = 0;
                foreach ($this->passengerFee as $item) {
                    $res['passenger_fee'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passengerList) {
            $res['passenger_list'] = $this->passengerList;
        }
        if (null !== $this->personPayPrice) {
            $res['person_pay_price'] = $this->personPayPrice;
        }
        if (null !== $this->relateModifyApplyId) {
            $res['relate_modify_apply_id'] = $this->relateModifyApplyId;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->totalFee) {
            $res['total_fee'] = $this->totalFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightModifyOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corp_pay_price'])) {
            $model->corpPayPrice = $map['corp_pay_price'];
        }
        if (isset($map['flight_modify_segment_list'])) {
            if (!empty($map['flight_modify_segment_list'])) {
                $model->flightModifySegmentList = [];
                $n                              = 0;
                foreach ($map['flight_modify_segment_list'] as $item) {
                    $model->flightModifySegmentList[$n++] = null !== $item ? flightModifySegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_order_modify_ticket_list'])) {
            if (!empty($map['flight_order_modify_ticket_list'])) {
                $model->flightOrderModifyTicketList = [];
                $n                                  = 0;
                foreach ($map['flight_order_modify_ticket_list'] as $item) {
                    $model->flightOrderModifyTicketList[$n++] = null !== $item ? flightOrderModifyTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modify_apply_id'])) {
            $model->modifyApplyId = $map['modify_apply_id'];
        }
        if (isset($map['passenger_fee'])) {
            if (!empty($map['passenger_fee'])) {
                $model->passengerFee = [];
                $n                   = 0;
                foreach ($map['passenger_fee'] as $item) {
                    $model->passengerFee[$n++] = null !== $item ? passengerFee::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = $map['passenger_list'];
            }
        }
        if (isset($map['person_pay_price'])) {
            $model->personPayPrice = $map['person_pay_price'];
        }
        if (isset($map['relate_modify_apply_id'])) {
            $model->relateModifyApplyId = $map['relate_modify_apply_id'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['total_fee'])) {
            $model->totalFee = $map['total_fee'];
        }

        return $model;
    }
}