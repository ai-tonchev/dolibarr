<?php
// Root URL and Document Paths
$dolibarr_main_url_root = 'https://' . $_SERVER['HTTP_HOST'];
$dolibarr_main_document_root = '/var/www/html';
$dolibarr_main_data_root = '/var/www/documents'; // Your persistent Fly.io volume

// Alternate Custom Directory (for third-party modules)
$dolibarr_main_url_root_alt = '/custom';
$dolibarr_main_document_root_alt = '/var/www/html/custom';

// Database Connection (Reading from Fly.io Environment Variables)
$dolibarr_main_db_host = getenv('DOLI_DB_HOST');
$dolibarr_main_db_port = '3306';
$dolibarr_main_db_name = getenv('DOLI_DB_NAME');
$dolibarr_main_db_prefix = 'llx_';
$dolibarr_main_db_user = getenv('DOLI_DB_USER');
$dolibarr_main_db_pass = getenv('DOLI_DB_PASSWORD'); // Pulled securely from Fly Secrets
$dolibarr_main_db_type = 'mysqli';
$dolibarr_main_db_character_set = 'utf8';
$dolibarr_main_db_collation = 'utf8_unicode_ci';

// Authentication
$dolibarr_main_authentication = 'googleoauth,dolibarr';
?>