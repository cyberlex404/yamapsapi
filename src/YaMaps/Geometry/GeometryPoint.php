<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 17.08.2017
 * Time: 21:39
 */

namespace Drupal\yamapsapi\YaMaps\Geometry;


class GeometryPoint extends GeometryBase implements GeometryBaseInterface {

  public function __construct($coordinates) {
    $this->type = 'Point';
    if ($coordinates) {
      $this->setCoordinates([(float)$coordinates[0], (float)$coordinates[1]]);
    }
  }

  public function setPoint($lat, $lon) {
    $this->setCoordinates([(float)$lat, (float)$lon]);
  }

  public function data() {
    return [
      'type' => $this->type,
      'coordinates' => $this->coordinates,
    ];
  }

}