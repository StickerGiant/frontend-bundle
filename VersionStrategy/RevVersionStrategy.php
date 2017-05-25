<?php

namespace Rj\FrontendBundle\VersionStrategy;

use Rj\FrontendBundle\VersionStrategy\VersionStrategyInterface;

class RevVersionStrategy implements VersionStrategyInterface {
  private $rev_version;

  public function __construct()
  {
    $file = 'assets/rev-version.json';

    if (file_exists($file)) {
      $this->rev_version = json_decode(file_get_contents($file));
    }
  }

  public function getVersion($path)
  {
    return '';
  }

  public function applyVersion($path)
  {

    return $path . ($this->rev_version ? '?v=' . $this->rev_version->hash : '');
  }
}