<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 18.08.2017
 * Time: 4:51
 */

namespace Drupal\yamapsapi\YaMaps;


use Drupal\Component\Serialization\Json;

class FeatureCollection {
  public $type = 'FeatureCollection';

  /**
   * @var \Drupal\yamapsapi\YaMaps\Feature[]
   */
  public $features;

  public function addFeature(Feature $feature) {
    $id = count($this->features)+1;
    $feature->id = $id;
    $this->features[$id] = $feature;
  }

  public function removeFeature($id) {
    unset($this->features[$id]);
  }

  public function json() {
    $data = [
      'type' => $this->type,
      'features' => [],
    ];
    foreach ($this->features as $feature) {
      $data['features'][] = $feature->data();
    }

    return Json::encode($data);
  }
}