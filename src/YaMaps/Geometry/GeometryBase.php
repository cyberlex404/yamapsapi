<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 17.08.2017
 * Time: 21:35
 */

namespace Drupal\yamapsapi\YaMaps\Geometry;


use Drupal\Component\Serialization\Json;

abstract class GeometryBase implements GeometryBaseInterface{

  /**
   * @var array
   */
  public $coordinates;

  /**
   * @var string
   */
  public $type;

  /**
   * @var object
   */
 // public $options;

  abstract function __construct($coordinates);

  public function getData() {
    $data = [
      'type' => $this->type,
      'coordinates' => $this->coordinates,
    ];
    return $data;
  }

  public function getJSON() {
    return Json::encode($this->getData());
  }

  public function setCoordinates(array $coordinates) {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }

}