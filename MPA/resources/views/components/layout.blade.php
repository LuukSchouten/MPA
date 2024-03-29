<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <title>JukeBox</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  rel="stylesheet" />
        
    </head>
    <body>
        
        <div class="main">
            <h1>
                <a href="/dashboard" id="homeLink">
                    JukeBox
                </a>
            </h1>

            {{ $content }}
        </div>

    </body>
</html>