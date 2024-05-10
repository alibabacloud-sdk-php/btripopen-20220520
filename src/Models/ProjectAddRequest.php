<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ProjectAddRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pro_code
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 234
     *
     * @var string
     */
    public $thirdPartCostCenterId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $thirdPartId;

    /**
     * @example 123
     *
     * @var string
     */
    public $thirdPartInvoiceId;
    protected $_name = [
        'code'                  => 'code',
        'projectName'           => 'project_name',
        'thirdPartCostCenterId' => 'third_part_cost_center_id',
        'thirdPartId'           => 'third_part_id',
        'thirdPartInvoiceId'    => 'third_part_invoice_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->projectName) {
            $res['project_name'] = $this->projectName;
        }
        if (null !== $this->thirdPartCostCenterId) {
            $res['third_part_cost_center_id'] = $this->thirdPartCostCenterId;
        }
        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
        }
        if (null !== $this->thirdPartInvoiceId) {
            $res['third_part_invoice_id'] = $this->thirdPartInvoiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectAddRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['project_name'])) {
            $model->projectName = $map['project_name'];
        }
        if (isset($map['third_part_cost_center_id'])) {
            $model->thirdPartCostCenterId = $map['third_part_cost_center_id'];
        }
        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }
        if (isset($map['third_part_invoice_id'])) {
            $model->thirdPartInvoiceId = $map['third_part_invoice_id'];
        }

        return $model;
    }
}
