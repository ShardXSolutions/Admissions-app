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
    $pdf->Text(37,45, strtoupper($admission->fullname));
    $pdf->Text(37,60, strtok(strtoupper($admission->fullname),' ').",");
    $pdf->Text(106,76,strtoupper("-".$admission->adm));
    $pdf->Text(26,93,strtoupper($admission->course));
    $pdf->Output('AdmissionForm.pdf','I');
   
*/

/* New Code */
$pdf = new Fpdi();
    $pdf->SetCreator("Script by Shadrack Kimutai (0724226334)");
    $pdf->SetDisplayMode('real');

/* set the source file */
$pageCount = $pdf->setSourceFile("EndebessAdm.pdf");

for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    $tplIdx = $pdf->importPage($pageNo);

    /* add a page */
    $pdf->AddPage();
    $pdf->useTemplate($tplIdx, 0, 0);

    /* font and color selection */
    $pdf->SetFont('Helvetica', '', 11);
    $pdf->SetTextColor(0, 0, 0);
if($pageNo==1){
    /* now write some text above the imported page */
    $pdf->Text(35,53, strtoupper($admission->fullname));
    //$pdf->Text(37,55, strtok(strtoupper($admission->fullname),' ').",");
    $pdf->Text(68,60,strtoupper(" - ".$admission->adm));
    $pdf->Text(26,80,strtoupper($admission->course));
    $pdf->Image("data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate('Make me into an QrCode!')) }}",10,10,-300);
  }
}

$pdf->Output('AdmissionForm.pdf','I');

ob_flush();
@endphp