<?php

namespace App\Http\Controllers;

use App\Admission;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\QrCode;
use Illuminate\Support\Facades\Storage;

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
       
        $request->validate([
            'StudentName'=>'required',
            'IndexNumber'=>'required|min:9',
            'Year'=>'required',
            'Course'=>'required',
            'Phone'=>'required|min:10|max:11',
            'Address'=>'required',
            'Email'=>'required|email',
            'Gender'=>'required',
            'certfile'=>'required|mimes:jpeg,png,jpg,gif,pdf,ps|max:500'
        ],
        [
            'StudentName.required'=>'Your Full Name as it appears in KNEC certificate is required',
            'IndexNumber.required'=>'Your Index Number in the Certificate is required ',
            'Year.required'=>'The Year you sat for the above exam is required',
            'Course.required'=>'The Course you wish to pursue is required',
            'Phone.required'=>'Your Phone number is required for correspondence',
            'Address.required'=>'Your Address is required for correspondence',
            'Email.required'=>'Your Email address is required',
            'Gender.required'=>'Your Gender is required',
            'certfile.required'=>'You must upload the PDF or Picture of the certificate or transcript'
        ]);
        $lastID=Admission::query()->orderByDesc('Id')->first();
      $nextID = ($lastID->id)+1;  
    $adm='';
    switch ($nextID) {
        case $nextID< 10:
            $adm=env('APP_OWNER').env('APP_WALKIN_PREFIX')."000".$nextID;
            break;
        case $nextID<100:
            $adm=env('APP_OWNER').env('APP_WALKIN_PREFIX')."00".$nextID;
            break;
        case $nextID<1000:
            $adm=env('APP_OWNER').env('APP_WALKIN_PREFIX')."0".$nextID;
            break;
        case $nextID<10000:
            $adm=env('APP_OWNER').env('APP_WALKIN_PREFIX').$nextID;
        }
        $request->request->add(['Adm' => $adm]);
        $request->request->add(['Level' => strtok($request->course,' ')]);
        $request->request->add(['FormGenerated'=>1]);
        $request->request->add(['AltPhone'=>'None']);
        $request->request->add(['AltEmail'=>'None']);
     // dd($request);
        
        $admission = Admission::where('IndexNumber', '=', $request->input('indexno'))->first();
        if ($admission === null) {
            // User doesnt Exists  

            $admission = Admission::create(request()->all());
        } else { 
           // User Exists  
           $admission = Admission::where('IndexNumber', '=', $request->input('indexno'))->first();
           
        }
       // dd($request);
       
       // Mail::to('shadychiri@gmail.com')->send(new Mailer($mailingData));
        $barCodeData= $admission->Adm."|".$admission->StudentName."|".$admission->Course;
        $image = \QrCode::format('png')
            ->size(200)->errorCorrection('H')
            ->generate($barCodeData);
        $output_file = '/img/qr-code/'.$admission->Adm.'.png';
        $output_app_file  = $nextID.'.'.$request->certfile->extension();
        // dd($output_app_file);
        Storage::disk('public')->put($output_file, $image);
        Storage::disk('local')->putFileAs('/docs/' , $request->certfile,$output_app_file);
        $contentUrl = Storage::disk('public')->path('/img/qr-code/'.$admission->Adm.'.png');
        $settings =Settings::take(1)->first();
        
       return view('admission.pdf',['admission'=>$admission,'qrcodeurl'=>$contentUrl, 'dates'=>$settings])->with('message', 'Your application is successful');
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
       
       //dd($request);
        
        if($request->get('nopdf')==0){
            $admission->Adm = $request->get('adm');
            $admission->StudentName = $request->get('fullname');
            $admission->Course = $request->get('course');
            $admission->Level = $request->get('level');
            $admission->Year = $request->get('feyear');
            $admission->Address = $request->get('address');
            $admission->Email = $request->get('email');
            $admission->phone = $request->get('mobile');
            $admission->IndexNumber = $request->get('indexno');
            $admission->FormGenerated=$request->get('formgenerated');
            $admission->save();
            $barCodeData= $admission->Adm."|".$admission->StudentName."|".$admission->Course;
            $image = \QrCode::format('png')
            ->size(200)->errorCorrection('H')
            ->generate($barCodeData);
            $output_file = '/img/qr-code/'.$admission->StudentName.'.png';
            Storage::disk('public')->put($output_file, $image);
            $contentUrl = Storage::disk('public')->path('/img/qr-code/'.$admission->StudentName.'.png');
            $settings =Settings::take(1)->first();
            
            return view('admission.pdf',['admission'=>$admission,'qrcodeurl'=>$contentUrl,'dates'=>$settings]);
        }else{
            $admission->Contacted=$request->get('contacted');
            $admission->save();
            return redirect()->back();
            }
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
        dd($id);
    }

 
}
