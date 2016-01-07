<?php

/**
 * @file
 * Contains \Drupal\media_entity\Annotation\MetadataStandard.
 */

namespace Drupal\metadata\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines an metadata standard plugin annotation object.
 *
 * @Annotation
 */
class MetadataStandard extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label or abbreviation of the metadata standard.
   *
   * Usually is the abbreviation (e.g. Exif).
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

  /**
   * The full name of the metadata standard.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation (optional)
   */
  public $name = '';

  /**
   * A brief description of the metadata standard.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation (optional)
   */
  public $description = '';

}
