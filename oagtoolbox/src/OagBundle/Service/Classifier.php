<?php

namespace OagBundle\Service;

class Classifier extends OagAbstractService {

  public function processUri($sometext) {
    return $this->processString();
  }

  public function processString($sometext) {
    $uri = $this->getUri();

    $json = array(
      'success' => true,
      'duration' => 4.584875984758,
      'data' => array(
        array(
          'XM-DAC-1234-Project1' => array(
            'code' => 'c_541',
            'confidence' => 0.98738467746633,
            'decription' => 'apples'
          )
        )
      )
    );

    return $json;
  }

  public function getName() {
    return 'classifier';
  }

}
