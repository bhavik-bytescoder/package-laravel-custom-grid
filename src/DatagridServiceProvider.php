<?php

namespace Datagrid;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class DatagridServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'datagrid');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/datagrid.php', 'datagrid');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'datagrid');
        $this->publishes([
            __DIR__.'/config/datagrid.php' => config_path('datagrid.php'),
        ]);
        $this->publishes([
            __DIR__.'/public' => public_path('data-grid'),
        ]);

        // Get the source path of the image within your package
        $sourceImagePath = __DIR__.'/public/default-image/default.jpg';

        // Define the destination directory in the user's public storage
        $destinationDirectory = public_path('default-image');

        // Check if the destination directory exists, if not, create it
        if (!File::exists($destinationDirectory)) {
            File::makeDirectory($destinationDirectory, 0755, true);
        }

        // Define the destination path for the image
        $destinationImagePath = $destinationDirectory . '/default.jpg';

        // Copy the image from the package to the user's public storage
        File::copy($sourceImagePath, $destinationImagePath);
    }

    public function register()
    {
        $this->app->bind('datagrid', function () {
            return new DataGrid();
        });
    }
}
