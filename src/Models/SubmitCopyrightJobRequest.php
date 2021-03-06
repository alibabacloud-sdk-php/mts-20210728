<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\Tea\Model;

class SubmitCopyrightJobRequest extends Model
{
    /**
     * @description 任务结果回调url
     *
     * @var string
     */
    public $callBack;

    /**
     * @description 水印信息描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 输入的视频，oss三元组
     *
     * @var string
     */
    public $input;

    /**
     * @description 水印强度，取值1，2，3
     *
     * @var int
     */
    public $level;

    /**
     * @description 水印信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 输出的视频，oss三元组
     *
     * @var string
     */
    public $output;

    /**
     * @description 水印起始时间(单位是秒)，不填写默认为0
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 水印结束时间(单位是秒)，不填默认为60000
     *
     * @var int
     */
    public $totalTime;

    /**
     * @description 外部url链接(Input和url二选一)
     *
     * @var string
     */
    public $url;

    /**
     * @description 用户自定义数据
     *
     * @var string
     */
    public $userData;

    /**
     * @description 可见水印(必须是英文字符)
     *
     * @var string
     */
    public $visibleMessage;
    protected $_name = [
        'callBack'       => 'CallBack',
        'description'    => 'Description',
        'input'          => 'Input',
        'level'          => 'Level',
        'message'        => 'Message',
        'output'         => 'Output',
        'startTime'      => 'StartTime',
        'totalTime'      => 'TotalTime',
        'url'            => 'Url',
        'userData'       => 'UserData',
        'visibleMessage' => 'VisibleMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->visibleMessage) {
            $res['VisibleMessage'] = $this->visibleMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCopyrightJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VisibleMessage'])) {
            $model->visibleMessage = $map['VisibleMessage'];
        }

        return $model;
    }
}
