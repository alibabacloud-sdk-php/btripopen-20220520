<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderRequest;

use AlibabaCloud\Tea\Model;

class travelerInfoList extends Model
{
    /**
     * @example 2000-00-00
     *
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $certNation;

    /**
     * @example 1262651555151
     *
     * @var string
     */
    public $certNo;

    /**
     * @example 1
     *
     * @var string
     */
    public $certType;

    /**
     * @example 2000-00-00
     *
     * @var string
     */
    public $certValidDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1234
     *
     * @var string
     */
    public $outUserId;

    /**
     * @example 12341231232
     *
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $sex;

    /**
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'birthday'      => 'birthday',
        'certNation'    => 'cert_nation',
        'certNo'        => 'cert_no',
        'certType'      => 'cert_type',
        'certValidDate' => 'cert_valid_date',
        'name'          => 'name',
        'outUserId'     => 'out_user_id',
        'phone'         => 'phone',
        'sex'           => 'sex',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->certNation) {
            $res['cert_nation'] = $this->certNation;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }
        if (null !== $this->certValidDate) {
            $res['cert_valid_date'] = $this->certValidDate;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->outUserId) {
            $res['out_user_id'] = $this->outUserId;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->sex) {
            $res['sex'] = $this->sex;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return travelerInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['cert_nation'])) {
            $model->certNation = $map['cert_nation'];
        }
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }
        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }
        if (isset($map['cert_valid_date'])) {
            $model->certValidDate = $map['cert_valid_date'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['out_user_id'])) {
            $model->outUserId = $map['out_user_id'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['sex'])) {
            $model->sex = $map['sex'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
