<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{	//此model對應的table
   protected $table = 'member';
   //table內的欄位 有設定批次新增資料會方便很多
   protected $fillable = ['mail', 'pwd', 'firstname','name',  'gname',  'gender',  'city',  'birthday',  'cellphone',  'fb',  'google',  'game_name',   'first_name', 'joindate', 'member_grade'];
   //主鍵
   protected $primaryKey = 'id';
   protected $connection = 'mysql1';
}
