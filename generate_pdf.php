<?php
		require("fpdf.php");
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->Image("clg.jpeg",8,8,40,40);
		$pdf->SetFont("Arial","B",14);
		$pdf->Text(80,10,"Government Of Maharashtra");
		$pdf->SetFont("Arial","B",16);
		$pdf->Text(70,17,"GOVERNMENT POLYTECHNIC MIRAJ");

		$pdf->SetFont("Arial","",10);
		$pdf->Text(80,24,"Near-maji sainik vasahat,Vidyanagar,Miraj-416 410");
		$pdf->Text(80,31,"Tel.No.:(0223) 2231423");
		$pdf->Text(60,38,"Email:gpmiraj@gmail.com");
		$pdf->Text(140,38,"web:www.gpmiraj.ac.in");	                        			
		$pdf->Text(10,45,"____________________________________________________________________________________________");
		$pdf->SetFont("Arial","U",14);
		$pdf->SetFont("Arial","B",14);
		$pdf->Text(30,55,"A.Y.2023-2024 Academic Calendar For Semester Academic Term ");
		$pdf->Ln(60);
		$pdf->SetFont("Arial","B",10);
		$pdf->cell(35,10,"Activities",1,0,'C');
		$pdf->cell(50,10,"Semester Academic Term",1,0,'C');
		$pdf->cell(35,10,"First Class Test",1,0,'C');
		$pdf->cell(35,10,"Second Class Test",1,0,'C');
		$pdf->cell(35,10,"Third Class Test",1,1,'C');
		
		$con=mysqli_connect("localhost","root","","event_calendar");
		$r=mysqli_query($con,"select * from calendar_event_master where event_name='Semester Term'");
		$row=mysqli_fetch_array($r);
		$sem_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$sem_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$r=mysqli_query($con,"select * from calendar_event_master where event_name='first class test'");
		$row=mysqli_fetch_array($r);
		$u1_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$u1_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$r=mysqli_query($con,"select * from calendar_event_master where event_name='second unit test'");
		$row=mysqli_fetch_array($r);
		$u2_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$u2_end_date=date('j-F-Y', strtotime($row['event_end_date']));


		$pdf->SetFont("Arial","",10);
		$pdf->cell(35,15,"Start Date",1,0,'C');
		$pdf->cell(50,15,"$sem_start_date",1,0,'C');
		$pdf->cell(35,15,"$u1_start_date",1,0,'C');
		$pdf->cell(35,15,"$u2_start_date",1,0,'C');
	    $pdf->cell(35,15,"Not Applicable",1,1,'C');

		$pdf->SetFont("Arial","",10);
		$pdf->cell(35,15,"End Date",1,0,'C');
		$pdf->cell(50,15,"$sem_end_date",1,0,'C');
		$pdf->cell(35,15,"$u1_end_date",1,0,'C');
		$pdf->cell(35,15,"$u2_end_date",1,0,'C');
	    $pdf->cell(35,15,"Not Applicable",1,1,'C');

		$pdf->SetFont("Arial","B",12);
		$pdf->SetFillColor(173,216,230);
		$pdf->cell(190,12,"Examination forn filling Scdule for MSBTE Exam",1,1,'C',true);


		$r=mysqli_query($con,"select * from calendar_event_master where event_name='Exam form filling'");
		$row=mysqli_fetch_array($r);
		$ef_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$ef_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$r=mysqli_query($con,"select * from calendar_event_master where event_name='Exam form filling with late fees'");
		$row=mysqli_fetch_array($r);
		$efl_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$efl_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$r=mysqli_query($con,"select * from calendar_event_master where event_name='Exam form filling with penalty fees'");
		$row=mysqli_fetch_array($r);
		$efp_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$efp_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$pdf->SetFont("Arial","B",10);
		$pdf->cell(20,15,"Activities",1,0,'C');
		$pdf->cell(50,15,"Fill Exam Forms",1,0,'C');
		$pdf->cell(60,15,"Fill Exam Forms with Late Fees",1,0,'C');
		$pdf->cell(60,15,"Fill Exam Forms with Penalty Fees",1,1,'C');

		$pdf->SetFont("Arial","",10);
		$pdf->cell(20,15,"Start Date",1,0,'C');
		$pdf->cell(50,15,"$ef_start_date",1,0,'C');
		$pdf->cell(60,15,"$efl_start_date",1,0,'C');
		$pdf->cell(60,15,"$efp_start_date",1,1,'C');

		$pdf->SetFont("Arial","",10);
		$pdf->cell(20,15,"End Date",1,0,'C');
		$pdf->cell(50,15,"$ef_end_date",1,0,'C');
		$pdf->cell(60,15,"$efl_end_date",1,0,'C');
		$pdf->cell(60,15,"$efp_end_date",1,1,'C');

		$pdf->SetFont("Arial","B",12);
		$pdf->SetFillColor(173,216,230);
		$pdf->cell(190,12,"Examination Schedule for MSBTE Exam",1,1,'C',true);


		$r=mysqli_query($con,"select * from calendar_event_master where event_name='practical exam'");
		$row=mysqli_fetch_array($r);
		$pe_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$pe_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$r=mysqli_query($con,"select * from calendar_event_master where event_name='theory exam'");
		$row=mysqli_fetch_array($r);
		$te_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$te_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$r=mysqli_query($con,"select * from calendar_event_master where event_name='Declaration of result'");
		$row=mysqli_fetch_array($r);
		$dr_start_date=date('j-F-Y', strtotime($row['event_start_date']));
		$dr_end_date=date('j-F-Y', strtotime($row['event_end_date']));

		$pdf->SetFont("Arial","B",10);
		$pdf->cell(30,15,"Activities",1,0,'C');
		$pdf->cell(50,15,"Practical Exam",1,0,'C');
		$pdf->cell(60,15,"Theort Exam",1,0,'C');
		$pdf->cell(50,15,"Declartion of Result",1,1,'C');

		$pdf->SetFont("Arial","",10);
		$pdf->cell(30,15,"Start Date",1,0,'C');
		$pdf->cell(50,15,"$pe_start_date",1,0,'C');
		$pdf->cell(60,15,"$te_start_date",1,0,'C');
		$pdf->cell(50,15,"$dr_start_date",1,1,'C');

		$pdf->SetFont("Arial","",10);
		$pdf->cell(30,15,"End Date",1,0,'C');
		$pdf->cell(50,15,"$pe_end_date",1,0,'C');
		$pdf->cell(60,15,"$te_end_date",1,0,'C');
		$pdf->cell(50,15,"$dr_end_date",1,1,'C');

		$pdf->AddPage();

		$pdf->SetFont("Arial","B",15);
		$pdf->Text(20,25,"Note:");
		$pdf->SetFont("Arial","",12);
		$pdf->Text(30,30,"1.Institutes have to take measures to conduct additional instructions days for");
		$pdf->Text(34,35,"academic activities.");
		$pdf->Text(30,40,"2.All type of fees & penalties shall be necessarily deposited to reginal office of");
		$pdf->Text(34,45,"the Board as per the schedule declared by respective RBTE or MSBTE.");
		$pdf->Text(30,50,"3.The institute must ensure that after confirmation of examination forms with late/fee");
		$pdf->Text(34,55,"Penalty,the question paper requirement is to be submitted immediately to RBTE.");
		$pdf->Text(30,60,"4.All practicals $ term work shall be completed with continuous assessment as per curriculam ");
		$pdf->Text(34,65,"till the end of term.");
		$pdf->Text(30,70,"5.In unavoidable circumstances,the necessary amendmentin the schedule of any activity will");
		$pdf->Text(34,75,"be notified though separate circular on MSBTE web portal");


		$pdf->SetFont("Arial","B",14);
		$pdf->Text(130,115,"(Capt.Dr.Nitin P. Sonje)");
		$pdf->SetFont("Arial","",12);
		$pdf->Text(150,120,"Principal");
		$pdf->Text(125,125,"Government Polytechnic Miraj");
	
		 $pdf->Output();
?>
