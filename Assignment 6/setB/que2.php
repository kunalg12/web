<?php
  $dom = new DOMDocument('1.0','UTF-8');
  $dom->formatOutput = true;

  $root = $dom->createElement('ABCCollege');
  $dom->appendChild($root);

  $result = $dom->createElement('ComputerApplicationDepartment');
  $root->appendChild($result);


  $result->appendChild( $dom->createElement('Course', 'BCA(Science)') );
  $result->appendChild( $dom->createElement('Student Strength', '80') );
  $result->appendChild( $dom->createElement('Number of Teachers', '12
  ') );

  echo '<xmp>'. $dom->saveXML() .'</xmp>';
  $dom->save('result.xml') or die('XML Create Error');
?>