@php
use setasign\Fpdi\Fpdi;
flush();
/* 
    Old Code
    $pdf = new Fpdi();
    $pdf->SetCreator("Script by Shadrack Kimutai (0724226334)");
    $pdf->SetDisplayMode('real');
    $pdf->AddPage();
    $pdf->setSourceFile('edtti_blank.pdf'); 
    $tplIdx = $pdf->importPage(1); 
    $pdf->useTemplate($tplIdx, 0, 0); 

    $pdf->SetFont('Helvetica', '', 12);
    $pdf->Text(37,45, strtoupper($admission->StudentName));
    $pdf->Text(37,60, strtok(strtoupper($admission->StudentName),' ').",");
    $pdf->Text(106,76,strtoupper("-".$admission->Adm));
    $pdf->Text(26,93,strtoupper($admission->Course));
    $pdf->Output('AdmissionForm.pdf','I');
   
*/

/* New Code */

$pdf = new Fpdi();
    $pdf->SetCreator("Script by Shadrack Kimutai (0724226334)");
    $pdf->SetDisplayMode('real');

/* set the source file */
$pageCount = $pdf->setSourceFile("ktvc_blank.pdf");

for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    $tplIdx = $pdf->importPage($pageNo);

    /* add a page */
    $pdf->AddPage();
    $pdf->useTemplate($tplIdx, 0, 0);

    /* font and color selection */
    $pdf->SetFont('Arial', '', 11);
    $pdf->SetTextColor(0, 0, 0);
if($pageNo==1){
    /* now write some text above the imported page */
    $pdf->Text(28,76, strtoupper($admission->StudentName));
    //$pdf->Text(30,85, strtok(strtoupper($admission->StudentName),' ').",");
    $pdf->Text(48,58,strtoupper("".$admission->Adm));
    $pdf->Text(12,91,strtoupper($admission->Course));

    $pdf->Text(74,100,date_format(date_create($dates->SettingStartDate),'jS F, Y'));
    $pdf->Text(178,100,date_format(date_create($dates->SettingEndDate),'jS F, Y'));
  }
}



$vars = strtolower(strtok($admission->StudentName," "));
$pdf->Output($vars.'-AdmForm.pdf','I');

ob_flush();
@endphp