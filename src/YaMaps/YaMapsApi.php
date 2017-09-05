<?php

namespace Drupal\yamapsapi\YaMaps;

use Drupal\Component\Serialization\Json;
use Drupal\yamapsapi\YaMaps\GeoObject;


class YaMapsApi {

  /**
   * @var array
   */
  protected $features;

  /**
   * @return array
   */
  public function features() {
    return $this->features;
  }

  public function getFeatures() {
    $featureCollection = new \stdClass();
    $featureCollection->features = [];
  }

  public function addFeature($feature) {
    $this->features[] = $feature;
  }

  public function getFeaturesJson() {
    return Json::encode($this->features);
  }

  public function featureCollection() {
    $collection = new FeatureCollection();
    foreach ($this->features() as $feature) {
      $collection->addFeature($feature);
    }


  }

}