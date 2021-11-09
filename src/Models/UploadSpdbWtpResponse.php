<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TFTUS\Models;

use AlibabaCloud\Tea\Model;

class UploadSpdbWtpResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 结果状态
    /**
     * @var string
     */
    public $resultStatus;

    // 结果信息
    /**
     * @var string
     */
    public $resultMessage;
    protected $_name = [
        'reqMsgId'      => 'req_msg_id',
        'resultCode'    => 'result_code',
        'resultMsg'     => 'result_msg',
        'resultStatus'  => 'result_status',
        'resultMessage' => 'result_message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->resultStatus) {
            $res['result_status'] = $this->resultStatus;
        }
        if (null !== $this->resultMessage) {
            $res['result_message'] = $this->resultMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadSpdbWtpResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['result_status'])) {
            $model->resultStatus = $map['result_status'];
        }
        if (isset($map['result_message'])) {
            $model->resultMessage = $map['result_message'];
        }

        return $model;
    }
}