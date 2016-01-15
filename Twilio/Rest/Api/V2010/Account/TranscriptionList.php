<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class TranscriptionList extends ListResource {
    /**
     * Construct the TranscriptionList
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique sid that identifies this account
     * @return TranscriptionList 
     */
    public function __construct(Version $version, $accountSid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
        );
        
        $this->uri = '/Accounts/' . $accountSid . '/Transcriptions.json';
    }

    /**
     * Constructs a TranscriptionContext
     * 
     * @param string $sid Fetch by unique transcription Sid
     * @return TranscriptionContext 
     */
    public function getContext($sid) {
        return new TranscriptionContext(
            $this->version,
            $this->solution['accountSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.TranscriptionList]';
    }
}