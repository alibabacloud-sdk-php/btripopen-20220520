<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class MonthBillSplitGetRequest extends Model
{
    /**
     * @var string
     */
    public $billBatch;

    /**
     * @var string
     */
    public $billMonth;

    /**
     * @var string[]
     */
    public $billSplitKeyList;

    /**
     * @var string
     */
    public $billSplitMode;
    protected $_name = [
        'billBatch' => 'bill_batch',
        'billMonth' => 'bill_month',
        'billSplitKeyList' => 'bill_split_key_list',
        'billSplitMode' => 'bill_split_mode',
    ];

    public function validate()
    {
        if (\is_array($this->billSplitKeyList)) {
            Model::validateArray($this->billSplitKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billBatch) {
            $res['bill_batch'] = $this->billBatch;
        }

        if (null !== $this->billMonth) {
            $res['bill_month'] = $this->billMonth;
        }

        if (null !== $this->billSplitKeyList) {
            if (\is_array($this->billSplitKeyList)) {
                $res['bill_split_key_list'] = [];
                $n1 = 0;
                foreach ($this->billSplitKeyList as $item1) {
                    $res['bill_split_key_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->billSplitMode) {
            $res['bill_split_mode'] = $this->billSplitMode;
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
        if (isset($map['bill_batch'])) {
            $model->billBatch = $map['bill_batch'];
        }

        if (isset($map['bill_month'])) {
            $model->billMonth = $map['bill_month'];
        }

        if (isset($map['bill_split_key_list'])) {
            if (!empty($map['bill_split_key_list'])) {
                $model->billSplitKeyList = [];
                $n1 = 0;
                foreach ($map['bill_split_key_list'] as $item1) {
                    $model->billSplitKeyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['bill_split_mode'])) {
            $model->billSplitMode = $map['bill_split_mode'];
        }

        return $model;
    }
}
