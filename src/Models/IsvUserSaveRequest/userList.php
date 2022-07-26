<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var int
     */
    public $departId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var int
     */
    public $leaveStatus;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $positionLevel;

    /**
     * @var string
     */
    public $realNameEn;

    /**
     * @var string
     */
    public $thirdDepartId;

    /**
     * @var string[]
     */
    public $thirdDepartIdList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'departId'          => 'depart_id',
        'email'             => 'email',
        'jobNo'             => 'job_no',
        'leaveStatus'       => 'leave_status',
        'phone'             => 'phone',
        'position'          => 'position',
        'positionLevel'     => 'position_level',
        'realNameEn'        => 'real_name_en',
        'thirdDepartId'     => 'third_depart_id',
        'thirdDepartIdList' => 'third_depart_id_list',
        'userId'            => 'user_id',
        'userName'          => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->leaveStatus) {
            $res['leave_status'] = $this->leaveStatus;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->positionLevel) {
            $res['position_level'] = $this->positionLevel;
        }
        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }
        if (null !== $this->thirdDepartId) {
            $res['third_depart_id'] = $this->thirdDepartId;
        }
        if (null !== $this->thirdDepartIdList) {
            $res['third_depart_id_list'] = $this->thirdDepartIdList;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['leave_status'])) {
            $model->leaveStatus = $map['leave_status'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['position'])) {
            $model->position = $map['position'];
        }
        if (isset($map['position_level'])) {
            $model->positionLevel = $map['position_level'];
        }
        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }
        if (isset($map['third_depart_id'])) {
            $model->thirdDepartId = $map['third_depart_id'];
        }
        if (isset($map['third_depart_id_list'])) {
            if (!empty($map['third_depart_id_list'])) {
                $model->thirdDepartIdList = $map['third_depart_id_list'];
            }
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
