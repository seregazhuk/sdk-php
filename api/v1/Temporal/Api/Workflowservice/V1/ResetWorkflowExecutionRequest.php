<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.ResetWorkflowExecutionRequest</code>
 */
class ResetWorkflowExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     */
    protected $reason = '';
    /**
     * The id of a `WORKFLOW_TASK_COMPLETED`,`WORKFLOW_TASK_TIMED_OUT`, `WORKFLOW_TASK_FAILED`, or
     * `WORKFLOW_TASK_STARTED` event to reset to.
     *
     * Generated from protobuf field <code>int64 workflow_task_finish_event_id = 4;</code>
     */
    protected $workflow_task_finish_event_id = 0;
    /**
     * Used to de-dupe reset requests
     *
     * Generated from protobuf field <code>string request_id = 5;</code>
     */
    protected $request_id = '';
    /**
     * Reset reapplay(replay) options.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ResetReapplyType reset_reapply_type = 6;</code>
     */
    protected $reset_reapply_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type string $reason
     *     @type int|string $workflow_task_finish_event_id
     *           The id of a `WORKFLOW_TASK_COMPLETED`,`WORKFLOW_TASK_TIMED_OUT`, `WORKFLOW_TASK_FAILED`, or
     *           `WORKFLOW_TASK_STARTED` event to reset to.
     *     @type string $request_id
     *           Used to de-dupe reset requests
     *     @type int $reset_reapply_type
     *           Reset reapplay(replay) options.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    public function hasWorkflowExecution()
    {
        return isset($this->workflow_execution);
    }

    public function clearWorkflowExecution()
    {
        unset($this->workflow_execution);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->workflow_execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * The id of a `WORKFLOW_TASK_COMPLETED`,`WORKFLOW_TASK_TIMED_OUT`, `WORKFLOW_TASK_FAILED`, or
     * `WORKFLOW_TASK_STARTED` event to reset to.
     *
     * Generated from protobuf field <code>int64 workflow_task_finish_event_id = 4;</code>
     * @return int|string
     */
    public function getWorkflowTaskFinishEventId()
    {
        return $this->workflow_task_finish_event_id;
    }

    /**
     * The id of a `WORKFLOW_TASK_COMPLETED`,`WORKFLOW_TASK_TIMED_OUT`, `WORKFLOW_TASK_FAILED`, or
     * `WORKFLOW_TASK_STARTED` event to reset to.
     *
     * Generated from protobuf field <code>int64 workflow_task_finish_event_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkflowTaskFinishEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->workflow_task_finish_event_id = $var;

        return $this;
    }

    /**
     * Used to de-dupe reset requests
     *
     * Generated from protobuf field <code>string request_id = 5;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Used to de-dupe reset requests
     *
     * Generated from protobuf field <code>string request_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Reset reapplay(replay) options.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ResetReapplyType reset_reapply_type = 6;</code>
     * @return int
     */
    public function getResetReapplyType()
    {
        return $this->reset_reapply_type;
    }

    /**
     * Reset reapplay(replay) options.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ResetReapplyType reset_reapply_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setResetReapplyType($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\ResetReapplyType::class);
        $this->reset_reapply_type = $var;

        return $this;
    }

}

