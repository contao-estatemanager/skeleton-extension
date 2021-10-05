<?php

use ContaoEstateManager\SkeletonExtension\EstateManager\AddonManager;

// Register addon
$GLOBALS['TL_ESTATEMANAGER_ADDONS'][] = ['ContaoEstateManager\SkeletonExtension', 'AddonManager'];

// Remove the IF-statement if no license is required. In addition, the AddonManager class can also be removed.
if(AddonManager::valid())
{
    // Add backend modules and other stuff
}
