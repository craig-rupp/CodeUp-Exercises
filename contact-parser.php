<?php

function parseContacts($filename)
{
    $contacts = [];
    $thisFilename = "{$filename}";
    $handle = fopen($thisFilename, 'r');
    $contents = fread($handle, filesize($thisFilename));
    $person = explode("\n", trim($contents));
    foreach ($person as $contact) {
      $info = explode("|", $contact);
      $eachContact = [
        'name' => $info[0],
        'number' => $info[1]
      ];
      $contacts[] = $eachContact;
    };
    fclose($handle);
    return $contacts;
}
var_dump(parseContacts('contacts.txt'));
