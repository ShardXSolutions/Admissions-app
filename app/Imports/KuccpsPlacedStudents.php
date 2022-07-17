<?php

namespace App\Imports;

use App\Admission;
use Maatwebsite\Excel\Concerns\ToModel;

class KuccpsPlacedStudents implements ToModel, WithStartRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    public function getAdm():string 
    {
        $lastID=Admission::query()->orderByDesc('id')->first();
        $nextID = ($lastID->id)+1;  
        $adm='';
        switch ($nextID) {
            case $nextID< 10:
                $adm=env('APP_OWNER').env('APP_KUCCPS_PREFIX')."000".$nextID;
                break;
            case $nextID<100:
                $adm=env('APP_OWNER').env('APP_KUCCPS_PREFIX')."00".$nextID;
                break;
            case $nextID<1000:
                $adm=env('APP_OWNER').env('APP_KUCCPS_PREFIX')."0".$nextID;
                break;
            case $nextID<10000:
                $adm=env('APP_OWNER').env('APP_KUCCPS_PREFIX').$nextID;
            }
        return $adm;
    }
    public function model(array $row)
    {
        return new Admission([
           
            'adm'=getAdm(),
            'fullname'==>row[2],
            'course'=>row[13],
            'address'=>row[8]." ".row[9]." ".row[10],
            'email'=>$row[6],
            'mobile'=>$row[4],
            'level'=>strtok($row[13]," "),
            'indexno'=>substr($row[1],11),
            'feyear'=>substr($row[1],-4),
        ]);
    
    }
}
