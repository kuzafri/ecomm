<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap 4 Responsive Layout Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>
    <style>
        .row {
            margin-top: 10px;
        }

        .col-xl-3 {
            background-color: #CCCCD8;
            border-radius: 5px;
            margin: 10px;
        }

        .containermaster {
            margin: auto;
            display: flex;
            position: relative;
            margin-top: 30px;

        }

        #parent_div_1,
        #parent_div_2 {
            width: 50%;
            height: 30%;
            background-color: #CCCCD8;
            margin-right: 10px;
            float: left;
            border-radius: 10px;

        }

        .child_div_1 {
            float: left;
            margin-right: 5px;
            padding: 20px;
        }

        .fontmaster {
            display: inline-block;
            font-family: Raleway, sans-serif;
            overflow: auto;
        }

        @media (max-width: 480px) {
            .containermaster {
                margin: 10px;
                display: table;
                position: relative;
                margin-top: 30px;

            }

            #parent_div_1,
            #parent_div_2 {
                margin: 10px;
                width: 100%;
                padding: 10px;
            }

            .child_div_1>img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }

            .fontmaster {
                text-align: center;
            }
        }



        @media (min-width: 1200px) {
            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0px !important;
                max-width: 33.3% !important;
                background-color: #CCCCD8;
                border-radius: 5px;
                margin: 10px;
            }
        }
    </style>
</head>

<body>

    @include('navbar')

    <div class="container">

        <div class="row" style="float: center">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <h2>EWAN CAFE</h2>
                <p>Aneka makanan lauk masakan pada tengah hari</p>
                <p><a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank" class="btn btn-success">Menu &raquo;</a></p>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <h2>WAFFLE CAFE</h2>
                <p>Kudap kudap </p>
                <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Menu &raquo;</a></p>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <h2>UNCLE BOB CAFE</h2>
                <p>Menyajikan makanan bergoreng dan kudap kudap seperti ayam gunting</p>
                <p><a href="https://www.tutorialrepublic.com/javascript-tutorial/" target="_blank" class="btn btn-success">Menu &raquo;</a></p>
            </div>
        </div>

        <div class="row" style="float: center">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <h2>PAK YUS CAFE</h2>
                <p>Aneka makanan lauk masakan pada tengah hari</p>
                <p><a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank" class="btn btn-success">Menu &raquo;</a></p>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <h2>JERAI CAFE 1</h2>
                <p>Terkenal dengan nasi ayam</p>
                <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Menu &raquo;</a></p>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <h2>JERAI CAFE 2</h2>
                <p>Terkenal dengan ayam penyet</p>
                <p><a href="https://www.tutorialrepublic.com/javascript-tutorial/" target="_blank" class="btn btn-success">Menu &raquo;</a></p>
            </div>
        </div>

        <!-- <div class="containermaster">
            <div id='parent_div_1'>
                <div class='child_div_1'>
                    <img src="image/zaf.JPG" style="height: 60%; width: 30%;">
                    <p class="fontmaster"><i>"Kalau takleh bagi boleh"-zaf</i></p>
                </div>
            </div>

            <div id='parent_div_2'>
                <div class='child_div_1'>
                    <img src="image/ajiq.jpg" style="height: 60%; width: 30%;">
                    <p class="fontmaster"><i>"Kita buat dia bukan dia buat kita"-ajiq</i></p>
                </div>
            </div>
        </div> -->
    </div>
    <hr>



    <footer>
        <!-- <div class="row">
            <div class="col-md-6 master ">
                <p>Copyright &copy; 2019 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a>
                <span class="text-muted mx-2">|</span>
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div> -->
    </footer>
    </div>
</body>

</html>