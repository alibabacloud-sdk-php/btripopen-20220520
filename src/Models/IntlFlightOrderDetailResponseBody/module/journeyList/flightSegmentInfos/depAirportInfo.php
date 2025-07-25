<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\flightSegmentInfos;

use AlibabaCloud\Dara\Model;

class depAirportInfo extends Model
{
    /**
     * @var string
     */
    public $airportCode;

    /**
     * @var string
     */
    public $airportName;

    /**
     * @var string
     */
    public $airportShortName;

    /**
     * @var string
     */
    public $terminal;
    protected $_name = [
        'airportCode' => 'airport_code',
        'airportName' => 'airport_name',
        'airportShortName' => 'airport_short_name',
        'terminal' => 'terminal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airportCode) {
            $res['airport_code'] = $this->airportCode;
        }

        if (null !== $this->airportName) {
            $res['airport_name'] = $this->airportName;
        }

        if (null !== $this->airportShortName) {
            $res['airport_short_name'] = $this->airportShortName;
        }

        if (null !== $this->terminal) {
            $res['terminal'] = $this->terminal;
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
        if (isset($map['airport_code'])) {
            $model->airportCode = $map['airport_code'];
        }

        if (isset($map['airport_name'])) {
            $model->airportName = $map['airport_name'];
        }

        if (isset($map['airport_short_name'])) {
            $model->airportShortName = $map['airport_short_name'];
        }

        if (isset($map['terminal'])) {
            $model->terminal = $map['terminal'];
        }

        return $model;
    }
}
