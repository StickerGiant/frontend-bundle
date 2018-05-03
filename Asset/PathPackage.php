<?php

namespace Rj\FrontendBundle\Asset;

use Rj\FrontendBundle\VersionStrategy\VersionStrategyInterface;
use \Symfony\Component\Asset\PathPackage as BasePathPackage;

class PathPackage extends BasePathPackage
{
    public function __construct($basePath, VersionStrategyInterface $versionStrategy)
    {
        parent::__construct($basePath, $versionStrategy);
    }
}
