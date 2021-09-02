<?php

namespace Ebay\Developer\Analytics\Api;

use Ebay\Developer\Analytics\Model\RateLimitsResponse as RateLimitsResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class UserRateLimit extends AbstractAPI
{
    /**
     * This method retrieves the call limit and utilization data for an application
     * user. The call-limit data is returned for all RESTful APIs and resources that
     * limit calls on a per-user basis. The response from getUserRateLimits includes a
     * list of the applicable resources and the &quot;call limit&quot;, or quota, that
     * is set for each resource. In addition to quota information, the response also
     * includes the number of remaining calls available before the limit is reached,
     * the time remaining before the quota resets, and the length of the &quot;time
     * window&quot; to which the quota applies. By default, this method returns
     * utilization data for all RESTful API resources that limit request access by
     * user. Use the api_name and api_context query parameters to filter the response
     * to only the desired APIs. For more on call limits, see Compatible Application
     * Check.
     *
     * @param array $queries options:
     *                       'api_context'	string	This optional query parameter filters the result to include
     *                       only the specified API context. Acceptable values for the parameter are buy,
     *                       sell, commerce, and developer.
     *                       'api_name'	string	This optional query parameter filters the result to include
     *                       only the APIs specified. Example values are browse for the Buy APIs context,
     *                       inventory for the Sell APIs context, and taxonomy for the Commerce APIs context.
     *
     * @return RateLimitsResponse|object
     */
    public function gets(array $queries = [])
    {
        return $this->client->request('getUserRateLimits', 'GET', 'user_rate_limit/',
            [
                'query' => $queries,
            ]
        );
    }
}
