<?php
$meta['splashpage'] = array('onoff');
$meta['cert']	    = array( 'string' );
$meta['ca']	    = array( 'string' );
$meta['info']	    = array( 'string' );
$meta['actions'] = array('disableactions',
'_choices' => array('search','subscription','register','login','admin','resendpwd','profile','edit','wikicode','check'), 
'_combine' => array('subscription' => array('subscribe','unsubscribe'), 'wikicode' => array('source','export_raw')));




