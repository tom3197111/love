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
  <h2>Linebot管理帳號修改</h2>
  <table class="table  table-hover table-striped table-bordered  table-condensed">
    <thead>
      <tr>
        <th>員工姓名</th>
        <th>使用者權限</th>
        <th>所屬部門</th>
        <th>公司E-Mail</th>
        <th>功能</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($index as $data)
      <tr>
         <th>{{$data->name}}</th>
         <th>{{$data->role}}</th>
         <th>{{$data->department}}</th>
         <th>{{$data->email}}</th>
         <th><button data-linebot_id="{{$data->id}}" 
                     data-linebot_name="{{$data->name}}"  
                     data-linebot_role="{{$data->role}}" 
                     data-linebot_email="{{$data->email}}"
                     data-linebot_department="{{$data->department}}"
                     class="edit_linebot_account btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><img src="{{ asset('images/icon/edit-24px.svg') }}"></button>

            <button data-linebot_id="{{$data->id}}"  class="del_linebot_account btn btn-primary btn-lg"><img src="{{ asset('images/icon/ic_delete_24px.svg') }}"></button>
         </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

<!-- 模态框（Modal） -->
<input type="hidden" id="csrf" value="{{ csrf_token() }}">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">修改資料</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
  <form >
                <table class="table  table-hover table-striped table-bordered  table-condensed">
                    <tr>
                      <th>員工姓名</th>
                      <th>
                        <input name="linebot_name" type="text" id="linebot_name">
                        <input type="hidden" name="id" id="linebot_id">
                      </th>
                    </tr>
                    <tr>
                      <th>使用者權限</th>
                      <th>
                        <!-- <input type="text" readonly="readonly" id="linebot_role"> -->
                        <select id="role" name="role">
                          <option  value="admin">admin</option>
                          <option  value="manager">manager</option>
                          <option  value="user">user</option>
                          <option  value="deactivate">deactivate</option>
                        </select>
                        <div  id="reason"></div>
                      </th>
                    </tr>
                    <tr>
                        <th>所屬部門</th>
                        <th>
                          <input name="linebot_department" type="text" id="linebot_department">
                        </th>
                    </tr>
                    <tr>
                      <th>公司E-Mail</th>
                      <th>
                        <input name="linebot_email" type="text" id="linebot_email">
                      </th>
                    </tr>
                </table>
    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary confirm">確認</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->

</div>
</body>
</html>
