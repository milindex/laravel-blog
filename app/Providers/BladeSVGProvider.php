<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeSVGProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // SVG Handling
        Blade::directive('svg', function($arguments) {
            // Funky madness to accept multiple arguments into the directive
            list($path, $class) = array_pad(explode(',', trim($arguments, "() ")), 2, '');
            $path = trim($path, "' ");
            $class = trim($class, "' ");

            // Create the dom document as per the other answers
            $svg = new \DOMDocument();
            $svg->load(public_path($path));
            $svg->documentElement->setAttribute("class", $class);
            $output = $svg->saveXML($svg->documentElement);

            return $output;
        });

        // Read Time from String
        Blade::directive('get_read_time', function($arguments) {
            $text = $arguments;
            $wordCount = str_word_count($text); // getting the number of words
            $minutesToRead = round($wordCount / 200);// getting the number of minutes
            if( $minutesToRead < 1 || $minutesToRead == 1 ){// if the time is less than a minute
                $minutes = '1 min read';
            }
            else{
                $minutes = $minutesToRead . 'mins read';// saving the time in the variable
            }
            return $minutes;
        });

    }
}
