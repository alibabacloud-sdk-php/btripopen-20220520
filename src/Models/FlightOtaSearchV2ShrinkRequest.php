<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightOtaSearchV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cabinTypeListShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $directOnly;

    /**
     * @example cheshi
     *
     * @var string
     */
    public $isvName;

    /**
     * @example true
     *
     * @var bool
     */
    public $needShareFlight;

    /**
     * @var string
     */
    public $searchJourneysShrink;

    /**
     * @example 0
     *
     * @var int
     */
    public $searchMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'cabinTypeListShrink'  => 'cabin_type_list',
        'directOnly'           => 'direct_only',
        'isvName'              => 'isv_name',
        'needShareFlight'      => 'need_share_flight',
        'searchJourneysShrink' => 'search_journeys',
        'searchMode'           => 'search_mode',
        'tripType'             => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinTypeListShrink) {
            $res['cabin_type_list'] = $this->cabinTypeListShrink;
        }
        if (null !== $this->directOnly) {
            $res['direct_only'] = $this->directOnly;
        }
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->needShareFlight) {
            $res['need_share_flight'] = $this->needShareFlight;
        }
        if (null !== $this->searchJourneysShrink) {
            $res['search_journeys'] = $this->searchJourneysShrink;
        }
        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightOtaSearchV2ShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_type_list'])) {
            $model->cabinTypeListShrink = $map['cabin_type_list'];
        }
        if (isset($map['direct_only'])) {
            $model->directOnly = $map['direct_only'];
        }
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['need_share_flight'])) {
            $model->needShareFlight = $map['need_share_flight'];
        }
        if (isset($map['search_journeys'])) {
            $model->searchJourneysShrink = $map['search_journeys'];
        }
        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
