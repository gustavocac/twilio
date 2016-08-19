<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Notify\V1\Service;

use Twilio\Options;
use Twilio\Values;

abstract class NotificationOptions {
    /**
     * @param string $identity The identity
     * @param string $tag The tag
     * @param string $body The body
     * @param string $priority The priority
     * @param string $ttl The ttl
     * @param string $title The title
     * @param string $sound The sound
     * @param string $action The action
     * @param string $data The data
     * @param string $apn The apn
     * @param string $gcm The gcm
     * @param string $sms The sms
     * @param string $facebookMessenger The facebook_messenger
     * @return CreateNotificationOptions Options builder
     */
    public static function create($identity = Values::NONE, $tag = Values::NONE, $body = Values::NONE, $priority = Values::NONE, $ttl = Values::NONE, $title = Values::NONE, $sound = Values::NONE, $action = Values::NONE, $data = Values::NONE, $apn = Values::NONE, $gcm = Values::NONE, $sms = Values::NONE, $facebookMessenger = Values::NONE) {
        return new CreateNotificationOptions($identity, $tag, $body, $priority, $ttl, $title, $sound, $action, $data, $apn, $gcm, $sms, $facebookMessenger);
    }
}

class CreateNotificationOptions extends Options {
    /**
     * @param string $identity The identity
     * @param string $tag The tag
     * @param string $body The body
     * @param string $priority The priority
     * @param string $ttl The ttl
     * @param string $title The title
     * @param string $sound The sound
     * @param string $action The action
     * @param string $data The data
     * @param string $apn The apn
     * @param string $gcm The gcm
     * @param string $sms The sms
     * @param string $facebookMessenger The facebook_messenger
     */
    public function __construct($identity = Values::NONE, $tag = Values::NONE, $body = Values::NONE, $priority = Values::NONE, $ttl = Values::NONE, $title = Values::NONE, $sound = Values::NONE, $action = Values::NONE, $data = Values::NONE, $apn = Values::NONE, $gcm = Values::NONE, $sms = Values::NONE, $facebookMessenger = Values::NONE) {
        $this->options['identity'] = $identity;
        $this->options['tag'] = $tag;
        $this->options['body'] = $body;
        $this->options['priority'] = $priority;
        $this->options['ttl'] = $ttl;
        $this->options['title'] = $title;
        $this->options['sound'] = $sound;
        $this->options['action'] = $action;
        $this->options['data'] = $data;
        $this->options['apn'] = $apn;
        $this->options['gcm'] = $gcm;
        $this->options['sms'] = $sms;
        $this->options['facebookMessenger'] = $facebookMessenger;
    }

    /**
     * The identity
     * 
     * @param string $identity The identity
     * @return $this Fluent Builder
     */
    public function setIdentity($identity) {
        $this->options['identity'] = $identity;
        return $this;
    }

    /**
     * The tag
     * 
     * @param string $tag The tag
     * @return $this Fluent Builder
     */
    public function setTag($tag) {
        $this->options['tag'] = $tag;
        return $this;
    }

    /**
     * The body
     * 
     * @param string $body The body
     * @return $this Fluent Builder
     */
    public function setBody($body) {
        $this->options['body'] = $body;
        return $this;
    }

    /**
     * The priority
     * 
     * @param string $priority The priority
     * @return $this Fluent Builder
     */
    public function setPriority($priority) {
        $this->options['priority'] = $priority;
        return $this;
    }

    /**
     * The ttl
     * 
     * @param string $ttl The ttl
     * @return $this Fluent Builder
     */
    public function setTtl($ttl) {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * The title
     * 
     * @param string $title The title
     * @return $this Fluent Builder
     */
    public function setTitle($title) {
        $this->options['title'] = $title;
        return $this;
    }

    /**
     * The sound
     * 
     * @param string $sound The sound
     * @return $this Fluent Builder
     */
    public function setSound($sound) {
        $this->options['sound'] = $sound;
        return $this;
    }

    /**
     * The action
     * 
     * @param string $action The action
     * @return $this Fluent Builder
     */
    public function setAction($action) {
        $this->options['action'] = $action;
        return $this;
    }

    /**
     * The data
     * 
     * @param string $data The data
     * @return $this Fluent Builder
     */
    public function setData($data) {
        $this->options['data'] = $data;
        return $this;
    }

    /**
     * The apn
     * 
     * @param string $apn The apn
     * @return $this Fluent Builder
     */
    public function setApn($apn) {
        $this->options['apn'] = $apn;
        return $this;
    }

    /**
     * The gcm
     * 
     * @param string $gcm The gcm
     * @return $this Fluent Builder
     */
    public function setGcm($gcm) {
        $this->options['gcm'] = $gcm;
        return $this;
    }

    /**
     * The sms
     * 
     * @param string $sms The sms
     * @return $this Fluent Builder
     */
    public function setSms($sms) {
        $this->options['sms'] = $sms;
        return $this;
    }

    /**
     * The facebook_messenger
     * 
     * @param string $facebookMessenger The facebook_messenger
     * @return $this Fluent Builder
     */
    public function setFacebookMessenger($facebookMessenger) {
        $this->options['facebookMessenger'] = $facebookMessenger;
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
        return '[Twilio.Notify.V1.CreateNotificationOptions ' . implode(' ', $options) . ']';
    }
}