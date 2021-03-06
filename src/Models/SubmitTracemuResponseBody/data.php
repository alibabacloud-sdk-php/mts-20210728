<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTracemuResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 生成m3u8文件的code
     *
     * @var string
     */
    public $code;

    /**
     * @description 任务id
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'code'  => 'Code',
        'jobId' => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
