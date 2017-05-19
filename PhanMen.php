<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Dang Ky Tai Khoan.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                font: 400 15px Lato, sans-serif;
                line-height: 1.8;
                color: #818181;
            }
            h2 {
                font-size: 24px;
                text-transform: uppercase;
                color: #303030;
                font-weight: 600;
                margin-bottom: 30px;
            }
            h4 {
                font-size: 19px;
                line-height: 1.375em;
                color: #303030;
                font-weight: 400;
                margin-bottom: 30px;
            }
            .jumbotron {
                background-color: #f4511e;
                color: #fff;
                padding: 100px 25px;
                font-family: Montserrat, sans-serif;
            }
            .container-fluid {
                padding: 60px 50px;
            }
            .bg-grey {
                background-color: #f6f6f6;
            }
            .logo-small {
                color: #f4511e;
                font-size: 50px;
            }
            .logo {
                color: #f4511e;
                font-size: 200px;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail img {
                width: 100%;
                height: 100%;
                margin-bottom: 10px;
            }
            .carousel-control.right, .carousel-control.left {
                background-image: none;
                color: #f4511e;
            }
            .carousel-indicators li {
                border-color: #f4511e;
            }
            .carousel-indicators li.active {
                background-color: #f4511e;
            }
            .item h4 {
                font-size: 19px;
                line-height: 1.375em;
                font-weight: 400;
                font-style: italic;
                margin: 70px 0;
            }
            .item span {
                font-style: normal;
            }
            .panel {
                border: 1px solid #f4511e;
                border-radius:0 !important;
                transition: box-shadow 0.5s;
            }
            .panel:hover {
                box-shadow: 5px 0px 40px rgba(0,0,0, .2);
            }
            .panel-footer .btn:hover {
                border: 1px solid #f4511e;
                background-color: #fff !important;
                color: #f4511e;
            }
            .panel-heading {
                color: #fff !important;
                background-color: #f4511e !important;
                padding: 25px;
                border-bottom: 1px solid transparent;
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            .panel-footer {
                background-color: white !important;
            }
            .panel-footer h3 {
                font-size: 32px;
            }
            .panel-footer h4 {
                color: #aaa;
                font-size: 14px;
            }
            .panel-footer .btn {
                margin: 15px 0;
                background-color: #f4511e;
                color: #fff;
            }
            .navbar {
                margin-bottom: 0;
                background-color: #f4511e;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #fff !important;
            }
            .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #f4511e !important;
                background-color: #fff !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #fff !important;
            }
            footer .glyphicon {
                font-size: 20px;
                margin-bottom: 20px;
                color: #f4511e;
            }
            .slideanim {visibility:hidden;}
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            @keyframes slide {
                0% {
                    opacity: 0;
                    transform: translateY(70%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0%);
                }
            }
            /*  @-webkit-keyframes slide {
                  0% {
                      opacity: 0;
                      -webkit-transform: translateY(70%);
                  }
                  100% {
                      opacity: 1;
                      -webkit-transform: translateY(0%);
                  }
              }
              @media screen and (max-width: 768px) {
                  .col-sm-4 {
                      text-align: center;
                      margin: 25px 0;
                  }
                  .btn-lg {
                      width: 100%;
                      margin-bottom: 35px;
                  }
              }
              @media screen and (max-width: 480px) {
                  .logo {
                      font-size: 150px;
                  }
              }*/
            /* Add a dark gray background color to the modal header and center text */
            .modal-header, h4, .close {
                background-color: #1589FF;
                color: #fff !important;
                text-align: center;
                font-size: 30px;
            }

            .modal-header, .modal-body {
                padding: 40px 50px;
            }
        </style>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#thongtin">TH�NG TIN</a></li>
                        <li><a href="#dichvu">D?CH V?</a></li>
                        <li><a href="#hotro">H? TR?</a></li>
                        <li><a href="#sodo">S� �?</a></li>
                        <li> <a data-toggle="modal" data-target="#myModal">��NG NH?P</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron text-center">
            <h1>Tr?nh c?p h? chi?u</h1>
        </div>
        <div class="slide-animation-container">
            <div class="customers view indent">
                <div class="container">
                    <header>
                        <h3><span class="glyphicon glyphicon-user"></span><a href="index.php"> TRANG CH?</a> > ��NG K?</h3>
                    </header>
                    <div class="view">
                        <div class="container">
                            <header>
                                <h3 class="col-md-6"><span class="glyphicon glyphicon-credit-card   "></span> C?p h? chi?u</h3>
                            </header>
                            <form name="caphochieu" novalidate method="POST" action="#">
                                <div class="customerEdit">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4><span></span></h4>
                                            <br />
                                        </div>
                                    </div>

                                    <br />
                                    <h3><u>Th�ng tin c� b?n</u></h3>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-2">
                                            H? v� t�n
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Vui l?ng nh?p �?y �? h? t�n" name="#" class="form-control" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            Gi?i t�nh
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio">
                                                <label class="radio">
                                                    <input type="radio" name="gender" value="Nam"/>
                                                    Nam                                                    
                                                </label>                                                
                                            </div>
                                            <div class="radio">
                                                <label class="radio">
                                                    <input type="radio" name="gender" value="N?"/>
                                                    N?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            Ng�y th�ng n�m sinh
                                        </div>
                                        <div class="col-md-4">

                                            <input type="datetime" placeholder="Ng�y/Th�ng/N�m" name="#" class="form-control" required/>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            N�i sinh
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtemail" placeholder="Nh?p n�i sinh" class="form-control" required />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            S? CMND
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Nh?p cmnd g?m 9 ch? s?" name="txtaddress"  class="form-control" required />
                                        </div>
                                        <div class="col-md-1">
                                            Ng�y c?p
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" placeholder="Nh?p ng�y c?p" name="txtngaycap" class="form-control" required/>
                                        </div>
                                        <div class="col-md-1">
                                            N�i c?p
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" placeholder="Nh?p n�i c?p" name="txtnoicap" class="form-control"/>
                                        </div>
                                    </div>

                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            D�n t?c
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Nh?p d�n t?c" name="txtcity" class="form-control" required />
                                        </div>
                                        <div class="col-md-1">
                                            T�n gi�o
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="txttongiao" placeholder="Nh?p t�n gi�o" class="form-control"/>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            �i?n tho?i
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Nh?p s? �i?n tho?i" name="state" class="form-control" required />
                                        </div>
                                    </div>
                                    <br/>
                                    <h3><u>�?a ch? th�?ng tr�(�?a ch? theo H? Hh?u)</u></h3>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            T?nh th�nh
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Nh?p t?nh th�nh" name="tinhthanh" class="form-control" required />
                                        </div>
                                        <div class="col-md-1">
                                            Qu?n/Huy?n
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="txtquanhuyen" class="form-control" placeholder="Nh?p t�n qu?n/huy?n"/>
                                        </div>
                                        <div class="col-md-1">
                                            Ph�?ng/X?
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="txtphuongxa" class="form-control" placeholder="Nh?p ph�?ng/x?"/>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            �?a ch? nh�
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtdiachi" class="form-control" placeholder="Nh?p �?a ch? theo h? kh?u"/>  
                                        </div>
                                    </div>
                                    <br/>
                                    <h3><u>�?a ch? t?m tr�(ghi theo T?m tr�)</u></h3>
                                    <div class="row">
                                        <div class="col-md-2">
                                            T?nh th�nh
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Nh?p t?nh th�nh" name="tinhthanh" class="form-control" required />
                                        </div>
                                        <div class="col-md-1">
                                            Qu?n/Huy?n
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="txtquanhuyen" class="form-control" placeholder="Nh?p t�n qu?n/huy?n"/>
                                        </div>
                                        <div class="col-md-1">
                                            Ph�?ng/X?
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="txtphuongxa" class="form-control" placeholder="Nh?p ph�?ng/x?"/>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-2">
                                            �?a ch? nh�
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="txtdiachi" class="form-control" placeholder="Nh?p �?a ch? theo h? kh?u"/>  
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" >
                                                Save
                                            </button>
                                            &nbsp;&nbsp;
                                            <button class="btn btn-danger" >
                                                Tr? L?i
                                            </button>
                                        </div>
                                    </div>
                                    <br />
                                </div>
                            </form>
                        </div>
                        <!-- Used to open the Modal -->
                    </div>
                    <!--<a class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</a>-->

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="psw"><span class="glyphicon glyphicon-user"></span> T�n T�i Kho?n</label>
                                            <input type ="text" class="form-control" name="psw" placeholder="Nh?p T�n">
                                        </div>
                                        <div class="form-group">
                                            <label for="usrname"><span class="glyphicon glyphicon-lock"></span> M?t Kh?u</label>
                                            <input type="text" class="form-control" id="usrname" placeholder="Nh?p Pass">
                                        </div>
                                        <button type="submit" class="btn btn-block">��ng nh?p
                                            <span class="glyphicon glyphicon-ok"></span>
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span> H?y
                                    </button>
                                    <p>B?n Ch�a C� T�i Kho?n?<a href="#">��ng K? Ngay</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container y kien phan hoi -->
                    <div id="contact" class="container-fluid bg-grey">
                        <h2 class="text-center">? KI?N PH?N H?I </h2>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>V? D�n Ph?c V? 24/7</p>
                                <p><span class="glyphicon glyphicon-map-marker"></span> Tr? S? Qu�n 1. Ph�?ng B?n Th�nh. TP H? Ch� </p>
                                <p><span class="glyphicon glyphicon-phone"></span> 0165344776</p>
                                <p><span class="glyphicon glyphicon-envelope"></span> congannd@gmail.com</p>
                            </div>
                            <div class="col-sm-7 slideanim">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" id="name" name="name" placeholder="T�n" type="text" required>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Nh?p " type="email" required>
                                    </div>
                                </div>
                                <textarea class="form-control" id="comments" name="comments" placeholder="l?i b?nh..." rows="5"></textarea><br>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <button class="btn btn-default pull-right" type="submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Kiem tra thong tin form nhap-->
                    <script>
                        document.forms['adduser'].name.focus();
                        function set_focus()
                        {
                            document.forms['adduser'].name.focus();
                        }
                        function check_submid()
                        {
                            var frm=window.document.adduser;
                            if(frm.email.value=='')
                                alert('Vui long nhap email');
                            return false;
                            
                        }
                    </script>

                    <!-- Add Google Maps -->
                    <div id="googleMap" style="height:400px;width:100%;"></div>
                    <script>
                        function myMap() {
                            var myCenter = new google.maps.LatLng(41.878114, -87.629798);
                            var mapProp = {center: myCenter, zoom: 12, scrollwheel: false, draggable: false, mapTypeId: google.maps.MapTypeId.ROADMAP};
                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                            var marker = new google.maps.Marker({position: myCenter});
                            marker.setMap(map);
                        }
                    </script>
                    <footer class="container-fluid text-center">
                        <a href="#myPage" title="To Top">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a>
                        <p>Thi?t K? V� Copy By C�ng Ty Kh�ng Th�nh Vi�n<a href="https://www.fb.com/phiisme" title="�i �?n "> N� :))</a></p>
                    </footer>
                   

                    </body>
                    </html>
