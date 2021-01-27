<?php

namespace App\Http\Service;
use Illuminate\Support\Facades\Log;
use App\Http\Repository\Updata_Repository;

class UpdataService{

	protected $Updata_Repository;

    public function __construct()
    {
         $this->Updata_Repository = new Updata_Repository();
    }

    public function index(){
    	$index = $this->Updata_Repository->index();
    	return $index;
    }

    public function Updata_Service($data){
        return $this->Updata_Repository->updata($data);
    }
    public function del_Service($id){
        return $this->Updata_Repository->del_Repository($id);

    }
}