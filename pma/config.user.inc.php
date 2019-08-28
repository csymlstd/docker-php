<?php
$i = 1;
$cfg['ShowPhpInfo'] = TRUE;
$cfg['Servers'][$i]['hide_db'] = '^(information_schema|performance_schema|sys|mysql)$';
// $cfg['Servers'][$i]['ssl'] = TRUE;
// $cfg['Servers'][$i]['ssl_key'] = "/db/client-key.pem";
// $cfg['Servers'][$i]['ssl_cert'] = "/db/client-cert.pem";
// $cfg['Servers'][$i]['ssl_ca'] = "/db/ca.pem";
