<?php
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$mname = filter_input(INPUT_POST, 'mname');
$price = filter_input(INPUT_POST, 'price');
$perstrip = filter_input(INPUT_POST, 'perstrip');
$mfg = filter_input(INPUT_POST, 'mfg');
$exp = filter_input(INPUT_POST, 'exp');
$key = filter_input(INPUT_POST, 'key');


if (empty($id)){
    echo "ID should not be empty";
    die();
}

else if (strlen($id)!=6){
    echo "ID is of 6 DIGIT.";
    die();
}

else if (date("Y/m/d")<$mfg){
    echo "Manufacturing Date is Wrong...";
}
else if (date("Y/m/d")>$exp){
    echo "Drug has EXPIRED...";
}

if ($mfg>$exp){
    echo "Expiry Date is Wrong...";
}


else if (empty($name)){
    echo "Name should not be empty";
    die();
}

else if (empty($mname)){
    echo "Manufacture Name should not be empty";
    die();
}
else if (empty($price)){
    echo "Price should not be empty";
    die();
}

else if (empty($mfg)){
    echo "Manufacture Date should not be empty";
    die();
}

else if (empty($exp)){
    echo "Expiry Date should not be empty";
    die();
}

else if (empty($key)){
    echo "KeyWord should not be empty";
    die();
}


else {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "instamed";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    
    $sql = "SELECT * FROM medicine_details WHERE id ='$id';" ;
    $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    
    if($result!=null){
        echo "A Drug With ID '$id' already exists. ";
        $conn->close();
    }
    
    else{
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        $sql2 = "INSERT INTO `medicine_details` (`ID`, `Drug_Name`, `Mfg_Date`, `Exp_Date`, `Mfg_Name`, `Price`, `Per_Strip`, `Keyword`) 
        VALUES ('$id','$name','$mfg','$exp','$mname','$price','$perstrip','$key') ;";
        if ($conn->query($sql2)){
            echo "New Drug Record for Drug ID = ".$id." inserted successfullly.";
        }
        $conn->close();
    }
    
    }

?>