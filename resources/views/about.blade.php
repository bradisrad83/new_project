@extends('layout')

@section('title')
<h2>About Page</h2>
<p>{{$site_title}}</p>
@stop
@section('content')
            <div class="content">
                <div class="title m-b-md">
                  About Laravel Shmaravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    <p>{{$first_name}}</p>
                    <p>{{$last_name}}</p>
                </div>
                <h4><a href="https://www.gmail.com">{{$email}}</h4>
            </div>
@stop
