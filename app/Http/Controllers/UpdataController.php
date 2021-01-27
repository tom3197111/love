<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\UpdataService;

class UpdataController extends Controller
{	
	protected $UpdataService;

    public function __construct()
    {
       $this->UpdataService = new UpdataService();
    }

    public function index()
    {	
    	$index = $this->UpdataService->index();
        return view('auth.updata',compact('index'));
    }
    public function updata(Request $request){
        $input = $request->all();
        return $this->UpdataService->Updata_Service(array_except($input, ['_token']));

    }
    public function del(Request $request){
        $input = $request->all();
        return $this->UpdataService->del_Service(array_except($input, ['_token']));
    }
}
