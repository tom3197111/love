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
  <h2>Linebot封鎖帳號列表</h2>
  <table class="table  table-hover table-striped table-bordered  table-condensed">
    <thead>
      <tr>
        <th>執行者</th>
        <th>所屬部門</th>
        <th>違規者</th>
        <th>原因</th>
        <th>封鎖時間</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ban_index as $data)
      <tr>
         <th>{{$data->execute}}</th>
         <th>{{$data->department}}</th>
         <th>{{$data->user_account}}</th>
         <th>{{$data->ban_reason}}</th>
         <th>{{$data->ban_date}}</th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
</div>
</body>
</html>
