<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Wireless;

use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class DeviceList extends ListResource {
    /**
     * Construct the DeviceList
     * 
     * @param Version $version Version that contains the resource
     * @return \Twilio\Rest\Preview\Wireless\DeviceList 
     */
    public function __construct(Version $version) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array();
        
        $this->uri = '/Devices';
    }

    /**
     * Streams DeviceInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     * 
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return \Twilio\Stream stream of results
     */
    public function stream($options = array(), $limit = null, $pageSize = null) {
        $limits = $this->version->readLimits($limit, $pageSize);
        
        $page = $this->page($options, $limits['pageSize']);
        
        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads DeviceInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     * 
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return DeviceInstance[] Array of results
     */
    public function read($options = array(), $limit = null, $pageSize = Values::NONE) {
        return iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of DeviceInstance records from the API.
     * Request is executed immediately
     * 
     * @param array|Options $options Optional Arguments
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return \Twilio\Page Page of DeviceInstance
     */
    public function page($options = array(), $pageSize = Values::NONE, $pageToken = Values::NONE, $pageNumber = Values::NONE) {
        $options = new Values($options);
        $params = Values::of(array(
            'Status' => $options['status'],
            'SimIdentifier' => $options['simIdentifier'],
            'RatePlan' => $options['ratePlan'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ));
        
        $response = $this->version->page(
            'GET',
            $this->uri,
            $params
        );
        
        return new DevicePage($this->version, $response, $this->solution);
    }

    /**
     * Create a new DeviceInstance
     * 
     * @param string $ratePlan The rate_plan
     * @param array|Options $options Optional Arguments
     * @return DeviceInstance Newly created DeviceInstance
     */
    public function create($ratePlan, $options = array()) {
        $options = new Values($options);
        
        $data = Values::of(array(
            'RatePlan' => $ratePlan,
            'Alias' => $options['alias'],
            'CallbackMethod' => $options['callbackMethod'],
            'CallbackUrl' => $options['callbackUrl'],
            'FriendlyName' => $options['friendlyName'],
            'SimIdentifier' => $options['simIdentifier'],
            'Status' => $options['status'],
            'CommandsCallbackMethod' => $options['commandsCallbackMethod'],
            'CommandsCallbackUrl' => $options['commandsCallbackUrl'],
        ));
        
        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new DeviceInstance(
            $this->version,
            $payload
        );
    }

    /**
     * Constructs a DeviceContext
     * 
     * @param string $sid The sid
     * @return \Twilio\Rest\Preview\Wireless\DeviceContext 
     */
    public function getContext($sid) {
        return new DeviceContext(
            $this->version,
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Preview.Wireless.DeviceList]';
    }
}