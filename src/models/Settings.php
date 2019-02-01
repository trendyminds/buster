<?php
/**
 * Buster plugin for Craft CMS 3.x
 *
 * A control panel utility to clear just the template-based caches
 *
 * @link      https://trendyminds.com
 * @copyright Copyright (c) 2019 TrendyMinds
 */

namespace trendyminds\buster\models;

use trendyminds\buster\Buster;

use Craft;
use craft\base\Model;

/**
 * @author    TrendyMinds
 * @package   Buster
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $pluginName = 'Buster';
    public $authKey = '123456';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['pluginName', 'string'],
            ['pluginName', 'default', 'value' => 'Buster'],

            ['authKey', 'string'],
            ['authKey', 'default', 'value' => '123456'],
        ];
    }
}
