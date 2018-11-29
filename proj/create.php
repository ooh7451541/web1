<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 자비스 </title>

    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400i|Bangers|Oleo+Script+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400i|Bangers|Oleo+Script+Swash+Caps|Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <style>
        header {
            background-color: #000000;
            color: #ffffff;
            font-family: 'Bangers', cursive;
            font-size: 80pt;
        }
        #small {
            font-family: 'Song Myung', serif;
            font-size: 15pt;
            text-align: center;
        }
        footer {
            font-family: font-family: 'Open Sans', sans-serif;
            width: 100%;
            background-color: #f6eded;
            border: 3px solid#808080;
            text-align: center;
            line-height: 200px height: 200px;
            font-size: 80%;
        }
    </style>

</head>


<body>
    <head>
        <style>
        body {
            overflow-x: hidden
        }

        nav {
            width: 100%;
        }

        .nav_wrapper {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            background: #2f3b3f;
        }

        .menu {
            width: 100%;
            height: auto;
            background: #2f3b3f;
        }

            .menu ul {
                padding: 0px;
                margin: 0px;
                list-style: none;
                position: relative;
                display: inline-block;
            }

            .menu > li > ul.sub_menu {
                min-width: 10em;
                padding: 4px 0;
                background-color: #f4f4f4;
                border: 1px solid #fff;
            }

            .menu ul li {
                padding: 0px;
            }

            .menu > ul > li {
                display: inline-block;
            }

            .menu ul li a {
                display: block;
                text-decoration: none;
                color: #fff;
                font-size: 14px;
            }

                .menu ul li a:hover {
                    background: #efa666;
                    color: #fff;
                    transition: all .5s ease-out;
                }

            .menu ul li.hover > a {
                background: #efa666;
                color: #fff;
            }

            .menu ul li > a {
                padding: 15px;
            }

            .menu ul ul {
                display: none;
                position: absolute;
                top: 100%;
                min-width: 160px;
                background: #39484d;
            }

            .menu ul li:hover > ul {
                display: block;
            }

            .menu ul ul > li {
                position: relative;
            }

                .menu ul ul > li a {
                    padding: 10px 15px;
                    height: auto;
                    background: #39484d;
                }

                    .menu ul ul > li a:hover {
                        background: #efa666;
                        color: #fff;
                    }

            .menu ul ul ul {
                position: absolute;
                left: 100%;
                top: 0;
            }
        </style>
    </head>
    <body>
<?php require_once('view/nav.php'); ?>

<form action="create_process.php" method="post">
  <p>
    <input type="text" name="title" cols="100" placeholder="Title">
    <input type="hidden" name="date" value="<?php date('y-m-d h:i:s')?>">
  </p>
  <p>
    <textarea name="description" placeholder="Description" rows="25" cols="200"></textarea>
  </p>
  <p>
    <input type="submit">
  </p>
</form>
