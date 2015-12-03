<?php

class EIExamples {

  private static function expand_exset_ids($exset_id) {
   if ( gettype( $exset_id ) == "array" ) {
      $exset_ids = $exset_id;
    } else if ( $exset_id == "_ei_all" ) {
      $exset_ids = EIConfig::get_exsetIds();
    } else {
      $exset_ids =  array( $exset_id );
    }

   return $exset_ids;
  }


  static function get_exset_details( $exset_id ) {
    $exset_ids = EIExamples::expand_exset_ids($exset_id);
    $out = '<examples>';
    foreach ($exset_ids as $id ) {
      $exset = EIConfig::get_exsetXML( $id );
      $out .= $exset->asXML();
    }
    $out .= '</examples>';

    return $out;
  }
  
}

?>
