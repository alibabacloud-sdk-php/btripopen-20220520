<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class UpdateEmployeeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $baseCityCodeListShrink;

    /**
     * @var string
     */
    public $baseLocationListShrink;

    /**
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $certListShrink;

    /**
     * @var string
     */
    public $customRoleCodeListShrink;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var bool
     */
    public $isBoss;

    /**
     * @var bool
     */
    public $isDeptLeader;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var string
     */
    public $managerUserId;

    /**
     * @var string
     */
    public $outDeptIdListShrink;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $positionLevel;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $realNameEn;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'attribute' => 'attribute',
        'avatar' => 'avatar',
        'baseCityCodeListShrink' => 'base_city_code_list',
        'baseLocationListShrink' => 'base_location_list',
        'birthday' => 'birthday',
        'certListShrink' => 'cert_list',
        'customRoleCodeListShrink' => 'custom_role_code_list',
        'email' => 'email',
        'gender' => 'gender',
        'isAdmin' => 'is_admin',
        'isBoss' => 'is_boss',
        'isDeptLeader' => 'is_dept_leader',
        'jobNo' => 'job_no',
        'managerUserId' => 'manager_user_id',
        'outDeptIdListShrink' => 'out_dept_id_list',
        'phone' => 'phone',
        'positionLevel' => 'position_level',
        'realName' => 'real_name',
        'realNameEn' => 'real_name_en',
        'userId' => 'user_id',
        'userNick' => 'user_nick',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }

        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->baseCityCodeListShrink) {
            $res['base_city_code_list'] = $this->baseCityCodeListShrink;
        }

        if (null !== $this->baseLocationListShrink) {
            $res['base_location_list'] = $this->baseLocationListShrink;
        }

        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }

        if (null !== $this->certListShrink) {
            $res['cert_list'] = $this->certListShrink;
        }

        if (null !== $this->customRoleCodeListShrink) {
            $res['custom_role_code_list'] = $this->customRoleCodeListShrink;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->isAdmin) {
            $res['is_admin'] = $this->isAdmin;
        }

        if (null !== $this->isBoss) {
            $res['is_boss'] = $this->isBoss;
        }

        if (null !== $this->isDeptLeader) {
            $res['is_dept_leader'] = $this->isDeptLeader;
        }

        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }

        if (null !== $this->managerUserId) {
            $res['manager_user_id'] = $this->managerUserId;
        }

        if (null !== $this->outDeptIdListShrink) {
            $res['out_dept_id_list'] = $this->outDeptIdListShrink;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->positionLevel) {
            $res['position_level'] = $this->positionLevel;
        }

        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }

        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userNick) {
            $res['user_nick'] = $this->userNick;
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
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }

        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['base_city_code_list'])) {
            $model->baseCityCodeListShrink = $map['base_city_code_list'];
        }

        if (isset($map['base_location_list'])) {
            $model->baseLocationListShrink = $map['base_location_list'];
        }

        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }

        if (isset($map['cert_list'])) {
            $model->certListShrink = $map['cert_list'];
        }

        if (isset($map['custom_role_code_list'])) {
            $model->customRoleCodeListShrink = $map['custom_role_code_list'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['is_admin'])) {
            $model->isAdmin = $map['is_admin'];
        }

        if (isset($map['is_boss'])) {
            $model->isBoss = $map['is_boss'];
        }

        if (isset($map['is_dept_leader'])) {
            $model->isDeptLeader = $map['is_dept_leader'];
        }

        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }

        if (isset($map['manager_user_id'])) {
            $model->managerUserId = $map['manager_user_id'];
        }

        if (isset($map['out_dept_id_list'])) {
            $model->outDeptIdListShrink = $map['out_dept_id_list'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['position_level'])) {
            $model->positionLevel = $map['position_level'];
        }

        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }

        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_nick'])) {
            $model->userNick = $map['user_nick'];
        }

        return $model;
    }
}
