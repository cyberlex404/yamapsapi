<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 17.08.2017
 * Time: 22:03
 */

namespace Drupal\yamapsapi\YaMaps\Geometry;


interface GeometryBaseInterface {

  public function getData();

  public function getJSON();

  public function data();
}