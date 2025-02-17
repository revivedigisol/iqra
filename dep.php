<?php 
require __DIR__ . '/vendor/autoload.php'; 
$app = require_once __DIR__ . '/bootstrap/app.php'; 

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class); 

// Run database migrations (forces execution in production)
$kernel->call('migrate', ['--force' => true]); 
echo nl2br($kernel->output());

// Clear application cache
$kernel->call('cache:clear');
echo nl2br($kernel->output());

// Clear and regenerate configuration cache
$kernel->call('config:clear');
$kernel->call('config:cache');
echo nl2br($kernel->output());


echo "Deployment tasks completed successfully.";