<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.RespondActivityTaskFailedRequest</code>
 */
class RespondActivityTaskFailedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     */
    protected $task_token = '';
    /**
     * Detailed failure information
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 2;</code>
     */
    protected $failure = null;
    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     */
    protected $namespace = '';
    /**
     * Additional details to be stored as last activity heartbeat
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_heartbeat_details = 5;</code>
     */
    protected $last_heartbeat_details = null;
    /**
     * Version info of the worker who processed this task. This message's `build_id` field should
     * always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     * field to true. See message docstrings for more.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 6;</code>
     */
    protected $worker_version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_token
     *           The task token as received in `PollActivityTaskQueueResponse`
     *     @type \Temporal\Api\Failure\V1\Failure $failure
     *           Detailed failure information
     *     @type string $identity
     *           The identity of the worker/client
     *     @type string $namespace
     *     @type \Temporal\Api\Common\V1\Payloads $last_heartbeat_details
     *           Additional details to be stored as last activity heartbeat
     *     @type \Temporal\Api\Common\V1\WorkerVersionStamp $worker_version
     *           Version info of the worker who processed this task. This message's `build_id` field should
     *           always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     *           field to true. See message docstrings for more.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @return string
     */
    public function getTaskToken()
    {
        return $this->task_token;
    }

    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->task_token = $var;

        return $this;
    }

    /**
     * Detailed failure information
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 2;</code>
     * @return \Temporal\Api\Failure\V1\Failure|null
     */
    public function getFailure()
    {
        return $this->failure;
    }

    public function hasFailure()
    {
        return isset($this->failure);
    }

    public function clearFailure()
    {
        unset($this->failure);
    }

    /**
     * Detailed failure information
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 2;</code>
     * @param \Temporal\Api\Failure\V1\Failure $var
     * @return $this
     */
    public function setFailure($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Failure\V1\Failure::class);
        $this->failure = $var;

        return $this;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Additional details to be stored as last activity heartbeat
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_heartbeat_details = 5;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getLastHeartbeatDetails()
    {
        return $this->last_heartbeat_details;
    }

    public function hasLastHeartbeatDetails()
    {
        return isset($this->last_heartbeat_details);
    }

    public function clearLastHeartbeatDetails()
    {
        unset($this->last_heartbeat_details);
    }

    /**
     * Additional details to be stored as last activity heartbeat
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_heartbeat_details = 5;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setLastHeartbeatDetails($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->last_heartbeat_details = $var;

        return $this;
    }

    /**
     * Version info of the worker who processed this task. This message's `build_id` field should
     * always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     * field to true. See message docstrings for more.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 6;</code>
     * @return \Temporal\Api\Common\V1\WorkerVersionStamp|null
     */
    public function getWorkerVersion()
    {
        return $this->worker_version;
    }

    public function hasWorkerVersion()
    {
        return isset($this->worker_version);
    }

    public function clearWorkerVersion()
    {
        unset($this->worker_version);
    }

    /**
     * Version info of the worker who processed this task. This message's `build_id` field should
     * always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     * field to true. See message docstrings for more.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 6;</code>
     * @param \Temporal\Api\Common\V1\WorkerVersionStamp $var
     * @return $this
     */
    public function setWorkerVersion($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkerVersionStamp::class);
        $this->worker_version = $var;

        return $this;
    }

}

