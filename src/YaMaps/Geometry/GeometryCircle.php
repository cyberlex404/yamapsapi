<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 18.08.2017
 * Time: 4:23
 */

namespace Drupal\yamapsapi\YaMaps\Geometry;


class GeometryCircle extends GeometryBase implements GeometryBaseInterface {

  protected $radius;

  public function __construct($coordinates, $radius = NULL) {
    $this->type = 'Circle';
    $this->radius = $radius;
  }


}