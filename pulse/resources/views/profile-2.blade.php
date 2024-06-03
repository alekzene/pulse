<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Jimboy</title>

    @include('templates.font')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile-card-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/birthdate.css') }}" rel="stylesheet"> 
</head>
<body>
    @include('templates.header')
    @include('templates.navbar')

    <div class="container">

        <div class="content">
            <div class="cards">
                @include('templates.profile-card-2')
                <div class="about-card">
                    <h3 class="about-me-label">About Me <a href="#" class="edit-link" id="edit-link">Edit</a></h3>
                    <div class="about-me-data" id="about-me-data">
                        <div class="hometown">
                            <p>Hometown</p>
                            <input type="text" name="hometown" class="input-field" value="{{ $userInfo->hometown ?? '' }}" disabled>
                        </div>
                        <div class="address">
                            <p>Lives In:</p>
                            <input type="text" name="lives-in" class="input-field" value="{{ $userInfo->livesIn ?? '' }}" disabled>
                        </div>
                        <div class="elementary">
                            <p>Elementary:</p>
                            <input type="text" name="elementary" class="input-field" value="{{ $userInfo->elementary ?? '' }}" disabled>
                        </div>
                        <div class="high-school">
                            <p>High School:</p>
                            <input type="text" name="high-school" class="input-field" value="{{ $userInfo->highschool ?? '' }}" disabled>
                        </div>
                        <div class="college">
                            <p>College:</p>
                            <input type="text" name="college" class="input-field" value="{{ $userInfo->college ?? '' }}" disabled>
                        </div>
                        <div class="work">
                            <p>Work At:</p>
                            <input type="text" name="work-at" class="input-field" value="{{ $userInfo->workAt ?? '' }}" disabled>
                        </div>
                        <div class="birth-date">
                            <p>Birthday:</p>
                            <div class="birth-date-container">
                                <select name="birth-year" class="input-field" disabled>
                                    @for ($year = date('Y'); $year >= 1900; $year--)
                                        <option value="{{ $year }}" @if($userInfo && date('Y', strtotime($userInfo->birthday)) == $year) selected @endif>{{ $year }}</option>
                                    @endfor
                                </select>
                                <select name="birth-month" class="input-field" disabled>
                                    @foreach (range(1, 12) as $month)
                                        <option value="{{ $month }}" @if($userInfo && date('n', strtotime($userInfo->birthday)) == $month) selected @endif>{{ $month }}</option>
                                    @endforeach
                                </select>
                                <select name="birth-day" class="input-field" disabled>
                                    @foreach (range(1, 31) as $day)
                                        <option value="{{ $day }}" @if($userInfo && date('j', strtotime($userInfo->birthday)) == $day) selected @endif>{{ $day }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('templates.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/navbar-sticky.js') }}"></script> --}}
</body>
</html>