<?php

$databases = [];
$databases['default']['default'] = array (
  'database' => 'visioncovid',
  'username' => 'vcuser',
  'password' => 'vcuserpwd',
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = '1BwXjRPE9EhhtdqID9Yy4CoCY2RvwMigM4i0WoBD2tJDsfzagUt3XqnzA7yvrFwV5L4y9zmyIQ';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;
$settings['config_sync_directory'] = '../config/sync';

$settings['trusted_host_patterns'] = [ '^localhost$', ];

$settings['api_url_base'] = 'https://api.vision-covid.org';

