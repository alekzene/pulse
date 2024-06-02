<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create Post | Pulse </title>

    <link rel="stylesheet" href="{{ asset('css/create-post.css')}}">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    
    <script>
        function redirectToFeed() {
            window.location.href = "{{ url('feed') }}";
        }
    </script>
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')
    <div class="post-container">
        <div class="post-panel">
            <div class="post-content">
                <h1>Create A Post</h1>
                <div class="post-text-area">
                    <textarea placeholder="What are your thoughts today?"></textarea>
                    <div class="image-upload">
                        <input type="file" id="file-input" multiple>
                        <label for="file-input">
                            <img src="img/icons/add-image.png" alt="">
                        </label>
                    </div>
                    <div class="image-preview" id="image-preview">
                    </div>
                    <div class="button-panel">
                        <div class ="buttons">
                        <button class="Cancel" onclick="redirectToFeed()">Cancel</button>
                        <button class="Update">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>