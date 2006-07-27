<?php
 /* $Id:$ */

// returns a associative arrays with keys 'destination' and 'description'
function pbdirectory_destinations() {
	// return an associative array with destination and description
	$extens[] = array('destination' => 'app-pbdirectory,pbdirectory,1', 'description' => 'Phonebook Directory');
	return $extens;
}

function pbdirectory_get_config($engine) {
        $modulename = 'pbdirectory';

        // This generates the dialplan
        global $ext;
        switch($engine) {
			case "asterisk":
				$fcc = new featurecode('pbdirectory', 'app-pbdirectory');
				$code = $fcc->getCodeActive();
				unset($fcc);

				$ext->add('app-pbdirectory', $code, '', new ext_answer());
				$ext->add('app-pbdirectory', $code, '', new ext_wait(1));
				$ext->add('app-pbdirectory', $code, '', new ext_goto(1,'pbdirectory'));
				
				$ext->add('app-pbdirectory', 'pbdirectory', '', new ext_agi('pbdirectory'));

				$ext->addInclude('from-internal-additional', 'app-pbdirectory');
				
			break;
        }
}

?>
