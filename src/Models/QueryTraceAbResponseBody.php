<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceAbResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryTraceAbResponseBody extends Model
{
    /**
     * @description 返回结构
     *
     * @var data[]
     */
    public $data;

    /**
     * @description 返回信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestID;

    /**
     * @description 状态码
     *
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'data'       => 'Data',
        'message'    => 'Message',
        'requestID'  => 'RequestID',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestID) {
            $res['RequestID'] = $this->requestID;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTraceAbResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestID'])) {
            $model->requestID = $map['RequestID'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
