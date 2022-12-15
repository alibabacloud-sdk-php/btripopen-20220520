<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class applyIntentionInfoDo extends Model
{
    /**
     * @example SHA
     *
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @example 2022-01-12T16:47Z
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example F
     *
     * @var string
     */
    public $cabin;

    /**
     * @example 1
     *
     * @var int
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinClassStr;

    /**
     * @example SHA
     *
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @example 2022-01-12T16:47Z
     *
     * @var string
     */
    public $depTime;

    /**
     * @example 4
     *
     * @var string
     */
    public $discount;

    /**
     * @example MU2759
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example 300
     *
     * @var int
     */
    public $price;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'arrCity'       => 'arr_city',
        'arrCityName'   => 'arr_city_name',
        'arrTime'       => 'arr_time',
        'cabin'         => 'cabin',
        'cabinClass'    => 'cabin_class',
        'cabinClassStr' => 'cabin_class_str',
        'depCity'       => 'dep_city',
        'depCityName'   => 'dep_city_name',
        'depTime'       => 'dep_time',
        'discount'      => 'discount',
        'flightNo'      => 'flight_no',
        'price'         => 'price',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinClassStr) {
            $res['cabin_class_str'] = $this->cabinClassStr;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyIntentionInfoDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_class_str'])) {
            $model->cabinClassStr = $map['cabin_class_str'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
