<?php
require_once("../examples/fpdf/fpdf.php");

//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'prem');

//get invoices data
$query = mysqli_query($con,"select * from expense");
//$invoices = mysqli_fetch_array($query);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130  ,5,'Property Automation System',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130  ,5,'KLEMSCET',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130  ,5,'Belagavi',0,0);
$pdf->Cell(25 ,5,'Date : ',0,0);
$pdf->Cell(34 ,5,date('Y/m/d'),0,1);//end of line

$pdf->Cell(130  ,5,'Phone +12345678',0,0);
$pdf->Cell(25 ,5,'Invoice Id',0,0);
$pdf->Cell(34 ,5,"1",0,1);//end of line

$pdf->Cell(130  ,5,'Fax [+12345678]',0,0);
$pdf->Cell(25 ,5,'Customer ID',0,0);
//$pdf->Cell(34 ,5,$invoice['clientID'],0,1);//end of line


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20 ,10,'',0,1,'C');
//$pdf->Cell(20, 10, 'Id',1,0,'C');
$pdf->Cell(40, 10, ' Property Name',1,0,'C');
$pdf->Cell(40, 10, 'Tenant Name',1,0,'C');
$pdf->Cell(40, 10, 'Expense',1,0,'C');
$pdf->Cell(40, 10, 'Summary',1,0,'C');
//$pdf->Cell(30, 10, 'Status',1,0,'C');
//$pdf->Cell(50, 10, 'date',1,0,'C');
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);
$i=1;
$resultt=0;
while($invoice= mysqli_fetch_array($query))
{
  //$resultt=$resultt+$invoice['prod_amt'];
//billing address
//$pdf->Cell(100  ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(20 ,10,'',0,1,'C');
//$pdf->Cell(50 ,10, $i, 1,0,'C');
$pdf->Cell(40, 10, $invoice['prop_name'],1,0,'C');
$pdf->Cell(40, 10, $invoice['tent_name'],1,0,'C');
$pdf->Cell(40, 10, $invoice['exp_type'],1,0,'C');
$pdf->Cell(40, 10, $invoice['summary'],1,0,'C');
//$pdf->Cell(30, 10, $invoice['location'],1,0,'C');
//$pdf->Cell(30, 10, $invoice['status'],1,0,'C');
//$pdf->Cell(50, 10, $invoice['total'],1,0,'C');
//$pdf->Cell(50, 10, $invoice['date'],1,0,'C');
//$i++;
}
/*$pdf->Cell(50 ,10,'',0,1,'C');
$pdf->Cell(50, 10, );
$pdf->Cell(50, 10, );
$pdf->Cell(50, 10, 'Total_amt',1,0,'C');
$pdf->Cell(40, 10, $resultt,1,0,'C');
//$pdf->header_Table()*/
$pdf->Output();
?>