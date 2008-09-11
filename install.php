<?php

// Enable phonebook directory as a feature code
$phonebookdbnd = _("Phonebook dial-by-name directory");
$fcc = new featurecode('pbdirectory', 'app-pbdirectory');
$fcc->setDescription($phonebookdbnd);
$fcc->setDefault('411');
$fcc->update();
unset($fcc);

?>
