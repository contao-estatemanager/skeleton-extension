<?php

declare(strict_types=1);

namespace ContaoEstateManager\SkeletonExtension\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoEstateManager\SkeletonExtension\EstateManagerSkeletonExtension;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(EstateManagerSkeletonExtension::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['estatemanagerskeletonextension']),
        ];
    }
}
