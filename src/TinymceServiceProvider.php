<?php

namespace Ezadev\Tinymce;

use Illuminate\Support\ServiceProvider;
use Ezadev\Admin\Admin;
use Ezadev\Admin\Form;

class TinymceServiceProvider extends ServiceProvider
{
    /**
     * TinyMCE Text Editor Service Provider
     */
    public function boot(Tinymce $extension)
    {
        if (! Tinymce::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'tinymce');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/ezadev/tinymce')],
                'tinymce'
            );
        }
    }
}
