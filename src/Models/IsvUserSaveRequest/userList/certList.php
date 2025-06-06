<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest\userList;

use AlibabaCloud\Dara\Model;

class certList extends Model
{
    /**
     * @var string
     */
    public $certExpiredTime;

    /**
     * @var string
     */
    public $certNation;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var int
     */
    public $certType;

    /**
     * @var string
     */
    public $nationality;
    protected $_name = [
        'certExpiredTime' => 'cert_expired_time',
        'certNation' => 'cert_nation',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'nationality' => 'nationality',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certExpiredTime) {
            $res['cert_expired_time'] = $this->certExpiredTime;
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

        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
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
        if (isset($map['cert_expired_time'])) {
            $model->certExpiredTime = $map['cert_expired_time'];
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

        if (isset($map['nationality'])) {
            $model->nationality = $map['nationality'];
        }

        return $model;
    }
}
