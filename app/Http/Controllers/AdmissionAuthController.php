<?php
namespace App\Http\Controllers;

use App\Admission; 
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

 class AdmissionAuthController extends Controller {

 
 	public function kuccpsAuth(){
 		return view ('admission.form-gen-login');
 	}

 	public function login(Request $request){
		
 		$indexnum = $request->input('indexno');
 		$fyear= $request->input('feyear');
    // Check validation 
	
 		$checkLogin = Admission::where(['IndexNumber'=>$indexnum,'Year'=>$fyear])->get();
 		
		//dd(count($checkLogin));
		 if(count($checkLogin) > 0){

 			$admission = DB::table('admissions')->where('IndexNumber', $indexnum)->first();
 			

 			return view("admission.kuccps",['admission'=>$admission]);
 		}else{
			//$msg="error encountered";
			//return back()->with("message", $msg);
			return back()->with('message', 'Details you entered does not match our records. Make sure the Index number and Year of Exam are as captured at KUCCPS portal'); 
		}
 	 }
	}	