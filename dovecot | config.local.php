<?php
$CONF['configured'] = true;

// Database configuration
$CONF['database_type'] = 'mysqli';
$CONF['database_host'] = 'localhost';
$CONF['database_user'] = 'postfix';
$CONF['database_password'] = 'votre_mot_de_passe_mysql';
$CONF['database_name'] = 'postfixadmin';

// Site configuration
$CONF['default_language'] = 'fr';
$CONF['default_aliases'] = array (
  'abuse' => 'postmaster',
  'hostmaster' => 'postmaster',
  'postmaster' => 'postmaster',
  'webmaster' => 'postmaster'
);
$CONF['domain_path'] = 'NO';
$CONF['domain_in_mailbox'] = 'YES';
$CONF['domain_in_logo'] = 'YES';
$CONF['domain_header'] = 'YES';
$CONF['user_footer_link'] = 'YES';
$CONF['quota'] = 'YES';

// Virtual mailbox settings
$CONF['mailbox_postfix_admin'] = 'YES';
$CONF['domain_quota'] = 'YES';
$CONF['quota_multiplier'] = '1024000';

// Password encryption
$CONF['encrypt'] = 'md5crypt';
$CONF['password_validation'] = '/.{5}/';

// Additional configuration options
// ...

?>
