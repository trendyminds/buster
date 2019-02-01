<?php
/**
 * Buster plugin for Craft CMS 3.x
 *
 * A control panel utility to clear just the template-based caches
 *
 * @link      https://trendyminds.com
 * @copyright Copyright (c) 2019 TrendyMinds
 */

namespace trendyminds\buster\services;

use trendyminds\buster\Buster;

use Craft;
use craft\base\Component;

/**
 * @author    TrendyMinds
 * @package   Buster
 * @since     1.0.0
 */
class BusterService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Buster::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
