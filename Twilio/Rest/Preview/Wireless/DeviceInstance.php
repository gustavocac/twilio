<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Wireless;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Version;

/**
 * @property string sid
 * @property string alias
 * @property string accountSid
 * @property string ratePlanSid
 * @property string friendlyName
 * @property string simIdentifier
 * @property string status
 * @property string commandsCallbackUrl
 * @property string commandsCallbackMethod
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string url
 * @property string links
 */
class DeviceInstance extends InstanceResource {
    protected $_usage = null;

    /**
     * Initialize the DeviceInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The sid
     * @return \Twilio\Rest\Preview\Wireless\DeviceInstance 
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'sid' => $payload['sid'],
            'alias' => $payload['alias'],
            'accountSid' => $payload['account_sid'],
            'ratePlanSid' => $payload['rate_plan_sid'],
            'friendlyName' => $payload['friendly_name'],
            'simIdentifier' => $payload['sim_identifier'],
            'status' => $payload['status'],
            'commandsCallbackUrl' => $payload['commands_callback_url'],
            'commandsCallbackMethod' => $payload['commands_callback_method'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'url' => $payload['url'],
            'links' => $payload['links'],
        );
        
        $this->solution = array(
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Preview\Wireless\DeviceContext Context for this
     *                                                     DeviceInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new DeviceContext(
                $this->version,
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a DeviceInstance
     * 
     * @return DeviceInstance Fetched DeviceInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the DeviceInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return DeviceInstance Updated DeviceInstance
     */
    public function update($options = array()) {
        return $this->proxy()->update(
            $options
        );
    }

    /**
     * Access the usage
     * 
     * @return \Twilio\Rest\Preview\Wireless\Device\UsageList 
     */
    protected function getUsage() {
        return $this->proxy()->usage;
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Preview.Wireless.DeviceInstance ' . implode(' ', $context) . ']';
    }
}