<?php

namespace Ebay\Developer\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex types defines the resource (such as an API method) for which the
 * rate-limit data is returned. A method is included in an API, and an API is part
 * of an API context for the API version specified.
 */
class RateLimit extends AbstractModel
{
    /**
     * The context of the API for which rate-limit data is returned. For example buy,
     * sell, commerce, or developer.
     *
     * @var string
     */
    public $apiContext = null;

    /**
     * The name of the API for which rate-limit data is returned. For example browse
     * for the Buy API, inventory for the Sell API, or taxonomy for the Commerce API.
     *
     * @var string
     */
    public $apiName = null;

    /**
     * The version of the API for which rate-limit data is returned. For example v1 or
     * v2.
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * A list of the methods for which rate-limit data is returned. For example item
     * for the Feed API, getOrder for the Fulfillment API, and getProduct for the
     * Catalog API.
     *
     * @var \Ebay\Developer\Analytics\Model\Resource[]
     */
    public $resources = null;
}
