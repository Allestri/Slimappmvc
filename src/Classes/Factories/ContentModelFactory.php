<?php

namespace App\Factories;

class ContentModelFactory
{
    function __invoke()
    {
        $content = new \App\Models\ContentModel();
        return new \App\Models\PenModel($content);
    }
}