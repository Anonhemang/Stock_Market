<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-100">
    <div class="table-responsive w-100 m-auto">
    <table class="table" border="1">
        <!-- <tr>
            <th>Name</th>
            <th>Prev Close</th>
            <th>Open</th>
            <th>Hign</th>
            <th>Low</th>
            <th>VWAP</th>
            <th>Volume</th>
        </tr> -->
        <!-- <tr>
            <td>Reliance</td>
            <td>75</td>
            <td>78</td>
            <td>80</td>
            <td>70</td>
            <td>55</td>
            <td>50</td>
        </tr> -->
    </table>
    </div>
    </div>
</body>
</html>



<?php 
error_reporting('0');

$server = "localhost";
$uname = "root";
$pass = "";
$dbname = "sm";

$conn = mysqli_connect("$server","$uname","$pass","$dbname");

if($conn){
    //echo "conected";
}else{
    echo "not connected";
}

$sql = "SELECT Symbol, Prev_Close ,openn,High ,Low, VWAP, Volume  FROM `stock` limit 10";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)> 0){
   echo "<div class='w-100'>";
   echo "<div class='table-responsive w-100 m-auto'>";
    echo "<table class='table' border='1'>";
    echo 
        "<tr>
            <th>Name</th>
            <th>Prev Close</th>
            <th>Open</th>
            <th>Hign</th>
            <th>Low</th>
            <th>VWAP</th>
            <th>Volume</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo 
                "<tr>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Prev_Close']}</td>
                    <td>{$row['openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['VWAP']}</td>
                    <td>{$row['Volume']}</td>
                 </tr>";
        }
}


?>