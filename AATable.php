<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</head>

<body>



    <?php
    error_reporting('0');



    // create database connection
    $conn = mysqli_connect('localhost', 'root', '', 'sm');
    // check if connection successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // check if any records found
    $sql = " UPDATE stockdata SET Percent_change = ((Openn-Closee)/AdjClose)*100; ";
    // $result = mysqli_query($conn, $sql);
    // if (mysqli_num_rows($result) > 0) {
    //     // display records in HTML table
    //     echo "<div class='w-100 h-100 d-flex justify-content-center'>";
    //     echo "<table class='w-50 mt-5 table text-center' border='1'>";
    //     echo " <tr>
    //             <th>Name</th>
    //             <th>Value</th>
    //             <th>Change</th>
    //             <th>Change(in %)</th>
    //             <th>Open</th>
    //             <th>Hign</th>
    //             <th>Low</th>
    //             <th>Prev</th>
    //         </tr>";
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo "<tr'>
    //         <td>{$row['Name']}</td>
    //         <td>{$row['Value']}</td>
    //         <td>{$row['Changee']}</td>
    //         <td>{$row['Percent_change']}</td>
    //         <td>{$row['Open']}</td>
    //         <td>{$row['High']}</td>
    //         <td>{$row['Low']}</td>
    //         <td>{$row['Prev']}</td>
    //     </tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "No records found";
    // }


    ?>


    <?php
    error_reporting('0');

    if ($_GET['id'] == 'all') {
        function all()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM stockdata limit 10 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        all();
    }
    ?>




<?php
    error_reporting('0');

    if ($_GET['id'] == 'm25') {
        function minustwfi()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -25 and -20 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minustwfi();
    }
    ?>








<?php
    error_reporting('0');

    if ($_GET['id'] == 'm20') {
        function minustwenty()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -20 and -15 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minustwenty();
    }
    ?>








<?php
    error_reporting('0');

    if ($_GET['id'] == 'm15') {
        function minusfifteen()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -15 and -10 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusfifteen();
    }
    ?>













    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm10') {
        function minusten()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -10 and -5 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusten();
    }
    ?>




    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm5') {
        function minusfive()
        {
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -5 and 0";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusfive();
    }
    ?>










    <?php
    error_reporting('0');
    //Between 0 to 10
    if ($_GET['id'] == 0) {
        function zero()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 0 and 5 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                         <th>Date</th>
                         <th>Open</th>
                         <th>High</th>
                         <th>Low</th>
                         <th>Close</th>
                                           <th>Symbol</th>
                         <th>Change(in %)</th>
                     </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                     <td>{$row['Date']}</td>
                     <td>{$row['Openn']}</td>
                     <td>{$row['High']}</td>
                     <td>{$row['Low']}</td>
                     <td>{$row['Closee']}</td>
                                        <td>{$row['Symbol']}</td>
                     <td>{$row['Percent_change']}</td>
 
                 </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }

        zero();
    }
    ?>


    <?php
    error_reporting('0');
    //Between 10 to 20
    if ($_GET['id'] == 1) {
        function five()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 5 and 10 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        five();
    }
    ?>

    <?php

    if ($_GET['id'] == 2) {
        function tenn()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 10 and 15 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        tenn();
    }
    ?>

    <?php
    //between 20 to 30
    if ($_GET['id'] == 3) {
        function fif()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 15 and 20 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        fif();
    }
    ?>

    <?php
    //between 30 to 40
    if ($_GET['id'] == 4) {
        function twenty()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 20 and 25 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        twenty();
    }
    ?>




    <?php
    //between 40 to 50
    if ($_GET['id'] == 5) {
        function twfi()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 25 and 30 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                        <th>Date</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         <th>Symbol</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Date']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      <td>{$row['Symbol']}</td>
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        twfi();
    }

    ?>

    <?php
    //between 50 to 60

    // if ($_GET['id'] == 6) {
    //     function sixty()
    //     {

    //         // create database connection
    //         $conn = mysqli_connect('localhost', 'root', '', 'sm');
    //         // check if connection successful
    //         if (!$conn) {
    //             die("Connection failed: " . mysqli_connect_error());
    //         }
    //         // check if any records found
    //         $sql = "SELECT * FROM `stockdata` where Percent_change between 60 and 70 ";
    //         $result = mysqli_query($conn, $sql);
    //         if (mysqli_num_rows($result) > 0) {
    //             // display records in HTML table
    //             echo "<div class='w-100 h-100 d-flex justify-content-center'>";
    //             echo "<table class='w-50 mt-5 table text-center' border='1'>";
    //             echo " <tr>
    //                     <th>Date</th>
    //                     <th>Open</th>
    //                     <th>High</th>
    //                     <th>Low</th>
    //                     <th>Close</th>
    //                  //                     <th>Symbol</th>
    //                     <th>Change(in %)</th>
    //                 </tr>";
    //             while ($row = mysqli_fetch_assoc($result)) {
    //                 echo "<tr'>
    //                 <td>{$row['Date']}</td>
    //                 <td>{$row['Openn']}</td>
    //                 <td>{$row['High']}</td>
    //                 <td>{$row['Low']}</td>
    //                 <td>{$row['Closee']}</td>
    //                   //                 <td>{$row['Symbol']}</td>
    //                 <td>{$row['Percent_change']}</td>

    //             </tr>";
    //             }
    //             echo "</table>";
    //         } else {
    //             echo "No records found";
    //         }
    //     }

    //     sixty();
    // }

    ?>






    <?php


    // //between 60 to 70

    // if ($_GET['id'] == 7) {
    //     function seventy()
    //     {

    //         // create database connection
    //         $conn = mysqli_connect('localhost', 'root', '', 'sm');
    //         // check if connection successful
    //         if (!$conn) {
    //             die("Connection failed: " . mysqli_connect_error());
    //         }
    //         // check if any records found
    //         $sql = "SELECT * FROM `stockdata` where Percent_change between 70 and 80 ";
    //         $result = mysqli_query($conn, $sql);
    //         if (mysqli_num_rows($result) > 0) {
    //             // display records in HTML table
    //             echo "<div class='w-100 h-100 d-flex justify-content-center'>";
    //             echo "<table class='w-50 mt-5 table text-center' border='1'>";
    //             echo " <tr>
    //                     <th>Date</th>
    //                     <th>Open</th>
    //                     <th>High</th>
    //                     <th>Low</th>
    //                     <th>Close</th>
    //                  //                     <th>Symbol</th>
    //                     <th>Change(in %)</th>
    //                 </tr>";
    //             while ($row = mysqli_fetch_assoc($result)) {
    //                 echo "<tr'>
    //                 <td>{$row['Date']}</td>
    //                 <td>{$row['Openn']}</td>
    //                 <td>{$row['High']}</td>
    //                 <td>{$row['Low']}</td>
    //                 <td>{$row['Closee']}</td>
    //                   //                 <td>{$row['Symbol']}</td>
    //                 <td>{$row['Percent_change']}</td>

    //             </tr>";
    //             }
    //             echo "</table>";
    //         } else {
    //             echo "No records found";
    //         }
    //     }

    //     seventy();
    // }

    ?>




    <?php


    //between 70 to 80

    // if ($_GET['id'] == 8) {
    //     function eighty()
    //     {

    //         // create database connection
    //         $conn = mysqli_connect('localhost', 'root', '', 'sm');

    //         // check if connection successful
    //         if (!$conn) {
    //             die("Connection failed: " . mysqli_connect_error());
    //         }

    //         // handle button click



    //         // check if any records found
    //         $sql = "SELECT * FROM `sample` WHERE percent_change BETWEEN 70 and 80;";
    //         $result = mysqli_query($conn, $sql);
    //         if (mysqli_num_rows($result) > 0) {

    //             // display records in HTML table
    //             echo "<div class='w-100 h-100 d-flex justify-content-center'>";
    //             echo "<table class=' w-50 mt-5 table text-center' border='1'>";

    //             echo " <tr>
    //             <th>Name</th>
    //             <th>Value</th>
    //             <th>Change</th>
    //             <th>Change(in %)</th>
    //             <th>Open</th>
    //             <th>Hign</th>
    //             <th>Low</th>
    //             <th>Prev</th>
    //                 </tr>";
    //             while ($row = mysqli_fetch_assoc($result)) {
    //                 echo "<tr'>
    //                         <td>{$row['Name']}</td>
    //                         <td>{$row['Value']}</td>
    //                         <td>{$row['Changee']}</td>
    //                         <td>{$row['Percent_change']}</td>
    //                         <td>{$row['Open']}</td>
    //                         <td>{$row['High']}</td>
    //                         <td>{$row['Low']}</td>
    //                         <td>{$row['Prev']}</td>
    //             </tr>";
    //             }
    //             echo "</table>";
    //         } else {
    //             echo "No records found";
    //         }
    //     }

    //     eighty();
    // }

    ?>




    <?php


    //between 80 to 90

    // if ($_GET['id'] == 9) {
    //     function ninty()
    //     {

    //         // create database connection
    //         $conn = mysqli_connect('localhost', 'root', '', 'sm');

    //         // check if connection successful
    //         if (!$conn) {
    //             die("Connection failed: " . mysqli_connect_error());
    //         }

    //         // handle button click



    //         // check if any records found
    //         $sql = "SELECT * FROM `sample` WHERE percent_change BETWEEN 80 and 90;";
    //         $result = mysqli_query($conn, $sql);
    //         if (mysqli_num_rows($result) > 0) {

    //             // display records in HTML table
    //             echo "<div class='w-100 h-100 d-flex justify-content-center'>";
    //             echo "<table class=' w-50 mt-5 table text-center' border='1'>";

    //             echo " <tr>
    //             <th>Name</th>
    //             <th>Value</th>
    //             <th>Change</th>
    //             <th>Change(in %)</th>
    //             <th>Open</th>
    //             <th>Hign</th>
    //             <th>Low</th>
    //             <th>Prev</th>
    //                 </tr>";
    //             while ($row = mysqli_fetch_assoc($result)) {
    //                 echo "<tr'>
    //                          <td>{$row['Name']}</td>
    //                          <td>{$row['Value']}</td>
    //                          <td>{$row['Changee']}</td>
    //                          <td>{$row['Percent_change']}</td>
    //                          <td>{$row['Open']}</td>
    //                          <td>{$row['High']}</td>
    //                          <td>{$row['Low']}</td>
    //                          <td>{$row['Prev']}</td>
    //             </tr>";
    //             }
    //             echo "</table>";
    //         } else {
    //             echo "No records found";
    //         }
    //     }

    //     ninty();
    // }

    ?>


    <?php


    //between 90 to 100

    // if ($_GET['id'] == 10) {
    //     function hunderd()
    //     {

    //         // create database connection
    //         $conn = mysqli_connect('localhost', 'root', '', 'sm');

    //         // check if connection successful
    //         if (!$conn) {
    //             die("Connection failed: " . mysqli_connect_error());
    //         }

    //         // handle button click



    //         // check if any records found
    //         $sql = "SELECT * FROM `sample` WHERE percent_change BETWEEN 90 and 100;";
    //         $result = mysqli_query($conn, $sql);
    //         if (mysqli_num_rows($result) > 0) {

    //             // display records in HTML table
    //             echo "<div class='w-100 h-100 d-flex justify-content-center'>";
    //             echo "<table class=' w-50 mt-5 table text-center' border='1'>";

    //             echo " <tr>
    //                     <th>Name</th>
    //                     <th>Value</th>
    //                     <th>Change</th>
    //                     <th>Change(in %)</th>
    //                     <th>Open</th>
    //                     <th>Hign</th>
    //                     <th>Low</th>
    //                     <th>Prev</th>
    //                 </tr>";
    //             while ($row = mysqli_fetch_assoc($result)) {
    //                 echo "<tr'>
    //                 <td>{$row['Name']}</td>
    //                 <td>{$row['Value']}</td>
    //                 <td>{$row['Changee']}</td>
    //                 <td>{$row['Percent_change']}</td>
    //                 <td>{$row['Open']}</td>
    //                 <td>{$row['High']}</td>
    //                 <td>{$row['Low']}</td>
    //                 <td>{$row['Prev']}</td>
    //             </tr>";
    //             }
    //             echo "</table>";
    //         } else {
    //             echo "No records found";
    //         }
    //     }

    //     hunderd();
    // }

    ?>






</body>

</html>