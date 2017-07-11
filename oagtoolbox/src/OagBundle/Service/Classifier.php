<?php

namespace OagBundle\Service;

class Classifier extends OagAbstractService {

  public function autocodeUri($sometext) {
    return $this->autocodeText();
  }

  public function autocodeXml($sometext) {
    return $this->autocodeText();
  }

  public function autocodeText($sometext) {
    $uri = $this->getUri();

    $json = array(
      'matches' => array(
        array(
          'key' => 'FARM_ANIMAL_GENERIC_1',
          'description' => 'Beef cattle',
          'weight' => 0.9598696899,
        ),
        array(
          'key' => 'FARM_ANIMAL_GENERIC_2',
          'description' => 'Dairy cattle',
          'weight' => 0.3784748574,
        ),
      ),
    );

    return $json;
  }

  public function getName() {
    return 'classifier';
  }

}
