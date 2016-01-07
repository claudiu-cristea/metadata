<?php

/**
 * @file
 * Contains \Drupal\metadata\MetadataStandardBase.
 */

namespace Drupal\metadata;

use Drupal\Component\Plugin\PluginBase;

/**
 * Base implementation for metadata standard plugins.
 */
abstract class MetadataStandardBase extends PluginBase implements MetadataStandardInterface {

  /**
   * The label or abbreviation of the metadata standard.
   *
   * @var \Drupal\Component\Render\MarkupInterface|string
   */
  protected $label;

  /**
   * The full name of the metadata standard.
   *
   * @var \Drupal\Component\Render\MarkupInterface|string
   */
  protected $name = '';

  /**
   * The brief description of the metadata standard.
   *
   * @var \Drupal\Component\Render\MarkupInterface|string
   */
  protected $description = '';

  /**
   * {@inheritdoc}
   */
  public function getLabel() {
    return $this->label;
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->name;
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->description;
  }

}
