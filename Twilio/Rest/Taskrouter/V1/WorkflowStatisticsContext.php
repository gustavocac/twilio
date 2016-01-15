<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1;

use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class WorkflowStatisticsContext extends InstanceContext {
    /**
     * Initialize the WorkflowStatisticsContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The workspace_sid
     * @param string $workflowSid The workflow_sid
     * @return WorkflowStatisticsContext 
     */
    public function __construct(Version $version, $workspaceSid, $workflowSid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'workspaceSid' => $workspaceSid,
            'workflowSid' => $workflowSid,
        );
        $this->uri = '/Workspaces/' . $workspaceSid . '/Workflows/' . $workflowSid . '/Statistics';
    }

    /**
     * Fetch a WorkflowStatisticsInstance
     * 
     * @return WorkflowStatisticsInstance Fetched WorkflowStatisticsInstance
     */
    public function fetch($options) {
        $params = Values::of(array(
            'Minutes' => $options['minutes'],
            'StartDate' => $options['startDate'],
            'EndDate' => $options['endDate'],
        ));
        
        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );
        
        return new WorkflowStatisticsInstance(
            $this->version,
            $payload,
            $this->solution['workspaceSid'],
            $this->solution['workflowSid']
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.WorkflowStatisticsContext ' . implode(' ', $context) . ']';
    }
}