<?php
    require_once "Classes/PHPExcel.php";

    $filename = "EmployeeSampleData.xlsx";
    $objReader = PHPExcel_IOFactory::createReaderForFile($filename);
    $objExcel = $objReader->load($filename);
    $rows = $objExcel->getSheet(0)->getRowIterator();


   echo "<table id='emp-table'>";
    $count=1; foreach($rows as $row) { 
          echo "<tr>";            
              $colums = $row->getCellIterator();
              foreach($colums as $colum){
                if($count ==1){
                    echo "<th class='$colum'>";
                    echo $colum->getCalculatedValue();
                    echo "</th>";
                } else{
                    echo "<td>";
                    echo $colum->getCalculatedValue();
                    echo "</td>";
                }
              }        
          echo "</tr>";  
          $count++;
     }
   echo "</table>";
?>