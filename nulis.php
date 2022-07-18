<?php
$nulis = "https://raw.githubusercontent.com/suryamsj/Botulis/main/asset/img/no-data-animate.svg";
if ($_POST) {
    $text = $_POST['text'];
    $url = "https://hadi-api.herokuapp.com/api/canvas/nulis2?text=" . $text;
    // $file = file_get_contents($url);
    // $data = json_decode($file);

    if ($url === "https://hadi-api.herokuapp.com/api/canvas/nulis2?text=") {
        echo '<script>
                alert("Mohon masukan text!");
                </script>';
    } else {
        $nulis = $url;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nulis Mager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        [class*="col-sm"] {
            background-color: blue;
            border-radius: 5px;
        }

        .center {
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://telegra.ph/file/eb4d5b4481424481fd2a0.png" alt="" width="150px" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>

    <!-- form -->
    <div class="container mt-5">
        <form action="" method="post" class="row g-3">
            <div class="col-md-6">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Form Nulis</b></li>
                        <li class="list-group-item">
                            <label for="" class="form-label" style="font-family: cursive;"><b>Text</b></label>
                            <textarea name="text" id="" class="form-control" placeholder="Masukan text yang akan di tulis..." rows="5px"></textarea>
                            <div class="mt-3">
                                <button class="btn btn-primary">Nulis</button>
                                <a href="nulis.php" class="btn btn-dark">Ulang</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Gambar</b></li>
                        <li class="list-group-item">
                            <img src="<?= $nulis ?>" class="card-img-top" alt="Not Found.." height="450px" width="450px">
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>