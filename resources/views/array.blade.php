@extends('layout')

@section('title')
<h2>About Page</h2>
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

                </div>
                @foreach ($name_array as $user)
                  <p>This is user {{$user}}</p>
                @endforeach
            </div>
@stop
