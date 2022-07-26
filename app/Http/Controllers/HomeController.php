<?php

namespace App\Http\Controllers;

use Admissions;

use App\Admission;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Reader\Exception;

use PhpOffice\PhpSpreadsheet\Writer\Xls;

use PhpOffice\PhpSpreadsheet\IOFactory;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $admission = Admission::orderBy('adm', 'asc')->paginate(20);
       $userCount=Admission::all()->count();
       $withFormsGenerated=Admission::where('FormGenerated',1)->count();
       $walkIns=Admission::where('Adm','like','%PROV%')->count();
       $femaleApplicants=Admission::where('Gender','=','FEMALE')->count();
       
        return view('admin', compact('admission','userCount','withFormsGenerated','walkIns','femaleApplicants'));
    
    }
    public function import(){
        $admission = DB::table('admissions')->orderBy('adm', 'asc')->paginate(20);
        return view('import',['admission' => $admission]);
    }
/*
    public function index(){
        
        $data = DB::table('admissions')->orderBy('adm', 'ASC')->paginate(50);
        return view('welcome', compact('data'));
    }
    */
    public function importData(Request $request){
            $this->validate($request, [
                'uploaded_file' => 'required|file|mimes:xls,xlsx'
            ]);
            $the_file = $request->file('uploaded_file');
            try{
                $spreadsheet = IOFactory::load($the_file->getRealPath());
                $sheet        = $spreadsheet->getActiveSheet();
                $row_limit    = $sheet->getHighestDataRow();
                $column_limit = $sheet->getHighestDataColumn();
                $row_range    = range( 2, $row_limit );
                $column_range = range( 'F', $column_limit );
                $startcount = 2;
                $incrementer=$this->getTopAdmissionNumbebr();
              
                $data = array();
                foreach ( $row_range as $row ) {
                    $data[] = [
                        'Adm'=>$this->formatAdmission($incrementer),
                        'IndexNumber' =>substr($sheet->getCell( 'B' . $row )->getValue(),0,11),
                        'Year'=>substr($sheet->getCell( 'B' . $row )->getValue(),-4),
                        'StudentName' => strtoUpper($sheet->getCell( 'C' . $row )->getValue()),
                        'Gender'=>($sheet->getCell( 'D' . $row )->getValue()=="F")?"FEMALE":"MALE",
                        'Phone'=>"0".$sheet->getCell( 'E' . $row )->getValue(),
                        'AltPhone'=>"0".$sheet->getCell( 'F' . $row )->getValue(),
                        'Email'=>" ".$sheet->getCell( 'G' . $row )->getValue(),
                        'AltEmail'=>" ".$sheet->getCell( 'H' . $row )->getValue(),
                        'Address' => "P.O. Box ".$sheet->getCell( 'I' . $row )->getValue()." ".$sheet->getCell( 'J' . $row )->getValue()." ".$sheet->getCell( 'K' . $row )->getValue(),
                        'Course' => strtoUpper($sheet->getCell( 'N' . $row )->getValue()),
                        'Level'=>strtoUpper(strtok($sheet->getCell( 'N' . $row )->getValue()," ")),
                    ];
                    $startcount++;
                    $incrementer++;
                   
                
            }
               //dd($data);
                //DB::table('admissions')->insert($data);
                Admission::insert($data);
            } catch (Exception $e) {
                $error_code = $e->errorInfo[1];
                return back()->withErrors('There was a problem uploading the data!');
            }
            return back()->withSuccess('Great! Data has been successfully uploaded.');
        }
        public function getTopAdmissionNumbebr():int 
        {
            $lastID=Admission::query()->orderByDesc('ID')->first();
            $adm= ($lastID->id)+1;  
                          
            return $adm;
        }
        public function formatAdmission($nextID):string
        {
            switch ($nextID) {
                case $nextID< 10:
                    $adm="000".$nextID;
                    break;
                case $nextID<100:
                    $adm="00".$nextID;
                    break;
                case $nextID<1000:
                    $adm="0".$nextID;
                    break;
                case $nextID<10000:
                    $adm=$nextID;
                }
            return env('APP_OWNER').env('APP_KUCCPS_PREFIX'). $adm;
        }


    public function search(Request $request){
        $search=$request->get('search');
        $admission=Admission::where('Adm','=','%'.$search. '%' )
                                        ->orWhere('StudentName','like','%' .$search.'%')
                                        ->orWhere('Course','like','%'.$search.'%')
                                        ->orWhere('Email','like','%'.$search.'%')
                                        ->orWhere('Phone','like','%'.$search.'%')
                                        ->orderBy('Adm', 'asc'); 

        
        $userCount=Admission::all()->count();
        $withFormsGenerated=Admission::where('FormGenerated',1)->count();
        $walkIns=Admission::where('Adm','like','%PROV%')->count();
        $femaleApplicants=Admission::where('Gender','=','FEMALE')->count();
                                       
       //dd($admission);               
        return view('admin', compact('admission','userCount','withFormsGenerated','walkIns','femaleApplicants'));
                                     
 
    }
    
}
