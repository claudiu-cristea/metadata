<?php

/**
 * @file
 * Contains \Drupal\metadata\MetadataStandardsManager.
 */

namespace Drupal\metadata;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\metadata\Annotation\MetadataStandard;

/**
 * Manages metadata standards plugins.
 */
class MetadataStandardsManager extends DefaultPluginManager {

  /**
   * Constructs a new MetadataStandardsManager.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/Metadata/Standard', $namespaces, $module_handler, MetadataStandardInterface::class, MetadataStandard::class);

    $this->alterInfo('metadata_standards');
    $this->setCacheBackend($cache_backend, 'metadata_standards');
  }

}
