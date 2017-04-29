# whereclude.php

Remotely include trusted class files via SPL Autoload.

## Usage

    <?php
	require_ince("/path/class.whereclude.inc.php");
	spl_autoload_register(array(new whereclude(), "github"), false);
	
    // magic!
	$yourclass = new \your\class();

