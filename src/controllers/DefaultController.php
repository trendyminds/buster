<?php
/**
 * Buster plugin for Craft CMS 3.x
 *
 * A control panel utility to clear just the template-based caches
 *
 * @link      https://trendyminds.com
 * @copyright Copyright (c) 2019 TrendyMinds
 */

namespace trendyminds\buster\controllers;

use trendyminds\buster\Buster;

use Craft;
use craft\web\Controller;
use yii\base\Exception;

/**
 * @author    TrendyMinds
 * @package   Buster
 * @since     1.0.0
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['clear-cache'];

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionClearCache()
    {
        if (Craft::$app->request->getParam("key") !== Buster::$plugin->getSettings()->authKey)
        {
            throw new Exception("Your key is unauthorized or incorrect.");
        }

        Craft::$app->getTemplateCaches()->deleteAllCaches();

        die("The cache was cleared successfully!");
    }
}
