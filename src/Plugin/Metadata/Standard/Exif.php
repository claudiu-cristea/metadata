<?php

/**
 * @file
 * Contains \Drupal\metadata\Plugin\Metadata\Standard\Exif.
 */

namespace Drupal\metadata\Plugin\Metadata\Standard;

use Drupal\metadata\MetadataStandardBase;

/**
 * Defines the Exif metadata standard.
 *
 * @see https://en.wikipedia.org/wiki/Exchangeable_image_file_format
 *
 * @MetadataStandard(
 *   id = "exif",
 *   label = @Translation("Exif"),
 *   name = @Translation("Exchangeable image file format"),
 *   description = @Translation("A standard that specifies the formats for images, sound, and ancillary tags used by digital cameras (including smartphones), scanners and other systems handling image and sound files recorded by digital cameras.")
 * )
 */
class Exif extends MetadataStandardBase {

}
