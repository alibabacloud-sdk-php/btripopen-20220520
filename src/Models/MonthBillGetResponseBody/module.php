<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponseBody\module\monthAccountBillDetail;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @description CorpMonthAccountBillFeeDetail
     *
     * @var monthAccountBillDetail
     */
    public $monthAccountBillDetail;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @example https://xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'endDate'                => 'end_date',
        'monthAccountBillDetail' => 'monthAccountBillDetail',
        'startDate'              => 'start_date',
        'url'                    => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->monthAccountBillDetail) {
            $res['monthAccountBillDetail'] = null !== $this->monthAccountBillDetail ? $this->monthAccountBillDetail->toMap() : null;
        }
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['end_date'])) {
            $model->endDate = $map['end_date'];
        }
        if (isset($map['monthAccountBillDetail'])) {
            $model->monthAccountBillDetail = monthAccountBillDetail::fromMap($map['monthAccountBillDetail']);
        }
        if (isset($map['start_date'])) {
            $model->startDate = $map['start_date'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
