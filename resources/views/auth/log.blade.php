<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  
</head>
<body>
@extends('layouts.app')
@section('content')

<div class="container">
  <h2>Linebot管理帳號日誌</h2>
  <table class="table  table-hover table-striped table-bordered  table-condensed">
    <thead>
      <tr>
        <th>執行者</th>
        <th>行為</th>
        <th>執行時間</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($log as $data)
      <tr>
         <th>{{$data->login_account}}</th>
         <th>{{$data->action}}</th>
         <th>{{$data->action_date}}</th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
</div>
</body>
</html>
