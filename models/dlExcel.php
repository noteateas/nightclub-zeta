<?php

require_once "../config/connection.php";
include "program/functions.php";
include "stage/functions.php";

$today = date('Y-m-d');
$path = "D:\\zeta_program.xls";
$program = getProgramWhere('date',4143,0,"date>$today");


	/*if(file_exists($path)){
			$excelApp = new COM("excel.application") or die("fail");
			$workbook = $excelApp->Workbooks->Open($path) or die("fail");
			$worksheet = $workbook->Worksheets("Sheet1");
			$worksheet->activate;

			$rowNum = 1;

			foreach($program as $row){
				$rowNum +=1;

				$name = $row['program_name'];
				$stage = ucfirst(getOneStage($row['stage_id'])['name']);
				$price = getOneProgram($row['id_program'])['price'];
				$artist = $row['name'];
				$date = $row['date'];

				$cell = $worksheet->Range('A'.$rowNum);
				$cell->activate;
				$cell->Value = $name;

				$cell = $worksheet->Range("B".$rowNum);
				$cell->activate;
				$cell->Value = $stage;

				$cell = $worksheet->Range("C".$rowNum);
				$cell->activate;
				$cell->Value = $artist;

				$cell = $worksheet->Range("D".$rowNum);
				$cell->activate;
				$cell->Value = $date;

				$cell = $worksheet->Range("E".$rowNum);
				$cell->activate;
				$cell->Value = $price."$";
			}
			
			$cell = $worksheet->Range("F1");
			$cell->activate;
			$cell->Value = $rowNum;

			$workbook->Save();
			$workbook->Saved = true;
			$workbook->Close;

			unset($workbook);
			unset($worksheet);

			$excelApp->Workbooks->Close();
			$excelApp->Quit();
			unset($excelApp);
	}
	else{*/
			$excelApp = new COM("Excel.application") or die('fail');
			$workbook = $excelApp ->Workbooks-> Add();
			$worksheet = $workbook->Worksheets("Sheet1");

			$cell = $worksheet->Range("A1");
			$cell->activate;
			$cell->Value = "Program Name:";

			$cell = $worksheet->Range("B1");
			$cell->activate;
			$cell->Value = "Stage Name:";

			$cell = $worksheet->Range("C1");
			$cell->activate;
			$cell->Value = "Artist Name:";

			$cell = $worksheet->Range("D1");
			$cell->activate;
			$cell->Value = "Date:";

			$cell = $worksheet->Range("E1");
			$cell->activate;
			$cell->Value = "Ticket price:";

			$cell = $worksheet->Range("F1");
			$cell->activate;
			$cell->Value = 1;

			$rowNum = $cell->Value;
			
			foreach($program as $row){
				$rowNum+=1;

				$name = $row['program_name'];
				$stage = ucfirst(getOneStage($row['stage_id'])['name']);
				$price = getOneProgram($row['id_program'])['price'];
				$artist = $row['name'];
				$date = $row['date'];

				$cell = $worksheet->Range('A'.$rowNum);
				$cell->activate;
				$cell->Value = $name;

				$cell = $worksheet->Range("B".$rowNum);
				$cell->activate;
				$cell->Value = $stage;

				$cell = $worksheet->Range("C".$rowNum);
				$cell->activate;
				$cell->Value = $artist;

				$cell = $worksheet->Range("D".$rowNum);
				$cell->activate;
				$cell->Value = $date;

				$cell = $worksheet->Range("E".$rowNum);
				$cell->activate;
				$cell->Value = $price."$";
			}

			$cell = $worksheet->Range("F1");
			$cell->activate;
			$cell->Value = $rowNum;

			$workbook->_SaveAs("$path", -4143);
			$workbook->Save();
			$workbook->Saved = true;
			$workbook->Close;

			$excelApp->Workbooks->Close();
			$excelApp->Quit();

			unset($worksheet);
			unset($workbook);
			unset($excelApp);
	//}

/*$str = '';
$str .= "<table>
                <tr>
                    <td>Program</td>
                    <td>Stage</td>
                    <td>Price</td>
                    <td>Artist</td>
                    <td>Date</td>
                </tr>";
    foreach($program as $row){
        $name = $row['program_name'];
		$stage = ucfirst(getOneStage($row['stage_id'])['name']);
		$price = getOneProgram($row['id_program'])['price'];
		$artist = $row['name'];
		$date = $row['date'];
        $str .= "<tr>
                <td>$name</td>
                <td>$stage</td>
                <td>$price</td>
                <td>$artist</td>
                <td>$date</td>
                </tr>";
    }
header("Content-type: application/xls");
header("Content-Disposition: attachment;Filename=zeta_programi.xls");
echo $str; 