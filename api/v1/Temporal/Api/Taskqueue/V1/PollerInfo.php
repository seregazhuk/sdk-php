<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/taskqueue/v1/message.proto

namespace Temporal\Api\Taskqueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.taskqueue.v1.PollerInfo</code>
 */
class PollerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_access_time = 1 [(.gogoproto.stdtime) = true];</code>
     */
    protected $last_access_time = null;
    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>double rate_per_second = 3;</code>
     */
    protected $rate_per_second = 0.0;
    /**
     * If a worker has opted into the worker versioning feature while polling, its capabilities will
     * appear here.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionCapabilities worker_version_capabilities = 4;</code>
     */
    protected $worker_version_capabilities = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $last_access_time
     *     @type string $identity
     *     @type float $rate_per_second
     *     @type \Temporal\Api\Common\V1\WorkerVersionCapabilities $worker_version_capabilities
     *           If a worker has opted into the worker versioning feature while polling, its capabilities will
     *           appear here.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_access_time = 1 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastAccessTime()
    {
        return $this->last_access_time;
    }

    public function hasLastAccessTime()
    {
        return isset($this->last_access_time);
    }

    public function clearLastAccessTime()
    {
        unset($this->last_access_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_access_time = 1 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastAccessTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_access_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
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
     * Generated from protobuf field <code>double rate_per_second = 3;</code>
     * @return float
     */
    public function getRatePerSecond()
    {
        return $this->rate_per_second;
    }

    /**
     * Generated from protobuf field <code>double rate_per_second = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setRatePerSecond($var)
    {
        GPBUtil::checkDouble($var);
        $this->rate_per_second = $var;

        return $this;
    }

    /**
     * If a worker has opted into the worker versioning feature while polling, its capabilities will
     * appear here.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionCapabilities worker_version_capabilities = 4;</code>
     * @return \Temporal\Api\Common\V1\WorkerVersionCapabilities|null
     */
    public function getWorkerVersionCapabilities()
    {
        return $this->worker_version_capabilities;
    }

    public function hasWorkerVersionCapabilities()
    {
        return isset($this->worker_version_capabilities);
    }

    public function clearWorkerVersionCapabilities()
    {
        unset($this->worker_version_capabilities);
    }

    /**
     * If a worker has opted into the worker versioning feature while polling, its capabilities will
     * appear here.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionCapabilities worker_version_capabilities = 4;</code>
     * @param \Temporal\Api\Common\V1\WorkerVersionCapabilities $var
     * @return $this
     */
    public function setWorkerVersionCapabilities($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkerVersionCapabilities::class);
        $this->worker_version_capabilities = $var;

        return $this;
    }

}

