<?php

namespace Core;

class View
{
    public static function render(string $view, array $parameters = []): string
    {
        $output = file_get_contents(__DIR__.'/../app/Views/'.$view.'.html');
        $output = preg_replace_callback('/{{ (.*?) }}/',
            function ($match) use ($parameters){
                return $parameters[$match[1]] ?? '';
            },
            $output
        );
        return $output;
    }
}
