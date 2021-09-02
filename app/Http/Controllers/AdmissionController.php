<?php

namespace App\Http\Controllers;
use App\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastID=Admission::query()->orderByDesc('id')->first();
      $course = $request->course;
       // dd($course);
        $request->validate([
            'fullname'=>'required',
            'indexno'=>'required|min:9',
            'feyear'=>'required',
            'course'=>'required',
            'mobile'=>'required|min:10|max:11',
            'address'=>'required',
            'email'=>'required|email',
            'certfile'=>'required|mimes:jpeg,png,jpg,gif,pdf,ps|max:500'
        ],
        ['fullname.required'=>'Your Name as it appears in KNEC certificate is required',
        'indexno.required'=>'Your Index Number in the Certificate is required ',
        'feyear.required'=>'The Year you sat for the above exam is required',
        'course.required'=>'The course you wish to pursue is required',
        'mobile.required'=>'Your cellphone number is required for correspondence',
        'address.required'=>'Your address is required for correspondence',
        'email.required'=>'Your email is required for correspondence',
        'certfile.required'=>'You must upload the pdf or picture of the certificate or transcript'
        ]);
        
      $nextID = ($lastID->id)+1;  
    $adm='';
    switch ($nextID) {
        case $nextID< 10:
            $adm="EDTTI/PROV/S/000".$nextID;
            break;
        case $nextID<100:
            $adm="EDTTI/PROV/S/00".$nextID;
            break;
        case $nextID<1000:
            $adm="EDTTI/PROV/S/0".$nextID;
            break;
        }
        $request->request->add(['adm' => $adm]);
        $request->request->add(['level' => strtok($request->course,' ')]); 
        
        $admission = Admission::where('indexno', '=', $request->input('indexno'))->first();
        if ($admission === null) {
            // User doesnt Exists  

            $admission = Admission::create(request()->all());
        } else { 
           // User Exists  
           $admission = Admission::where('indexno', '=', $request->input('indexno'))->first();
           
        }


    
       return view('admission.pdf',['admission'=>$admission])->with('message', 'Your application is successful');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admission = Admission::find($id);
        // dd($request);
  
         $admission->adm = $request->get('adm');
         $admission->fullname = $request->get('fullname');
         $admission->course = $request->get('course');
         $admission->level = $request->get('level');
         $admission->feyear = $request->get('feyear');
         $admission->address = $request->get('address');
         $admission->email = $request->get('email');
         $admission->mobile = $request->get('mobile');
         $admission->indexno=$request->get('indexno');
         $admission->form_generated=1;
         $admission->save();
         return view('admission.pdf',['admission'=>$admission]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
