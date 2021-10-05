<?php

namespace ContaoEstateManager\SkeletonExtension;

use Contao\Config;
use Contao\Environment;
use ContaoEstateManager\EstateManager;

class AddonManager
{
    /**
     * Bundle name
     * @var string
     */
    public static $bundle = 'EstateManagerSkeletonExtension';

    /**
     * Package
     * @var string
     */
    public static $package = 'contao-estatemanager/skeleton-extension';

    /**
     * Addon config key
     * @var string
     */
    public static $key  = 'addon_skeleton_extension_license';

    /**
     * Is initialized
     * @var boolean
     */
    public static $initialized  = false;

    /**
     * Is valid
     * @var boolean
     */
    public static $valid  = false;

    /**
     * Licenses
     * @var array
     */
    private static $licenses = [
        // MD5 License Keys
    ];

    public static function getLicenses()
    {
        return static::$licenses;
    }

    public static function valid()
    {
        if (false !== strpos(Environment::get('requestUri'), '/contao/install'))
        {
            return true;
        }

        if (false === static::$initialized)
        {
            static::$valid = EstateManager::checkLicenses(Config::get(static::$key), static::$licenses, static::$key);
            static::$initialized = true;
        }

        return static::$valid;
    }
}
