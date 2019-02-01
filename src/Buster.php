<?php
/**
 * Buster plugin for Craft CMS 3.x
 *
 * A control panel utility to clear just the template-based caches
 *
 * @link      https://trendyminds.com
 * @copyright Copyright (c) 2019 TrendyMinds
 */

namespace trendyminds\buster;

use trendyminds\buster\services\BusterService as BusterServiceService;
use trendyminds\buster\models\Settings;
use trendyminds\buster\web\twig\variables\BusterVariable;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;

use yii\base\Event;

/**
 * Class Buster
 *
 * @author    TrendyMinds
 * @package   Buster
 * @since     1.0.0
 *
 * @property  BusterServiceService $busterService
 */
class Buster extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Buster
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'buster',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );

        $this->_registerVariables();
    }

    public function getPluginName()
    {
        return Craft::t('buster', $this->getSettings()->pluginName);
    }

    public function getCpNavItem()
    {
        $navItem = parent::getCpNavItem();
        $navItem['label'] = $this->getPluginName();

        return $navItem;
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'buster/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }

    private function _registerVariables()
    {
        Event::on(CraftVariable::class, CraftVariable::EVENT_INIT, function(Event $event) {
            $event->sender->set('buster', BusterVariable::class);
        });
    }
}
