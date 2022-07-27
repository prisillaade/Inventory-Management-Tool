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
    $fileName = "device-data_" . date('Y-m-d') . ".xls"; 
     
    // Column names 
    $fields = array('ID', 'Serial Number', 'Model', 'Name', 'Equipment Type', 'IP', 'Purchase Date', 'Purchase Price', 'Created At', 'Update at', 'Status', 'Comment' ); 
     
    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n"; 
     
    // Fetch records from database 
    $query = $db->query("SELECT * FROM devices ORDER BY _ID ASC"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc())
        { 
            $status = ($row['status'] == 1)?'Active':'Inactive'; 
            $lineData = array(
                        $id = $row['_ID'],
                        $serialnumber = $row['serial_number'],
                        $model = $row['model'],
                        $name = $row['name'],
                        $equipment_type = $row['equipment_type'],
                        $ip = $row['ip'],
                        $purchase_date = $row['purchase_date'],
                        $purchase_price = $row['purchase_price'],
                        $created_at = $row['created_at'],
                        $updated_at = $row['updated_at'],
                        $status = $row['status'],
                        $comment = $row['comment']); 
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