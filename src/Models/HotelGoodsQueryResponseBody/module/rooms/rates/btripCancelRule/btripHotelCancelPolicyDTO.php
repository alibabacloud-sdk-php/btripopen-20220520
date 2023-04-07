<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\btripCancelRule;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\btripCancelRule\btripHotelCancelPolicyDTO\btripHotelCancelPolicyInfoDTOList;
use AlibabaCloud\Tea\Model;

class btripHotelCancelPolicyDTO extends Model
{
    /**
     * @var btripHotelCancelPolicyInfoDTOList[]
     */
    public $btripHotelCancelPolicyInfoDTOList;

    /**
     * @example 1
     *
     * @var int
     */
    public $cancelPolicyType;
    protected $_name = [
        'btripHotelCancelPolicyInfoDTOList' => 'btrip_hotel_cancel_policy_info_d_t_o_list',
        'cancelPolicyType'                  => 'cancel_policy_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripHotelCancelPolicyInfoDTOList) {
            $res['btrip_hotel_cancel_policy_info_d_t_o_list'] = [];
            if (null !== $this->btripHotelCancelPolicyInfoDTOList && \is_array($this->btripHotelCancelPolicyInfoDTOList)) {
                $n = 0;
                foreach ($this->btripHotelCancelPolicyInfoDTOList as $item) {
                    $res['btrip_hotel_cancel_policy_info_d_t_o_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cancelPolicyType) {
            $res['cancel_policy_type'] = $this->cancelPolicyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return btripHotelCancelPolicyDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_hotel_cancel_policy_info_d_t_o_list'])) {
            if (!empty($map['btrip_hotel_cancel_policy_info_d_t_o_list'])) {
                $model->btripHotelCancelPolicyInfoDTOList = [];
                $n                                        = 0;
                foreach ($map['btrip_hotel_cancel_policy_info_d_t_o_list'] as $item) {
                    $model->btripHotelCancelPolicyInfoDTOList[$n++] = null !== $item ? btripHotelCancelPolicyInfoDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cancel_policy_type'])) {
            $model->cancelPolicyType = $map['cancel_policy_type'];
        }

        return $model;
    }
}
