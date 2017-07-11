<?php

namespace OagBundle\Service;

class Geocoder extends OagAbstractService {

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
          'location' => array(
            'lat' => 52.6309,
            'lng' => 1.2974,
          ),
        ),
      ),
    );

    return $json;
  }

  public function getName() {
    return 'geocoder';
  }

}
