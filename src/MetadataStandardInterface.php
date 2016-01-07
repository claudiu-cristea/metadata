<?php

/**
 * @file
 * Contains \Drupal\metadata\MetadataStandardInterface.
 */

namespace Drupal\metadata;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Component\Render\MarkupInterface;

interface MetadataStandardInterface extends PluginInspectionInterface {

  /**
   * Returns the translated label of the metadata standard.
   *
   * @return \Drupal\Component\Render\MarkupInterface|string
   *   The label or abbreviation of the metadata standard.
   */
  public function getLabel();

  /**
   * Returns the translated full name of the metadata standard.
   *
   * @return \Drupal\Component\Render\MarkupInterface|string
   *   The full name of the metadata standard.
   */
  public function getName();

  /**
   * Returns the translated description of the metadata standard.
   *
   * @return \Drupal\Component\Render\MarkupInterface|string
   *   The description of the metadata standard.
   */
  public function getDescription();

}
