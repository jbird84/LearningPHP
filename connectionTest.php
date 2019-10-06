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

$success = false;

//$selected = mysqli_select_db('$connectToConnectionTest', $dbname);
$connectToConnectionTest = mysqli_connect($dbhost, $dbuser, $dbpassword);


if ($connectToConnectionTest) {
    echo 'Connected to ConnectionTest</br>';
     $success = true;
//    if ($selected) {
//       
//        echo 'Test database selected</br>';
//    }else {
//        $success = false;
//        echo 'Test database not found</br>';
//    }
} else {
    $success = false;
    echo 'Connection to Server Failed</br>';
}

//we are adding to our database with SQL in the below function

if ($success) {
    
    $sql = "CREATE DATABASE " . $dbname; //Creates a new database in this case called meDB NOTE: this is a SQL script
    
  //  mysqli_query($connectToConnectionTest,  $sql);  //this function is a query which makes a REQUEST to do something. First it needs to select a LINK of the connection. Second parameter calls the VAR associated with the SQL Script. In this case we called it $sql
    
    //we will write and if else to make sure the above func is protected.
     if (mysqli_query($connectToConnectionTest,  $sql)) {
         echo 'The database called -> myDB was successfully created</br>';
     }else {
         echo 'Oh NO, somthing went wrong trying to create your database.</br>';
     }
    
}

?>