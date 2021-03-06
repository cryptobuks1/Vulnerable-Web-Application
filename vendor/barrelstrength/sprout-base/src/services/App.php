<?php
/**
 * @link      https://sprout.barrelstrengthdesign.com/
 * @copyright Copyright (c) Barrel Strength Design LLC
 * @license   http://sprout.barrelstrengthdesign.com/license
 */

namespace barrelstrength\sproutbase\services;

use craft\base\Component;

class App extends Component
{
    /**
     * @var Settings
     */
    public $settings;

    /**
     * @var Utilities
     */
    public $utilities;

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Sprout Base
        $this->settings = new Settings();
        $this->utilities = new Utilities();
    }
}
