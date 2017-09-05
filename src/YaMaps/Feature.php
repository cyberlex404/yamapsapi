<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 18.08.2017
 * Time: 3:17
 */

namespace Drupal\yamapsapi\YaMaps;


use Drupal\Component\Serialization\Json;
use Drupal\yamapsapi\Entity\GeometryInterface;

class Feature {
  public $type = 'Feature';
  public $id = 0;

  /**
   * @var \Drupal\yamapsapi\YaMaps\Geometry\GeometryBaseInterface
   */
  public $geometry;

  /**
   * @var array
   */
  public $properties;
  public $options;

  public function __construct(GeometryInterface $geoObject) {
    $this->geometry = $geoObject->getGeometry();
    $this->properties = $geoObject->properties();
  }

  public function data() {
    $data = [
      'type' => $this->type,
      'id' => $this->id,
      'geometry' => (array)$this->geometry->data(),
      'properties' => $this->properties,
    ];
    return $data;
  }
  public function json(){
    return Json::encode($this->data());
  }

}