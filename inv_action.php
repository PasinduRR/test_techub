<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=techub","root","");

        foreach($_POST['Item_Service'] as $key => $value){
            $sql = "INSERT INTO invoice(Item_Service, Inv_des, Qty, Price, Amountt) VALUES (:Item_Service, :Inv_des, :Qty, :Price, :Amountt)";
            $stmt = $conn->prepare($sql);
            
            $stmt -> execute([
                "Item_Service"=> $value,
                "Inv_des"=> $_POST["Inv_des"][$key],                
                "Qty"=> $_POST["Qty"][$key],
                "Price"=> $_POST["Price"][$key],
                "Amountt"=> $_POST["Amountt"][$key],
            ]);
        }
        echo "Invoice created successfully.";
    } 
    catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    /* print_r($_POST); */
?>

