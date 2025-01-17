<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/enums/v1/event_type.proto

namespace GPBMetadata\Temporal\Api\Enums\V1;

class EventType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
&temporal/api/enums/v1/event_type.prototemporal.api.enums.v1*�
	EventType
EVENT_TYPE_UNSPECIFIED )
%EVENT_TYPE_WORKFLOW_EXECUTION_STARTED+
\'EVENT_TYPE_WORKFLOW_EXECUTION_COMPLETED(
$EVENT_TYPE_WORKFLOW_EXECUTION_FAILED+
\'EVENT_TYPE_WORKFLOW_EXECUTION_TIMED_OUT&
"EVENT_TYPE_WORKFLOW_TASK_SCHEDULED$
 EVENT_TYPE_WORKFLOW_TASK_STARTED&
"EVENT_TYPE_WORKFLOW_TASK_COMPLETED&
"EVENT_TYPE_WORKFLOW_TASK_TIMED_OUT#
EVENT_TYPE_WORKFLOW_TASK_FAILED	&
"EVENT_TYPE_ACTIVITY_TASK_SCHEDULED
$
 EVENT_TYPE_ACTIVITY_TASK_STARTED&
"EVENT_TYPE_ACTIVITY_TASK_COMPLETED#
EVENT_TYPE_ACTIVITY_TASK_FAILED&
"EVENT_TYPE_ACTIVITY_TASK_TIMED_OUT-
)EVENT_TYPE_ACTIVITY_TASK_CANCEL_REQUESTED%
!EVENT_TYPE_ACTIVITY_TASK_CANCELED
EVENT_TYPE_TIMER_STARTED
EVENT_TYPE_TIMER_FIRED
EVENT_TYPE_TIMER_CANCELED2
.EVENT_TYPE_WORKFLOW_EXECUTION_CANCEL_REQUESTED*
&EVENT_TYPE_WORKFLOW_EXECUTION_CANCELEDC
?EVENT_TYPE_REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_INITIATED@
<EVENT_TYPE_REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_FAILED;
7EVENT_TYPE_EXTERNAL_WORKFLOW_EXECUTION_CANCEL_REQUESTED
EVENT_TYPE_MARKER_RECORDED*
&EVENT_TYPE_WORKFLOW_EXECUTION_SIGNALED,
(EVENT_TYPE_WORKFLOW_EXECUTION_TERMINATED2
.EVENT_TYPE_WORKFLOW_EXECUTION_CONTINUED_AS_NEW7
3EVENT_TYPE_START_CHILD_WORKFLOW_EXECUTION_INITIATED4
0EVENT_TYPE_START_CHILD_WORKFLOW_EXECUTION_FAILED/
+EVENT_TYPE_CHILD_WORKFLOW_EXECUTION_STARTED1
-EVENT_TYPE_CHILD_WORKFLOW_EXECUTION_COMPLETED .
*EVENT_TYPE_CHILD_WORKFLOW_EXECUTION_FAILED!0
,EVENT_TYPE_CHILD_WORKFLOW_EXECUTION_CANCELED"1
-EVENT_TYPE_CHILD_WORKFLOW_EXECUTION_TIMED_OUT#2
.EVENT_TYPE_CHILD_WORKFLOW_EXECUTION_TERMINATED$;
7EVENT_TYPE_SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_INITIATED%8
4EVENT_TYPE_SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_FAILED&3
/EVENT_TYPE_EXTERNAL_WORKFLOW_EXECUTION_SIGNALED\'0
,EVENT_TYPE_UPSERT_WORKFLOW_SEARCH_ATTRIBUTES(1
-EVENT_TYPE_WORKFLOW_EXECUTION_UPDATE_ACCEPTED)1
-EVENT_TYPE_WORKFLOW_EXECUTION_UPDATE_REJECTED*2
.EVENT_TYPE_WORKFLOW_EXECUTION_UPDATE_COMPLETED+6
2EVENT_TYPE_WORKFLOW_PROPERTIES_MODIFIED_EXTERNALLY,6
2EVENT_TYPE_ACTIVITY_PROPERTIES_MODIFIED_EXTERNALLY-+
\'EVENT_TYPE_WORKFLOW_PROPERTIES_MODIFIED.B�
io.temporal.api.enums.v1BEventTypeProtoPZ!go.temporal.io/api/enums/v1;enums�Temporalio.Api.Enums.V1�Temporalio::Api::Enums::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

