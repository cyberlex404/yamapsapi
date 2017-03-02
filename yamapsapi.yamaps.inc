<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 11.10.2016
 * Time: 18:31
 */

use Drupal\Core\Template\Attribute;

function template_preprocess_yamaps(&$variables)  {
 // dpm($variables, 'template_preprocess_yamaps');
  $variables['attributes'] = new Attribute(['id' => $variables['mapid']]);

  // ['drupalSettings']['fluffiness']['cuddlySlider']['foo'] = 'bar';
  $variables['#attached']['drupalSettings']['yamapsapi'] = [
    'Map' => [
      'id' => $variables['mapid'],
      'map_objects' => $variables['map_objects'],
    ],
  ];
  $variables['#attached']['library'] = ['brasmsq_maps/trackmap'];
  //dpm($variables, 'template_preprocess_yamaps');
}