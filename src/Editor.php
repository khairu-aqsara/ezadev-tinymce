<?php


namespace Ezadev\Tinymce;

use Ezadev\Admin\Form\Field\Textarea;

class Editor extends Textarea
{
    protected $view = 'tinymce::editor';

    protected static $js = [
        'vendor/ezadev/tinymce/tinymce.min.js',
    ];

    public function render()
    {
        $this->script = <<<EOT
tinymce.init({
    selector:'#{$this->id}-tinymce',
    plugins: 'fullscreen image link media mediaembed table',
    menubar: 'insert format tools table',
    min_height: 450
});
EOT;
        return parent::render();
    }
}
