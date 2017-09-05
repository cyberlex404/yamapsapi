<?php

namespace Drupal\yamapsapi\YaMaps;


class GeometryProperties {

  /**
   * iconContent - содержимое иконки геообъекта;
   *
   * @var string
   */
  public $iconContent;

  /**
   * iconCaption — подпись иконки геообъекта;
   *
   * @var string
   */
  public $iconCaption;

  /**
   * hintContent - содержимое всплывающей подсказки геообъекта;
   *
   * @var string
   */
  public $hintContent;

  /**
   * balloonContent - содержимое балуна геообъекта;
   * @var string
   */
  public $balloonContent;

  /**
   * $balloonContentHeader - содержимое заголовка балуна геообъекта;
   *
   * @var string
   */
  public $balloonContentHeader;

  /**
   * $balloonContentBody - содержимое основой части балуна геообъекта;
   *
   * @var string
   */
  public $balloonContentBody;

  /**
   * $balloonContentFooter - содержимое подвала балуна
   *
   * @var string
   */
  public $balloonContentFooter;

  public function setProperty(string $property, $value) {
    if (property_exists($this, $property) ) {
      $this->$property = $value;
    }
    return $this->$property;
  }

  public function getProperty(string $property) {
    if (property_exists($this, $property) ) {
      return $this->$property;
    }else{
      return NULL;
    }

  }

}