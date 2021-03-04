<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
@extends('layouts.app')

@section('content')

        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    熱火交友後台
                </div>

                <div class="links">
                    @if (Route::has('login'))
                        <div class=" links">
                            @auth
                             <!--    <a href="{{ url('/home') }}">Home</a> -->

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">辦理員工帳號</a>
                                    <a href="{{ route('updata_index') }}">修改帳號權限及基本資料</a>
                                    <a href="{{ route('log') }}">日誌</a>
                                    <a href="{{ route('ban_index') }}">封鎖帳號列表</a>
                                @endif

                            @else
                                <a href="{{ route('login') }}">登入</a>
                              
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
@endsection
    </body>
</html>
