<?php

namespace Ebay\Developer\Analytics;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getRateLimits' => [
            '200.' => 'Ebay\\Developer\\Analytics\\Model\\RateLimitsResponse',
            '500.' => null,
        ],
        'getUserRateLimits' => [
            '200.' => 'Ebay\\Developer\\Analytics\\Model\\RateLimitsResponse',
            '500.' => null,
        ],
    ];
}
