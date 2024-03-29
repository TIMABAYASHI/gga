<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<script src="/js/jquery.min.js"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Styles -->
<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}
.full-height {
    height: 100vh;
}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.position-ref {
    position: relative;
}
.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}
.content {
    text-align: center;
}
.title {
    font-size: 84px;
}
.links > a {
    clear: both;
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
.m-b-md {
    margin-bottom: 100px;
}
ul{
    border: 1px solid #e0e0e0;
    padding: 15px;
    margin: 10px;
    box-shadow: 1px 1px 5px #ccc;
}
li{
    display: inline-block;
    width:150px;
    border-bottom:3px solid #ccc;
    margin: 5px;
    padding:5px;
    list-style: none;
}
li:hover{
    box-shadow: 1px 2px 3px #CCC;
}
</style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    @endif

    <div class="content">

        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <div class="menu">
                <div class="m-b-md">
                    <h4>Example CRUD</h4>
                    <ul>
								<li><a href="/Jobs">Jobs</a></li>
								<li><a href="/Applicants">Applicants</a></li>
								<li><a href="/Admins">Admins</a></li>
								<li><a href="/Clients">Clients</a></li>
								<li><a href="/Likes">Likes</a></li>
								<li><a href="/Messages">Messages</a></li>
								<li><a href="/Users">Users</a></li>
								<li><a href="/UserRoles">UserRoles</a></li>
								<li><a href="/MessageRooms">MessageRooms</a></li>
								<li><a href="/UserMovies">UserMovies</a></li>
								<li><a href="/Reports">Reports</a></li>
								<li><a href="/ClientRoles">ClientRoles</a></li>
								<li><a href="/UserWorkExps">UserWorkExps</a></li>
                        <li>TestData!! [ php artisan db:seed ] GO!!</li>
                    </ul>
                </div>
            </div>

            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>