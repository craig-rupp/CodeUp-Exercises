<?php

//Function to Add Contact
function addContact($newContact) {
  $filename = 'more_contacts.txt';
  $handle = fopen($filename, 'a');
  fwrite($handle, $newContact . PHP_EOL);
  fclose($handle);
}
//Function to Open File "Read" (Associative Array)
function parseContacts($filename) {
	$contacts = [];
	$thisFilename = "{$filename}";
	$handle = fopen($thisFilename, 'r');
	$contents = trim(fread($handle, filesize($thisFilename)));
	$list = explode("\n", $contents);
	foreach ($list as $contact) {
	  $info = explode("|", $contact);
	  $indContact = [
		'name' => $info[0],
		'number' => $info[1]
	  ];
	  $contacts[] = $indContact;
	};
	fclose($handle);
	return $contacts;
}
//Search Contact by Name
function searchContact($name, $allContacts){
	 foreach ($allContacts as $contact => $value) {
		if($value['name'] === $name){
			var_dump($name, $value);
		}
	 }
	  
}
//Search Contact by Name and Remove Contact, Push new generated array into file
function deleteContact($deleteName, $allContacts){
	$filename = 'more_contacts.txt';
	foreach ($allContacts as $contact => $value) {
		if($value['name'] === $deleteName){
			// var_dump($deleteName, $value);
			unset($allContacts[$contact]);
			$newContacts = [];
			foreach ($allContacts as $contact) {
				$newContacts[] = implode("|", $contact);
			}
			$contactsString = implode("\n", $newContacts);
			$handle = fopen($filename, 'w');
			fwrite($handle, $contactsString);
			fclose($handle);
			fwrite(STDOUT, "Record deleted.\n");
		}
	}
}

//look for Max string length on name

function nameLength($allContacts){
$maxName = -1;
	foreach ($allContacts as $contact) {
		$amount = strlen($contact['name']);
		$maxName = max($maxName, $amount);
	}
}
//look for Max length on number
function phoneNumberLength($allContacts){
$maxNumber = -1;
	foreach ($allContacts as $contact) {
		$phoneAmount = strlen($contact['number']);
		$maxNumber = max($maxNumber, $phoneAmount);
	}
}
function displayContacts($allContacts) {
  $padName = nameLength($allContacts) + 1;
  $padNumber = phoneNumberLength($allContacts);
  $all = $padName + $padNumber + 5;
  echo str_pad("Name", $padName, " ", STR_PAD_BOTH) . "| " . str_pad("Phone Number", $padNumber, " ", STR_PAD_BOTH) . " |", PHP_EOL;
  echo str_pad("_", $all, "_", STR_PAD_BOTH), PHP_EOL;
  foreach ($allContacts as $contact) {
    echo str_pad($contact['name'], $padName) . "| " . str_pad($contact['number'], $padNumber) . " |", PHP_EOL;
  }
}

do {
	echo 'Main Menu' . PHP_EOL;
	echo '1. View contacts.', PHP_EOL;
	echo '2. Add a new contact.', PHP_EOL;
	echo '3. Search a contact by name.', PHP_EOL;
	echo '4. Delete an existing contact.', PHP_EOL;
	echo '5. Exit.', PHP_EOL;
	$allContacts = parseContacts('more_contacts.txt');
	$selection = trim(fgets(STDIN));
	switch ((int)$selection) {
		case 1:
			echo displayContacts($allContacts);
			break;
		case 2:
			echo 'Please enter a name: ';
			$newContactName = trim(fgets(STDIN));
			echo "Please enter {$newContactName}'s number: ";
			$newContactNumber = trim(fgets(STDIN));
			$newContact = "{$newContactName}|{$newContactNumber}\n";
			addContact($newContact);
			break;
		case 3:
			echo 'Please enter a name: ';
			$name = trim(fgets(STDIN));
			$nameGathered = searchContact($name, $allContacts);
			break;
		case 4:
			echo 'Please enter a name you would like to delete: ';
			$deleteName = trim(fgets(STDIN));
			$deleteNow = deleteContact($deleteName, $allContacts);
			break;
		  }
} while ($selection != 5);