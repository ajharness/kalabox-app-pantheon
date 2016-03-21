<?php

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  // Let drupal know when to generate absolute links as https.
  // Used in drupal_settings_initialize()
  $_SERVER['HTTPS'] = 'on';
}

// @todo: We need a better ENV loader
define('PANTHEON_SITE', getenv('PANTHEON_SITE'));
define('PANTHEON_ENVIRONMENT', getenv('PANTHEON_ENVIRONMENT'));
define('PANTHEON_BINDING', getenv('PANTHEON_BINDING'));
$_ENV['PANTHEON_SITE'] = PANTHEON_SITE;
$_ENV['PANTHEON_ENVIRONMENT'] = PANTHEON_ENVIRONMENT;
$_ENV['PANTHEON_BINDING'] = PANTHEON_BINDING;

define('PANTHEON_DATABASE_HOST', getenv('DB_HOST'));
define('PANTHEON_DATABASE_PORT', getenv('DB_PORT'));
define('PANTHEON_DATABASE_USERNAME', getenv('DB_USER'));
define('PANTHEON_DATABASE_PASSWORD', getenv('DB_PASSWORD'));
define('PANTHEON_DATABASE_DATABASE', getenv('DB_NAME'));
$_ENV['DB_HOST'] = PANTHEON_DATABASE_HOST;
$_ENV['DB_PORT'] = PANTHEON_DATABASE_PORT;
$_ENV['DB_USER'] = PANTHEON_DATABASE_USERNAME;
$_ENV['DB_PASSWORD'] = PANTHEON_DATABASE_PASSWORD;
$_ENV['DB_NAME'] = PANTHEON_DATABASE_DATABASE;

define('PANTHEON_REDIS_HOST', getenv('CACHE_HOST'));
define('PANTHEON_REDIS_PORT', getenv('CACHE_PORT'));
define('PANTHEON_REDIS_PASSWORD', getenv('CACHE_PASSWORD'));
$_ENV['CACHE_HOST'] = PANTHEON_REDIS_HOST;
$_ENV['CACHE_PORT'] = PANTHEON_REDIS_PORT;
$_ENV['CACHE_PASSWORD'] = PANTHEON_REDIS_PASSWORD;

define('PANTHEON_INDEX_HOST', getenv('PANTHEON_INDEX_HOST'));
define('PANTHEON_INDEX_PORT', getenv('PANTHEON_INDEX_PORT'));
$_ENV['PANTHEON_INDEX_PORT'] = PANTHEON_INDEX_PORT;
$_ENV['PANTHEON_INDEX_HOST'] = PANTHEON_INDEX_HOST;

$_ENV['BACKDROP_SETTINGS'] = getenv('BACKDROP_SETTINGS');
$_ENV['PRESSFLOW_SETTINGS'] = getenv('PRESSFLOW_SETTINGS');
$_ENV['FILEMOUNT'] = getenv('FILEMOUNT');
$_ENV['DOCROOT'] = getenv('DOCROOT');
$_ENV['FRAMEWORK'] = getenv('FRAMEWORK');

$_ENV['DRUPAL_HASH_SALT'] = getenv('DRUPAL_HASH_SALT');

$_ENV['AUTH_KEY'] = getenv('AUTH_KEY');
$_ENV['SECURE_AUTH_KEY'] = getenv('SECURE_AUTH_KEY');
$_ENV['LOGGED_IN_KEY'] = getenv('LOGGED_IN_KEY');
$_ENV['AUTH_SALT'] = getenv('AUTH_SALT');
$_ENV['SECURE_AUTH_SALT'] = getenv('SECURE_AUTH_SALT');
$_ENV['LOGGED_IN_SALT'] = getenv('LOGGED_IN_SALT');
$_ENV['NONCE_SALT'] = getenv('NONCE_SALT');
