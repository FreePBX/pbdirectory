<?php
//for translation only
if (false) {
_("Phonebook dial-by-name directory");
}

// Enable phonebook directory as a feature code
$fcc = new featurecode('pbdirectory', 'app-pbdirectory');
$fcc->setDescription('Phonebook dial-by-name directory');
$fcc->setDefault('411');
$fcc->update();
unset($fcc);

?>
