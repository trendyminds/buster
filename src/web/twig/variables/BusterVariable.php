<?php
/**
 * Buster plugin for Craft CMS 3.x
 *
 * A control panel utility to clear just the template-based caches
 *
 * @link      https://trendyminds.com
 * @copyright Copyright (c) 2019 TrendyMinds
 */

namespace trendyminds\buster\web\twig\variables;

use trendyminds\buster\Buster;

use Craft;

/**
 * @author    TrendyMinds
 * @package   Buster
 * @since     1.0.0
 */
class BusterVariable
{
    public function pluginName()
    {
        return Buster::$plugin->getPluginName();
    }

    public function authKey()
    {
        return Buster::$plugin->getSettings()->authKey;
    }
}
