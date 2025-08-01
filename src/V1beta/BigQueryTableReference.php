<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/datasource.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message representing a reference to a single BigQuery table.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.BigQueryTableReference</code>
 */
class BigQueryTableReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project the table belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project_id = '';
    /**
     * Required. The dataset the table belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset_id = '';
    /**
     * Required. The table id.
     *
     * Generated from protobuf field <code>string table_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The project the table belongs to.
     *     @type string $dataset_id
     *           Required. The dataset the table belongs to.
     *     @type string $table_id
     *           Required. The table id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\Datasource::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project the table belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The project the table belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The dataset the table belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Required. The dataset the table belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * Required. The table id.
     *
     * Generated from protobuf field <code>string table_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * Required. The table id.
     *
     * Generated from protobuf field <code>string table_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;

        return $this;
    }

}

