<?php
return array (
  'cache' =>
  array (
    'frontend' =>
    array (
      'default' =>
      array (
        'backend' => '\\Magento\\Framework\\Cache\\Backend\\RemoteSynchronizedCache',
        'backend_options' =>
        array (
          'remote_backend' => '\\Magento\\Framework\\Cache\\Backend\\Redis',
          'remote_backend_options' =>
          array (
            'server' => 'localhost',
            'port' => '6379',
            'database' => 8,
            'persistent' => 0,
            'password' => '',
            'compress_data' => '1',
          ),
          'local_backend' => 'Cm_Cache_Backend_File',
          'local_backend_options' =>
          array (
            'cache_dir' => '/opt/project/var/dev/shm/',
          ),
          '_useLua' => true,
          'use_lua' => false,
        ),
        'frontend_options' =>
        array (
          'write_control' => false,
        ),
      ),
    ),
    'type' =>
    array (
      'default' =>
      array (
        'frontend' => 'default',
      ),
    ),
    'graphql' =>
    array (
      'id_salt' => 'qoz62DKFg33cxfledluXBGSovvsvMKvb',
    ),
  ),
  'MAGE_MODE' => 'developer',
  'cache_types' =>
  array (
    'compiled_config' => 1,
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 0,
    'target_rule' => 1,
    'config_webservice' => 1,
    'translate' => 1,
    'vertex' => 1,
    'menumanager' => 1,
  ),
  'cron' =>
  array (
  ),
  'backend' =>
  array (
    'frontName' => 'admin',
  ),
  'remote_storage' =>
  array (
    'driver' => 'file',
  ),
  'queue' =>
  array (
    'amqp' =>
    array (
      'host' => 'rabbitmq',
      'port' => '5672',
      'user' => 'guest',
      'password' => 'guest',
      'virtualhost' => '/',
    ),
    'consumers_wait_for_messages' => 0,
  ),
  'db' =>
  array (
    'connection' =>
    array (
      'default' =>
      array (
        'host' => 'db',
        'username' => 'root',
        'dbname' => 'banco',
        'password' => 'magento',
      ),
      'indexer' =>
      array (
        'host' => 'db',
        'username' => 'root',
        'dbname' => 'banco',
        'password' => 'magento',
      ),
    ),
  ),
  'crypt' =>
  array (
    'key' => '3f3f77840fd0c4a54c2f08b0170b3f31',
  ),
  'resource' =>
  array (
    'default_setup' =>
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'session' =>
  array (
    'save' => 'redis',
    'redis' =>
    array (
      'host' => 'redis',
      'port' => '6379',
      'database' => 9,
      'disable_locking' => 1,
    ),
  ),
  'lock' =>
  array (
    'provider' => 'file',
    'config' =>
    array (
      'path' => '/opt/project/var/run/q4cxkei7u7fna_stg/locks',
    ),
  ),
  'directories' =>
  array (
    'document_root_is_pub' => true,
  ),
  'downloadable_domains' =>
  array (
    0 => 'local.proj.com.br',
  ),
  'install' =>
  array (
    'date' => 'Wed, 07 Apr 2021 17:40:39 +0000',
  ),
  'static_content_on_demand_in_production' => 0,
  'force_html_minification' => 1,
  'cron_consumers_runner' =>
  array (
    'cron_run' => true,
    'max_messages' => 10000,
    'consumers' =>
    array (
    ),
    'multiple_processes' =>
    array (
    ),
  ),
  'system' =>
  array (
    'default' =>
    array (
      'catalog' =>
      array (
        'search' =>
        array (
          'engine' => 'opensearch',
          'opensearch_server_hostname' => 'http://opensearch',
          'opensearch_server_port' => '9200',
          'opensearch_index_prefix' => 'magento2_stg',
        ),
      ),
      'dev' =>
      array (
        'js' =>
        array (
          'minify_files' => '1',
          'enable_js_bundling' => '0',
        ),
        'static' =>
        array (
          'sign' => '1',
        ),
      ),
    ),
  ),
);
