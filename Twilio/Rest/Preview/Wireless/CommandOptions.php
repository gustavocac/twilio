<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Wireless;

use Twilio\Options;
use Twilio\Values;

abstract class CommandOptions {
    /**
     * @param string $device The device
     * @param string $status The status
     * @param string $direction The direction
     * @return ReadCommandOptions Options builder
     */
    public static function read($device = Values::NONE, $status = Values::NONE, $direction = Values::NONE) {
        return new ReadCommandOptions($device, $status, $direction);
    }

    /**
     * @param string $callbackMethod The callback_method
     * @param string $callbackUrl The callback_url
     * @return CreateCommandOptions Options builder
     */
    public static function create($callbackMethod = Values::NONE, $callbackUrl = Values::NONE) {
        return new CreateCommandOptions($callbackMethod, $callbackUrl);
    }
}

class ReadCommandOptions extends Options {
    /**
     * @param string $device The device
     * @param string $status The status
     * @param string $direction The direction
     */
    public function __construct($device = Values::NONE, $status = Values::NONE, $direction = Values::NONE) {
        $this->options['device'] = $device;
        $this->options['status'] = $status;
        $this->options['direction'] = $direction;
    }

    /**
     * The device
     * 
     * @param string $device The device
     * @return $this Fluent Builder
     */
    public function setDevice($device) {
        $this->options['device'] = $device;
        return $this;
    }

    /**
     * The status
     * 
     * @param string $status The status
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The direction
     * 
     * @param string $direction The direction
     * @return $this Fluent Builder
     */
    public function setDirection($direction) {
        $this->options['direction'] = $direction;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.Wireless.ReadCommandOptions ' . implode(' ', $options) . ']';
    }
}

class CreateCommandOptions extends Options {
    /**
     * @param string $callbackMethod The callback_method
     * @param string $callbackUrl The callback_url
     */
    public function __construct($callbackMethod = Values::NONE, $callbackUrl = Values::NONE) {
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['callbackUrl'] = $callbackUrl;
    }

    /**
     * The callback_method
     * 
     * @param string $callbackMethod The callback_method
     * @return $this Fluent Builder
     */
    public function setCallbackMethod($callbackMethod) {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }

    /**
     * The callback_url
     * 
     * @param string $callbackUrl The callback_url
     * @return $this Fluent Builder
     */
    public function setCallbackUrl($callbackUrl) {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.Wireless.CreateCommandOptions ' . implode(' ', $options) . ']';
    }
}