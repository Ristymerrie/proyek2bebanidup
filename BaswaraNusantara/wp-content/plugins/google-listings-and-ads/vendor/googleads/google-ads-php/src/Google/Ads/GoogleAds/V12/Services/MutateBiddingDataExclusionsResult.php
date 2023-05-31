<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/bidding_data_exclusion_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the data exclusion mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.MutateBiddingDataExclusionsResult</code>
 */
class MutateBiddingDataExclusionsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated bidding data exclusion with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.BiddingDataExclusion bidding_data_exclusion = 2;</code>
     */
    protected $bidding_data_exclusion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V12\Resources\BiddingDataExclusion $bidding_data_exclusion
     *           The mutated bidding data exclusion with only mutable fields after mutate.
     *           The field will only be returned when response_content_type is set
     *           to "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\BiddingDataExclusionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated bidding data exclusion with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.BiddingDataExclusion bidding_data_exclusion = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\BiddingDataExclusion|null
     */
    public function getBiddingDataExclusion()
    {
        return $this->bidding_data_exclusion;
    }

    public function hasBiddingDataExclusion()
    {
        return isset($this->bidding_data_exclusion);
    }

    public function clearBiddingDataExclusion()
    {
        unset($this->bidding_data_exclusion);
    }

    /**
     * The mutated bidding data exclusion with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.BiddingDataExclusion bidding_data_exclusion = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\BiddingDataExclusion $var
     * @return $this
     */
    public function setBiddingDataExclusion($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\BiddingDataExclusion::class);
        $this->bidding_data_exclusion = $var;

        return $this;
    }

}

