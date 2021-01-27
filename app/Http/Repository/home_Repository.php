<?php

namespace App\Http\Repository;
use App\account_log;
use App\ban_account;
class home_Repository
{

    public function index()
    {
        $index_list = account_log::get();
        return $index_list;
    }
    public function ban_index()
    {
        $index_list = ban_account::get();
        return $index_list;
    }

}
