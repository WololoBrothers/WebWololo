<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mgClient = new Mailgun('pubkey-e554cff2b1182829eeaa18af3aa645ac');
$domain = "pedagogiadigital.com";

$result = $mgClient->sendMessage($domain, array(
'from'    => 'Excited User <tdeamos@pedagogiadigital.com>',
'to'      => 'Baz <tdeamos@pedagogiadigital.com>',
'subject' => 'Hello',
'text'    => 'Testing some Mailgun awesomness!'
));

?>