<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Top Stocks</title>
    <style>
        .gain:hover {
            background-color: green;
        }

        .gain:focus {
            border-bottom: 3px solid green;
            border-top: 3px solid green;
        }

        .loss:hover {
            background-color: darkred;
            color: white;
        }

        .loss:focus{
            border-bottom: 3px solid red;
            border-top: 3px solid red;
        }
       
    </style>
</head>

<body>
    <div class="w-50 h-100 mt-2">
        <div>
            <div class="d-flex justify-content-center">
                <a href="gain.php" class="me-3 gain" target="pf" style="text-decoration: none; color:lightgreen;font-size:x-large">Gain </a>
                <a href="loss.php" class="loss" target="pf" style="text-decoration: none; color:lightcoral;font-size:x-large">Loss</a>
            </div>
            <div class="border  border-dark  w-100  mt-3 rounded-2" style="height:410px">

                <iframe src="gain.php" name="pf" class="w-100 h-100 rounded">
                    
                    <?php include('loss.php'); ?>
                </iframe>
            </div>

        </div>
    </div>

    </div>
</body>

</html>