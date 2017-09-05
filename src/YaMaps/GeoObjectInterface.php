<?php

namespace Drupal\yamapsapi\YaMaps;


use Drupal\yamapsapi\YaMaps\Geometry\GeometryBaseInterface;

interface GeoObjectInterface {

  /**
   * @param $geometry
   * @return mixed
   */
  public function setGeometry(GeometryBaseInterface $geometry);
}