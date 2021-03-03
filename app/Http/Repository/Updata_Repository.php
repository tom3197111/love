<?php

namespace App\Http\Repository;
use Auth;
use App\User;
use App\account_log;
use App\ban_account;
use Illuminate\Support\Facades\DB;

class Updata_Repository
{
    protected $User;

    public function __construct()
    {   
        DB::connection()->enableQueryLog();
        $this->User = new User();
    }

    public function index()
    {
        $index_list = User::get();
        return $index_list;
    }
    public function updata($data){

        if(empty($data['ban_reason'])){
            $data['ban_reason']=null;
        }
       $result =  User::where('id','=',$data['id'])->update(
            ['name' => $data['linebot_name'],
            'role' => $data['role'],
            'email' => $data['linebot_email'],
            'department' => $data['linebot_department']]);
       if($data['role'] == 'deactivate'){
            $this->ban_account_Repository($data);
       }

       $sql = $this->getQueryString();
       $this->account_log($sql,$data['ban_reason']);
        return $result;
    }
    public function del_Repository($id){
        $del = User::where('id', '=',$id)->delete();
       $sql = $this->getQueryString();
       $this->account_log($sql,null);
        return $del;
    }
    public function ban_account_Repository($data){
       $result =  ban_account::insert(
        ['execute' => Auth::user()['name'],
         'user_account' => $data['linebot_name'],
         'ban_reason' => $data['ban_reason'],
         'department' => $data['linebot_department'],
         'ban_date' =>  date("Y-m-d H:i:s")
        ]);
    }
    public function account_log($sql,$status=null){
        if($status == 'deactivate'){
           $result =  account_log::insert(
            ['login_account' => Auth::user()['name'],
             'action' => 'deactivate',
             'action_date' =>  date("Y-m-d H:i:s")
            ]);   
        }else{
           $result =  account_log::insert(
            ['login_account' => Auth::user()['name'],
             'action' => $sql,
             'action_date' =>  date("Y-m-d H:i:s")
            ]);   
        }

    }
    public static function getQueryString(){
        $sql=DB::getQueryLog();
        $stringSql = end($sql)['query'];
        // 取代所有問號
        $stringSql = preg_replace("/\?/", "'?'", $stringSql);
        foreach (end($sql)['bindings'] as  $arg) {
            $stringSql = preg_replace("/\?/", $arg, $stringSql, 1);
        }
        return $stringSql;
    }

}
