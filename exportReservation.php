<?php 

    // Load the database configuration file 
    include_once 'config.php'; 
     
    // Filter the excel data 
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    } 
     
    // Excel file name for download 
    $fileName = "reservation-data_" . date('Y-m-d') . ".xls"; 
     
    // Column names 
    $fields = array('ID', 'User ID', 'Device ID', 'Reserved from', 'Reserved until' ); 
     
    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n"; 
     
    // Fetch records from database 
    $query = $db->query("SELECT * FROM reservation ORDER BY _ID ASC"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc())
        { 
            $status = ($row['status'] == 1)?'Active':'Inactive'; 
            $lineData = array(
                        $id = $row['_ID'],
                        $user_ID = $row['user_ID'],
                        $device_ID = $row['device_ID'],
                        $reserved_from = $row['reserved_from'],
                        $reserved_until = $row['reserved_until']); 
            array_walk($lineData, 'filterData'); 
            $excelData .= implode("\t", array_values($lineData)) . "\n"; 
        } 
    }else{ 
        $excelData .= 'No records found...'. "\n"; 
    } 
     
    // Headers for download 
    header("Content-Type: application/vnd.ms-excel"); 
    header("Content-Disposition: attachment; filename=\"$fileName\""); 
     
    // Render excel data 
    echo $excelData; 
     
    exit;

?>