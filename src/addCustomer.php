<?php

    include 'connect-bdd.php';
   
    if(empty($_POST)){
        $query = $pdo -> prepare
            (
                "SELECT employeeNumber, 
                        firstName,
                        lastName
                 FROM   employees
                 ORDER BY  firstName;"
            );


        $query->execute();

        
        $employees = $query->fetchAll(PDO::FETCH_ASSOC);
        
       
        $template = "templates/addCustomer";
        include 'layout.php'; 
    } 
    else {
        $query = $pdo -> prepare
        (
            "INSERT INTO customers (customerName, contactLastname, contactFirstName,
                                    phone, addressLine1, addressLine2, 
                                    city, state, postalCode, 
                                    country, salesRepEmployeeNumber, creditLimit)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?);"            
        );


        $query->execute([htmlspecialchars($_POST["customerName"]), htmlspecialchars($_POST["contactLastName"]), 
                        htmlspecialchars($_POST["contactFirstName"]), htmlspecialchars($_POST["phone"]), 
                        htmlspecialchars($_POST["address1"]), htmlspecialchars($_POST["address2"]), 
                        htmlspecialchars($_POST["city"]), htmlspecialchars($_POST["state"]), 
                        htmlspecialchars($_POST["postalCode"]), htmlspecialchars($_POST["country"]), 
                        $_POST["employee"], $_POST["creditLimit"]]);
                        
       
        header('Location: addBons.php');
        exit(); 
    }


?>