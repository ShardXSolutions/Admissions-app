<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Route;
 use Illuminate\Support\Facades\Auth;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use App\Models\Admission;
use Illuminate\Support\Facades\DB;

 class AdmissionAuthController extends Controller {

 /*	
 	public function gradlogin(){
 		return view ('admission.form-gen-login');
 	}
*/
 	public function dologingrad(Request $request){
 		$indexno = $request->input('indexno');
 		$feyear= $request->input('feyear');
    // Check validation
 		$checkLogin = DB::table('admission')->where(['indexno'=>$indexno,'feyear'=>$feyear])->get();
 		if(count($checkLogin)  > 0){

 			$admission = DB::table('admission')->where('indexno', $indexno)->first();
 			

 			return view("admission.formgen",['admission'=>$admission]);
 		}else{
 			return redirect()->back()->with('message', ['Your Details does not match our records. Are you sure you were placed in our institution for this intake']); 
 		}
 	}
 	
 }