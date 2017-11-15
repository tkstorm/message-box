<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Response.proto

namespace Message\Payload;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>message.payload.Response.Header</code>
 */
class Response_Header extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>int32 code = 2;</code>
     */
    private $code = 0;
    /**
     * Generated from protobuf field <code>bool success = 3;</code>
     */
    private $success = false;
    /**
     * Generated from protobuf field <code>string mId = 4;</code>
     */
    private $mId = '';

    public function __construct() {
        \GPBMetadata\Response::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 code = 2;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int32 code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool success = 3;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mId = 4;</code>
     * @return string
     */
    public function getMId()
    {
        return $this->mId;
    }

    /**
     * Generated from protobuf field <code>string mId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mId = $var;

        return $this;
    }

}
