<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/messages.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Server-streaming request.
 * </pre>
 *
 * Protobuf type <code>grpc.testing.StreamingOutputCallRequest</code>
 */
class StreamingOutputCallRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * DEPRECATED, don't use. To be removed shortly.
     * Desired payload type in the response from the server.
     * If response_type is RANDOM, the payload from each response in the stream
     * might be of different types. This is to simulate a mixed type of payload
     * stream.
     * </pre>
     *
     * <code>.grpc.testing.PayloadType response_type = 1;</code>
     */
    private $response_type = 0;
    /**
     * <pre>
     * Configuration for each expected response message.
     * </pre>
     *
     * <code>repeated .grpc.testing.ResponseParameters response_parameters = 2;</code>
     */
    private $response_parameters;
    /**
     * <pre>
     * Optional input payload sent along with the request.
     * </pre>
     *
     * <code>.grpc.testing.Payload payload = 3;</code>
     */
    private $payload = null;
    /**
     * <pre>
     * Whether server should return a given status
     * </pre>
     *
     * <code>.grpc.testing.EchoStatus response_status = 7;</code>
     */
    private $response_status = null;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Messages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * DEPRECATED, don't use. To be removed shortly.
     * Desired payload type in the response from the server.
     * If response_type is RANDOM, the payload from each response in the stream
     * might be of different types. This is to simulate a mixed type of payload
     * stream.
     * </pre>
     *
     * <code>.grpc.testing.PayloadType response_type = 1;</code>
     */
    public function getResponseType()
    {
        return $this->response_type;
    }

    /**
     * <pre>
     * DEPRECATED, don't use. To be removed shortly.
     * Desired payload type in the response from the server.
     * If response_type is RANDOM, the payload from each response in the stream
     * might be of different types. This is to simulate a mixed type of payload
     * stream.
     * </pre>
     *
     * <code>.grpc.testing.PayloadType response_type = 1;</code>
     */
    public function setResponseType($var)
    {
        GPBUtil::checkEnum($var, \Grpc\Testing\PayloadType::class);
        $this->response_type = $var;
    }

    /**
     * <pre>
     * Configuration for each expected response message.
     * </pre>
     *
     * <code>repeated .grpc.testing.ResponseParameters response_parameters = 2;</code>
     */
    public function getResponseParameters()
    {
        return $this->response_parameters;
    }

    /**
     * <pre>
     * Configuration for each expected response message.
     * </pre>
     *
     * <code>repeated .grpc.testing.ResponseParameters response_parameters = 2;</code>
     */
    public function setResponseParameters(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grpc\Testing\ResponseParameters::class);
        $this->response_parameters = $var;
    }

    /**
     * <pre>
     * Optional input payload sent along with the request.
     * </pre>
     *
     * <code>.grpc.testing.Payload payload = 3;</code>
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * <pre>
     * Optional input payload sent along with the request.
     * </pre>
     *
     * <code>.grpc.testing.Payload payload = 3;</code>
     */
    public function setPayload(&$var)
    {
        GPBUtil::checkMessage($var, \Grpc\Testing\Payload::class);
        $this->payload = $var;
    }

    /**
     * <pre>
     * Whether server should return a given status
     * </pre>
     *
     * <code>.grpc.testing.EchoStatus response_status = 7;</code>
     */
    public function getResponseStatus()
    {
        return $this->response_status;
    }

    /**
     * <pre>
     * Whether server should return a given status
     * </pre>
     *
     * <code>.grpc.testing.EchoStatus response_status = 7;</code>
     */
    public function setResponseStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Grpc\Testing\EchoStatus::class);
        $this->response_status = $var;
    }

}
