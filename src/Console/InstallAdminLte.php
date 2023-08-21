<?php

namespace Blessing\BrandsplashPackage\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;


class InstallAdminLte extends Command
{
    protected $signature = 'adminlte:install';

    public function handle()
    {
        $this->info('Installing AdminLTE Template and its dependencies ...');
        $this->call('adminlte:install');
    }
}

?>