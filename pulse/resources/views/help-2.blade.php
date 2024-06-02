<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help</title>
        
    @include('templates.font')

    <link rel="stylesheet" href="{{ asset('css/help-2.css')}}">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
</head>
    <body>
        @include('templates.header')
        @include('templates.navbar')
        <main>
            <div class="main-panel">
                <div class="content">
                    <div class="text">
                    <h1>Documentation</h1>
                        <p>This is a social media site similar to Facebook, created by the team w3ird0s. It aims to have Create, Read, 
                         Update, and Delete (CRUD) functionality, which the developers are required to implement.  </p>
                    </div>
                    <div class="green-container">
                        <div class="green-container-header">
                            <h1>How Does it Work?</h1>
                        </div>
                        <div class="container">
                            <div class="step">
                                <h1>1.</h1>
                                <p><strong>Posting</strong>. Whether it's a quick update or a detailed article, express yourself effortlessly.</p>
                            </div>
                            <div class="step">
                                <h1>3.</h1>
                                <p><strong>Customize</strong>. Make your profile uniquely yours. Express yourself through your bio, and showcase your individuality.</p>
                            </div>
                            <div class="step">
                                <h1>2</h1>
                                <p><strong>Connect</strong>. Discover like-minded people using our powerful search tool.</p>
                            </div>
                            <div class="step">
                                <h1>4.</h1>
                                <p><strong>Engage</strong>. Converse and connect on a deeper level with our dynamic engagement tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
                @include('templates.footer')    
            </div>
        </main>
    </body>
</html>