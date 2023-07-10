<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkflowExecutionResponse</code>
 */
class UpdateWorkflowExecutionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Enough information for subsequent poll calls if needed. Never null.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.UpdateRef update_ref = 1;</code>
     */
    protected $update_ref = null;
    /**
     * The outcome of the update if and only if the workflow execution update
     * has completed. If this response is being returned before the update has
     * completed then this field will not be set.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Outcome outcome = 2;</code>
     */
    protected $outcome = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Update\V1\UpdateRef $update_ref
     *           Enough information for subsequent poll calls if needed. Never null.
     *     @type \Temporal\Api\Update\V1\Outcome $outcome
     *           The outcome of the update if and only if the workflow execution update
     *           has completed. If this response is being returned before the update has
     *           completed then this field will not be set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Enough information for subsequent poll calls if needed. Never null.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.UpdateRef update_ref = 1;</code>
     * @return \Temporal\Api\Update\V1\UpdateRef|null
     */
    public function getUpdateRef()
    {
        return $this->update_ref;
    }

    public function hasUpdateRef()
    {
        return isset($this->update_ref);
    }

    public function clearUpdateRef()
    {
        unset($this->update_ref);
    }

    /**
     * Enough information for subsequent poll calls if needed. Never null.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.UpdateRef update_ref = 1;</code>
     * @param \Temporal\Api\Update\V1\UpdateRef $var
     * @return $this
     */
    public function setUpdateRef($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Update\V1\UpdateRef::class);
        $this->update_ref = $var;

        return $this;
    }

    /**
     * The outcome of the update if and only if the workflow execution update
     * has completed. If this response is being returned before the update has
     * completed then this field will not be set.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Outcome outcome = 2;</code>
     * @return \Temporal\Api\Update\V1\Outcome|null
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    public function hasOutcome()
    {
        return isset($this->outcome);
    }

    public function clearOutcome()
    {
        unset($this->outcome);
    }

    /**
     * The outcome of the update if and only if the workflow execution update
     * has completed. If this response is being returned before the update has
     * completed then this field will not be set.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Outcome outcome = 2;</code>
     * @param \Temporal\Api\Update\V1\Outcome $var
     * @return $this
     */
    public function setOutcome($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Update\V1\Outcome::class);
        $this->outcome = $var;

        return $this;
    }

}

