<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Spinner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: aquamarine;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 12px;
            text-align: justify;
        }

        .center {
            text-align: center;

        }

        .fontnunggu {
            font-size: 50px;
        }

        .biaragaktengah {
            margin-top: 100px;
            margin-bottom: 100px;
            margin-right: 100px;
            margin-left: 100px;
        }

        .jarakspinner {
            margin-right: 100px;
            margin-left: 100px;
        }

        .spinner {
            animation: spin 1s infinite linear;
            animation-delay: 500ms;
            /* Starts spinning after 0.5s */
        }

        .spinner2 {
            animation: spin 1s infinite linear;
            animation-delay: 500ms;
            /* Starts spinning after 0.5s */
        }
    </style>
</head>

<body>
    <p class="biaragaktengah"> </p>
    <p class="center fontnunggu">
        <b> Simple Sabotage Manuals <br>
            Please wait..... </b>
    <div class="center fontnunggu jarakspinner">
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
        <div class="spinner-grow text-light "></div>
    </div>
    </p>

    <p class=" center"> <b>Funfact : did you know that the CIA overthrown a lot of goverment in the cold war era and
            installed a puppet leader ?</b></p>

</body>
