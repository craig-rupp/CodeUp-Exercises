<?php

function parseContacts($filename)
{
    $contacts = [];
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    $person = explode("\n", trim($contents));
    foreach ($person as $contact) {
      $info = explode("|", $contact);
   	  // var_dump($person);
      $info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
      $eachContact = [
        'name' => $info[0],
        'number' => $info[1]
      ];
      $contacts[] = $eachContact;
    };
    return $contacts;
}
var_dump(parseContacts('contacts.txt'));

$array = ['this','quiz is','super sonic'];
echo $array;
