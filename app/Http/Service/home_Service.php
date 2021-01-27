<?php

namespace App\Http\Service;
use Illuminate\Support\Facades\Log;
use App\Http\Repository\home_Repository;

class home_Service{

	protected $home_Repository;

    public function __construct()
    {
         $this->home_Repository = new home_Repository();
    }

    public function index(){
    	return $index = $this->home_Repository->index();
    }
    public function ban_index(){
    	return $index = $this->home_Repository->ban_index();

    }

}