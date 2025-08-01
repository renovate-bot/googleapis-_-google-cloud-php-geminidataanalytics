<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/data_chat_service.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message produced during chart generation.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.ChartMessage</code>
 */
class ChartMessage extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\ChartQuery $query
     *           A query for generating a chart.
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\ChartResult $result
     *           The result of a chart generation query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\DataChatService::initOnce();
        parent::__construct($data);
    }

    /**
     * A query for generating a chart.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.ChartQuery query = 1;</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\ChartQuery|null
     */
    public function getQuery()
    {
        return $this->readOneof(1);
    }

    public function hasQuery()
    {
        return $this->hasOneof(1);
    }

    /**
     * A query for generating a chart.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.ChartQuery query = 1;</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\ChartQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\ChartQuery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The result of a chart generation query.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.ChartResult result = 2;</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\ChartResult|null
     */
    public function getResult()
    {
        return $this->readOneof(2);
    }

    public function hasResult()
    {
        return $this->hasOneof(2);
    }

    /**
     * The result of a chart generation query.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.ChartResult result = 2;</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\ChartResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\ChartResult::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

