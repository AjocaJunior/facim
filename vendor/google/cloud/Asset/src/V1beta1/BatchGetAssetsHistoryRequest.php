<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1beta1/asset_service.proto

namespace Google\Cloud\Asset\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Batch get assets history request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1beta1.BatchGetAssetsHistoryRequest</code>
 */
class BatchGetAssetsHistoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative name of the root asset. It can only be an
     * organization number (such as "organizations/123"), a project ID (such as
     * "projects/my-project-id")", or a project number (such as "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * A list of the full names of the assets. For example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * See [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more info.
     * The request becomes a no-op if the asset name list is empty, and the max
     * size of the asset name list is 100 in one request.
     *
     * Generated from protobuf field <code>repeated string asset_names = 2;</code>
     */
    private $asset_names;
    /**
     * Optional. The content type.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.ContentType content_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $content_type = 0;
    /**
     * Optional. The time window for the asset history. Both start_time and
     * end_time are optional and if set, it must be after 2018-10-02 UTC. If
     * end_time is not set, it is default to current timestamp. If start_time is
     * not set, the snapshot of the assets at end_time will be returned. The
     * returned results contain all temporal assets whose time window overlap with
     * read_time_window.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.TimeWindow read_time_window = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_time_window = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The relative name of the root asset. It can only be an
     *           organization number (such as "organizations/123"), a project ID (such as
     *           "projects/my-project-id")", or a project number (such as "projects/12345").
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $asset_names
     *           A list of the full names of the assets. For example:
     *           `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     *           See [Resource
     *           Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     *           for more info.
     *           The request becomes a no-op if the asset name list is empty, and the max
     *           size of the asset name list is 100 in one request.
     *     @type int $content_type
     *           Optional. The content type.
     *     @type \Google\Cloud\Asset\V1beta1\TimeWindow $read_time_window
     *           Optional. The time window for the asset history. Both start_time and
     *           end_time are optional and if set, it must be after 2018-10-02 UTC. If
     *           end_time is not set, it is default to current timestamp. If start_time is
     *           not set, the snapshot of the assets at end_time will be returned. The
     *           returned results contain all temporal assets whose time window overlap with
     *           read_time_window.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative name of the root asset. It can only be an
     * organization number (such as "organizations/123"), a project ID (such as
     * "projects/my-project-id")", or a project number (such as "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The relative name of the root asset. It can only be an
     * organization number (such as "organizations/123"), a project ID (such as
     * "projects/my-project-id")", or a project number (such as "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * A list of the full names of the assets. For example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * See [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more info.
     * The request becomes a no-op if the asset name list is empty, and the max
     * size of the asset name list is 100 in one request.
     *
     * Generated from protobuf field <code>repeated string asset_names = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetNames()
    {
        return $this->asset_names;
    }

    /**
     * A list of the full names of the assets. For example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * See [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more info.
     * The request becomes a no-op if the asset name list is empty, and the max
     * size of the asset name list is 100 in one request.
     *
     * Generated from protobuf field <code>repeated string asset_names = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_names = $arr;

        return $this;
    }

    /**
     * Optional. The content type.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.ContentType content_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Optional. The content type.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.ContentType content_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Asset\V1beta1\ContentType::class);
        $this->content_type = $var;

        return $this;
    }

    /**
     * Optional. The time window for the asset history. Both start_time and
     * end_time are optional and if set, it must be after 2018-10-02 UTC. If
     * end_time is not set, it is default to current timestamp. If start_time is
     * not set, the snapshot of the assets at end_time will be returned. The
     * returned results contain all temporal assets whose time window overlap with
     * read_time_window.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.TimeWindow read_time_window = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1beta1\TimeWindow
     */
    public function getReadTimeWindow()
    {
        return $this->read_time_window;
    }

    /**
     * Optional. The time window for the asset history. Both start_time and
     * end_time are optional and if set, it must be after 2018-10-02 UTC. If
     * end_time is not set, it is default to current timestamp. If start_time is
     * not set, the snapshot of the assets at end_time will be returned. The
     * returned results contain all temporal assets whose time window overlap with
     * read_time_window.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.TimeWindow read_time_window = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1beta1\TimeWindow $var
     * @return $this
     */
    public function setReadTimeWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1beta1\TimeWindow::class);
        $this->read_time_window = $var;

        return $this;
    }

}

