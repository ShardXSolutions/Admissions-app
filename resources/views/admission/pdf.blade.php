@php
    use setasign\Fpdi\Fpdi;
    flush();
    $pdf = new Fpdi();
    $pdf->SetCreator("Script by Shadrack Kimutai (0724226334)");
    $pdf->SetDisplayMode('real');
    $pdf->AddPage();
    $pdf->setSourceFile('edtti_blank.pdf'); 
    $tplIdx = $pdf->importPage(1); 
    $pdf->useTemplate($tplIdx, 0, 0); 

    $pdf->SetFont('Helvetica', '', 12);
    $pdf->Text(37,60, strtoupper($admission->fullname));
    $pdf->Text(106,76,strtoupper("-".$admission->adm));
    $pdf->Text(26,93,strtoupper($admission->course));
    $pdf->Output('AdmissionForm.pdf','I');
    ob_flush();
@endphp