<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pulse - Capture Your Thoughts</title>

        @include('templates.font')
        <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">
        <link rel="stylesheet" href="{{ asset('css/menu.css')}}">

    </head>
    <body>
        @include('templates.menu')
        <main>
            <div class="content">
                <div class="text">
                    <h1>Capture Your Thoughts<br />Share Your Voice</h1>
                    <p>
                        Join a vibrant community where ideas thrive and
                        creativity pulses.
                        <br />Share your stories, connect with
                        others, and make your mark.</p>
                    <div class="buttons">
                        <button class="how-it-works">How does it work?</button>
                        <button class="get-started">Get Started</button>
                    </div>
                </div>
                <div class="image">
                    <img src="img/mockup.png" alt="" />
                </div>
            </div>
        </main>
    </body>
</html>
