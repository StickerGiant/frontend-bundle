<?php
namespace Rj\FrontendBundle\VersionStrategy;

use Symfony\Component\Asset\VersionStrategy\VersionStrategyInterface as BaseVersionStrategyInterface;

interface VersionStrategyInterface extends BaseVersionStrategyInterface
{
    public function getVersion($path);
    public function applyVersion($path);
}
