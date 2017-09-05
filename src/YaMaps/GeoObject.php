<?php

namespace Drupal\yamapsapi\YaMaps;

use Drupal\yamapsapi\YaMaps\Geometry\GeometryBaseInterface;

class GeoObject implements GeoObjectInterface{

  /**
   * @var \Drupal\yamapsapi\YaMaps\Geometry\GeometryBaseInterface
   */
  protected $geometry;
  protected $properties;
  protected $options;


  public function __construct(GeometryBaseInterface $geometry) {
    $this->geometry = $geometry;
  }

  /**
   * {@inheritdoc}
   */
  public function setGeometry(GeometryBaseInterface $geometry) {
    $this->geometry = $geometry;
  }


}