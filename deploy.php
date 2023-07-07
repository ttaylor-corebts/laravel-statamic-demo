<?php
namespace Deployer;

require 'recipe/statamic.php';

// Config

set('repository', 'https://github.com/ttaylor-corebts/laravel-statamic-demo.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('statamic-cms-demo.azurewebsites.net')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Laravel Statamic Demo');

// Hooks

after('deploy:failed', 'deploy:unlock');
