<!DOCTYPE html>
 <head>
    <meta charset="utf-8" />
    <title> 자비스 </title>
     <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400i|Bangers|Oleo+Script+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400i|Bangers|Oleo+Script+Swash+Caps|Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
    <link rel="stylesheet" href="banner.css">
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
         header1 {
            margin-left: 5px;
            margin-top: 5px;
            width: 70%;
            float: left;
            background-color: #000000;
            color: #ffffff;
            font-family: 'Bangers', cursive;
            font-size: 80pt;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
         #small {
            font-family: 'Song Myung', serif;
            font-size: 15pt;
            text-align: center;
        }
         .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 350px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
             .form input {
                font-family: "Roboto", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                margin: 0 0 15px;
                padding: 15px;
                box-sizing: border-box;
                font-size: 10px;
            }
             .form button {
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: #4CAF50;
                width: 100%;
                border: 0;
                padding: 15px;
                color: #FFFFFF;
                font-size: 10px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
            }
                 .form button:hover, .form button:active, .form button:focus {
                    background: #43A047;
                }
             .form .message {
                margin: 15px 0 0;
                color: #b3b3b3;
                font-size: 10px;
            }
                 .form .message a {
                    color: #4CAF50;
                    text-decoration: none;
                }
             .form .register-form {
                display: none;
            }
         .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
             .container:before, .container:after {
                content: "";
                display: block;
                clear: both;
            }
             .container .info {
                margin: 50px auto;
                text-align: center;
            }
                 .container .info h1 {
                    margin: 0 0 15px;
                    padding: 0;
                    font-size: 20px;
                    font-weight: 300;
                    color: #1a1a1a;
                }
                 .container .info span {
                    color: #4d4d4d;
                    font-size: 10px;
                }
                     .container .info span a {
                        color: #000000;
                        text-decoration: none;
                    }
                     .container .info span .fa {
                        color: #EF3B3A;
                    }
         .search {
            width: 100%;
            padding: 12px 24px;
            background-color: transparent;
            transition: transform 250ms ease-in-out;
            font-size: 14px;
            line-height: 18px;
            color: transparent;
            background-color: transparent;
            background-image: url(http://mihaeltomic.com/codepen/input-search/ic_search_black_24px.svg);
            background-repeat: no-repeat;
            background-size: 18px 18px;
            background-position: 97% center;
            border-radius: 50px;
            border: 1px solid gray;
            transition: all 250ms ease-in-out;
            backface-visibility: hidden;
            transform-style: preserve-3d;
        }
         ::placeholder {
            color: color(gray a(0.8));
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
         header2 {
            width: 25%;
            float: right;
            margin-right: 10px;
            margin-top: 10px;
            margin-left:5px;
        }

         footer {
            font-family: 'Open Sans', sans-serif;
            width: 100%;
            background-color: #f6eded;
            border: 3px solid#808080;
            text-align: center;
            line-height: 200px height: 200px;
            font-size: 80%;
        }
         header {
            height: 480px;
            border: 3px solid#808080;
            background-color: #f6eded;
        }
    </style>
 </head>
 <body>
    <?php require_once('view/nav.php'); ?>
         <ul>
            <form action="search.php">
                 <element class="search">
                     <input class="search__input" type="text" id="search" placeholder="Search">
                </element>
             </form>
         </ul>
    </nav>
     <header>
        <header1>
            <div class="left-page">
                <div style="text-align:center">
                    <br />
                    <br /> JARVIS
                 </div>
                 <div id="small">
                    안녕하세요, 주인님.
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>
         </header1>
         <header2>
            <div class="login-page">
                <div class="form">
                    <form class="register-form">
                        <input type="text" placeholder="name" />
                        <input type="password" placeholder="password" />
                        <input type="text" placeholder="email address" />
                        <button>create</button>
                        <p class="message">Already registered? <a href="#">Sign In</a></p>
                    </form>
                    <form class="login-form">
                        <input type="text" placeholder="username" />
                        <input type="password" placeholder="password" />
                        <button>login</button>
                        <p class="message">Not registered? <a href="#">Create an account</a></p>
                    </form>
                </div>
            </div>
        </header2>
    </header>
     <footer>
        <div class="banner1">
            <br /><br />
            <a href="http://anse.gnu.ac.kr">
                <img src="../학과로고.jpg" width="300px" height="50px">
            </a>
            <a href="http://gnu.ac.kr">
                <img src="../학교로고.jpg" width="200px" height="45px">
            </a>
         </div>
        <div id="footer_wrap" class="div-wrap">
            <div id="footer" class="div-cont">
                 <div id="fcopyright">
                    <em>
                        <br />
                        <br />JARVIS
                    </em>&nbsp;&nbsp;
                    <address>
                        52828 경남 진주시 진주대로 501 경상대학교 공과대학 407동
                    </address>
                    <p class="tel">
                        TEL. 010-xxxx-xxxx &nbsp;&nbsp;&nbsp;E-mail. kakired121@naver.com
                    </p>
                    <p class="copyright">
                        Copyright@GNU All rights Reserved
                        <br />
                        <br />
                        <br />
                    </p>
                </div>
            </div>
        </div>
     </footer>
 </body>
     </html>
