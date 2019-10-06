<?php

 //                                   ***CONNECT TO THE SERVER***
                                    

 // This func below connects us to the server EX: localhost= name of your hosting; Root = username; "" = password

// mysqli_connect("localhost", "root", "");

//lets creats a loop that checks if we are connected 
//
//if (mysqli_connect("localhost", "root", "")) {
//  //  echo 'Connected</br>';
//} else {
//  //  echo 'Connection Failed</br>';
//}
//
//
//
////                                    ***CONNECT TO THE DATABASE***
//
//
//// This func below connects us to the database... EX: Link = location of server(we will make it a VAR below to simplify it) $dbname = the database name we will call is test. 
//
////make location a ver below
//
//$connectToConnectionTest = mysqli_connect("localhost", "root", "");
//
//mysqli_select_db($connectToConnectionTest, "test");
//
////Make the above function a VAR to make it easier to work with. 
//
//$selected = mysqli_select_db($connectToConnectionTest, "test");
//
//if ($selected) {
//  //  echo 'Selected</br>';
//}else {
//  //  echo 'Selection Failed';
//}




// Making the above code look cleaner and easier to read/understand


$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "myDB";
$dbtable = "clients";

$success = false;

$connectToConnectionTest = mysqli_connect($dbhost, $dbuser, $dbpassword);
$selected = mysqli_select_db($connectToConnectionTest, $dbname);


if ($connectToConnectionTest) {
    echo 'Connected to ConnectionTest</br>';
    
    if ($selected) {
        echo 'myDB database selected</br>';
        $success = true;
    }else {
        echo 'myDB database not found</br>';
        $success = false;
        return; //using the return word is great practice as it exits the loop preventing it from going farther possibly executing other blocks of code. 
    }
} else {
    echo 'Connection to Server Failed</br>';
    $success = false;
    return;
}

//we are adding to our database with SQL in the below function

if ($success) {
    
    $sql = "SELECT name, city FROM ".$dbname.".".$dbtable; // It will look like this -> SELECT name, city FROM myDB.clients 
    $query =  mysqli_query($connectToConnectionTest,  $sql);      
    
    $i = 1;

    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $name = $row["name"];
        $city = $row["city"];
        echo $name . " " . $city . "</br>";
    }      
    
}
//                          HOT TO!!!


//      NOTE: mysqli_query($connectToConnectionTest,  $sql);  //this function is a query which makes a REQUEST to do something. First it needs to select a LINK of the connection. Second parameter calls the VAR associated with the SQL Script. In this case we called it $sql


//                  CREATE A DATABASE 

// $sql = "CREATE DATABASE " . $dbname;  NOTE: //Creates a new database in this case called meDB NOTE: this is a SQL script 

//Call the an if else statement to verify it was successful or not see below.
/*     if (mysqli_query($connectToConnectionTest,  $sql)) {
         echo 'Created Successfully</br>';
     }else {
         echo 'Oh NO, somthing went wrong trying to create.</br>';
     } *\



//                  CREATE A TABLE IN THE DATABASE 

 * //$sql = "CREATE TABLE " . $dbname . "." . $dbtable;
 */
//$sql .= " (name VARCHAR(20), city VARCHAR(20))"; NOTE: add .= to add into the $sql

/*Call the an if else statement to verify it was successful or not see below.
     if (mysqli_query($connectToConnectionTest,  $sql)) {
         echo 'Created Successfully</br>';
     }else {
         echo 'Oh NO, somthing went wrong trying to create.</br>';
     } *\




//                  INSERT VALUES INTO YOUR TABLE
 
//  $sql = "INSERT INTO " . $dbname . "." . $dbtable . " 
//          (name, city) 
//          VALUES 
//          ('Josh', 'Park Hills'), 
//          ('Reba', 'Twin Cities'), 
//          ('Mavven', 'Saint Charles'), 
//          ('Norii', 'Lake St. Louis')";

/*Call the an if else statement to verify it was successful or not see below.
     if (mysqli_query($connectToConnectionTest,  $sql)) {
         echo 'Created Successfully</br>';
     }else {
         echo 'Oh NO, somthing went wrong trying to create.</br>';
     } *\



 
 //                 SELECT VAlUES FROM THE TABLE
 
/* $sql = "SELECT name, city FROM ".$dbname.".".$dbtable; // It will look like this -> SELECT name, city FROM myDB.clients 
   $query =  mysqli_query($connectToConnectionTest,  $sql);      
    
    $i = 1;

    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $name = $row["name"];
        $city = $row["city"];
        echo $name . " " . $city . "</br>";
 
 You can remove the last three lines of code above and enter this json line I will post below. This will give you a deeper detailed view of what exactly you are creating in the While loop.
 echo json_encode($row)."</br>";
    } *\     

?>