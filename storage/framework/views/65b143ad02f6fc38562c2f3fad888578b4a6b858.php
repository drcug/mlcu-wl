<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Maria Luisa e Carlo Umberto</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

    <style>
        h1 {
            /*font-family: 'Lobster';*/
            font-family: 'Pinyon Script', cursive;
            text-shadow: 2px 2px 4px #000000;
            color: #fff;
        }
        body {
            font-family: 'Lato';
            color: #bbb;
            background: url('/imgs/bg.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .modal-body {
            color: #000;
        }

        .progstatus {
            color: black;
        }
        .fa-btn {
            margin-right: 6px;
        }
        .thumb {
            border-radius: 10px;
            background-color: rgba(0,0,0,0.6);
            border: 10px solid transparent;
        }
        .iban {
            border-radius: 10px;
            background-color: rgba(30,30,100,0.8);
            border: 10px solid transparent;
        }
        .gryout {
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
            filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: gray; /* IE6-9 */
            -webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */
        }
        
        .gryoutimg {
            opacity: 0.4;
        }
        
        

        
    </style>
        <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
    <link rel="shortcut icon" type="image/png" href="/imgs/monogramma.png"/>
    
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Attiva/disattiva navigazione</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                     <img src="/imgs/monogramma.png" style="height:25px" title = "Lista nozze"/>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo e(url('/')); ?>">Lista Nozze</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo e(url('/howto')); ?>">Come funziona - How it works</a></li>
                        <li><a href="<?php echo e(url('/contact')); ?>">Contatta gli sposi</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>


</body>
</html>