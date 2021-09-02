<?php

namespace Ebay\Developer\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines a &quot;rate&quot; as the quota of calls that can be
 * made to a resource per time window, the remaining number of calls before the
 * threshold is met, the amount of time until the time window resets, and the
 * length of the time window (in seconds).
 */
class Rate extends AbstractModel
{
    /**
     * The maximum number of requests that can be made to this resource during a set
     * time period. The length of time to which the limit is applied is defined by the
     * associated timeWindow value. This value is often referred to as the &quot;call
     * quota&quot; for the resource.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The remaining number of requests that can be made to this resource before the
     * associated time window resets.
     *
     * @var int
     */
    public $remaining = null;

    /**
     * The data and time the time window and accumulated calls for this resource reset.
     * When the reset time is reached, the remaining value is reset to the value of
     * limit, and this reset value is reset to the current time plus the number of
     * seconds defined by the timeWindow value. The time stamp is formatted as an ISO
     * 8601 string, which is based on the 24-hour Universal Coordinated Time (UTC)
     * clock. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-04T07:09:00.000Z.
     *
     * @var string
     */
    public $reset = null;

    /**
     * A period of time, expressed in seconds. The call quota for a resource is applied
     * to the period of time defined by the value of this field.
     *
     * @var int
     */
    public $timeWindow = null;
}
