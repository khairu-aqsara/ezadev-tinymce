<?php

use Ezadev\Tinymce\Http\Controllers\TinymceController;

Route::get('tinymce', TinymceController::class.'@index');