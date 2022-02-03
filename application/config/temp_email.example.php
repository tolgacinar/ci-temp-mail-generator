<?php
defined('BASEPATH') or exit('No direct script access allowed');

// set your time zone, its must be same with e-mail server:
date_default_timezone_set('Europe/Istanbul');

$config['locale'] = 'tr_TR';

// Change IMAP settings (check SSL flags on http://php.net/manual/en/function.imap-open.php)
$config['imap_url'] = '{imap.example.com:993/imap/ssl}INBOX';
$config['imap_user'] = "tolga@example.com";
$config['imap_password'] = "password_here";

// For gmail you can use '{imap.gmail.com:993/imap/ssl}INBOX'
// and follow the troubleshooting at:
// https://stackoverflow.com/a/25238515/79461

// email domains, usually different from imap hostname:
$config['domains'] = ["example.com"];

// When to delete old messages?
$config['delete_messages_older_than'] = '30 days ago';


// Mails to those usernames can not be accessed:
$config['blocked_usernames'] = array('root', 'admin', 'administrator', 'hostmaster', 'postmaster', 'webmaster');

// Mails are usually show as Text and only if not available as HTML. You can turn this around to prefer HTML over text.
$config['prefer_plaintext'] = true;
