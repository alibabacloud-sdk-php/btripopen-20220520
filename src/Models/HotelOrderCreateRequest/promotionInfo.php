<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest\promotionInfo\promotionDetailInfoList;
use AlibabaCloud\Tea\Model;

class promotionInfo extends Model
{
    /**
     * @var promotionDetailInfoList[]
     */
    public $promotionDetailInfoList;

    /**
     * @var int
     */
    public $promotionTotalPrice;
    protected $_name = [
        'promotionDetailInfoList' => 'promotion_detail_info_list',
        'promotionTotalPrice'     => 'promotion_total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionDetailInfoList) {
            $res['promotion_detail_info_list'] = [];
            if (null !== $this->promotionDetailInfoList && \is_array($this->promotionDetailInfoList)) {
                $n = 0;
                foreach ($this->promotionDetailInfoList as $item) {
                    $res['promotion_detail_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->promotionTotalPrice) {
            $res['promotion_total_price'] = $this->promotionTotalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['promotion_detail_info_list'])) {
            if (!empty($map['promotion_detail_info_list'])) {
                $model->promotionDetailInfoList = [];
                $n                              = 0;
                foreach ($map['promotion_detail_info_list'] as $item) {
                    $model->promotionDetailInfoList[$n++] = null !== $item ? promotionDetailInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['promotion_total_price'])) {
            $model->promotionTotalPrice = $map['promotion_total_price'];
        }

        return $model;
    }
}
