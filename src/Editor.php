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
tinymce.init({selector:'{$this->id}'});
EOT;
        return parent::render();
    }
}
