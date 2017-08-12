<?php

//Email smtp settings
//$config['protocol'] 	= 'smtp';
//$config['smtp_host']	= 'smtp.mandrillapp.com';
//$config['smtp_user']	= 'mkelly@bishopenergy.com';
//$config['smtp_pass']	= 'duvnSqg2RDI6aZ2G3jmoww';
//$config['smtp_port']	= '587';

$config['protocol'] 	= 'sendmail';
$config['mailpath'] 	= '/usr/sbin/sendmail -t -i';
$config['charset'] 		= 'iso-8859-1';
$config['wordwrap'] 	= TRUE;
$config['mailtype'] 	= 'html';

