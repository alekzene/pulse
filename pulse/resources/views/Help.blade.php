<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Documentation | Pulse</title>

        @include('templates.font')
        <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
        <link rel="stylesheet" href="{{ asset('css/help.css')}}">
        <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
        
    </head>
    <body>
        @include('templates.menu')
        <div class="container">
            <div class="text">
                <h1 class="label">Documentation</h1>
                <p class="description">This is a social media site similar to Facebook, created by the team w3ird0s. It aims to have Create, Read, 
                    Update, and Delete (CRUD) functionality, which the developers are required to implement.  </p>
            </div>
            <div class="content">
                <h1 class="help-title"> How Does it Work?</h1>
                <div class="first-row">
                    <div class="container1">
                        <h1>1.</h1>
                            <p><strong>Posting</strong>. Whether it's a 
                                <br>quick update or a 
                                <br>detailed article, express 
                                <br>yourself effortlessly.
                            </p>
                    </div>
    
                    <div class="container2">
                        <h1>2.</h1>
                            <p><strong>Connect</strong>. Discover like-
                                <br>minded people using our 
                                <br>powerful search tool.</p>
                    </div>
                </div>
                <div class="second-row">
                    <div class="container3">
                        <h1>3.</h1>
                            <p><strong>Customize</strong>. Make your 
                                <br>profile uniquely yours. 
                                <br>Express yourself through 
                                <br>your bio, and showcase 
                                <br>your individuality.</p>
                    </div>
                    <div class="container4">
                        <h1>4.</h1>
                            <p><strong>Engage</strong>. Converse and 
                                <br>connect on a deeper level 
                                <br>with our dynamic 
                                <br>engagement tools.</p>
                    </div>
                </div>
            </div>
        </div>
        @include('templates.footer')
    </body>
</html>

