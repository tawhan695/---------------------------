                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!DOCTYPE html>
<html>
    <head>
        <title>ระบบยืมคืนเล่มปริญญานิพนธ์</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap-3.3.7/css/main.css">
        <script src="../bootstrap-3.3.7/js/jquery.min.js" ></script>
        <script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>   

    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-img navbar-inverse navbar- navbar-fixed-top  navbar-earlycollapse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="home.php"><img src="../img/48377202_814140415584700_4249375672692113408_n.png" width="100" height="30"></a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li   class="active "><a href="home.php">หน้าแรก</a></li>
                            <li><a href="borrowing.php">เล่มปริญญานิพนธ์</a></li>   
                            <li><a href="Borrow.php">รายการแจ้งยืม-คิวจอง</a></li>    

                            <form class="navbar-form navbar-left Seaarch">
                                <div class="input-group">
                                    <input type="text" class="form-control"  placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="User.php"><span class="glyphicon glyphicon-user"></span> ทนงศักดิ์ บุญมา</a></li>
                            <li><a href="../Login.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>       

        <div class="container">
            <br>
            <br>
            <br>
             <br>
            <br>
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="../img/s1.png" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="../img/s2.png" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="item">
                        <img src="../img/s3.png" alt="New York" style="width:100%;">
                        <div class="carousel-caption">

                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="container">

            <h1> <span class="label label-success ">การยืมเล่มปริญญานิพนธ์</span></h1>
            <br>
            <div class="container">
                <h4>
                1.คลิกเมนู เล่มปริญญานิพนธ์เพื่อค้นหาเล่นปริญญานิพนธ์ที่ต้องการ<br>
                2.สามารถเลือก ดาวน์โหลดไฟล์เล่มปริญญานิพนธ์แบบ PDF ได้ ในหน้าแจ้งยืม<br>
                3.ถ้าอยากได้เล่มจริง กด แจ้งยืม ที่ปุ่มแจ้งยืม <br>
                4.ถ้าหากเล่มปริญญานิพนธ์ ไม่อยู่ในภาควิชา เมื่อต่อคิวจอง ระบบจะจิงคิวยืมให้ตามลำดับ<br>
                5.เล่มปริญญานิพนธ์ เล่มสามารถยืมได้เพียง 5 วัน<br>
                </h4>
            </div>

            <br>
            <h1> <span class="label label-success ">การคืนเล่มปริญญานิพนธ์</span></h1>
            <br>
            <div class="container">
                <h4>
                    1.เมื่อถึงยืมครบ 5 วัน ให้นำเล่นปริญญานิพนธ์มาส่งคืนเจ้าหน้าที่ผู้รับผิดชอบ<br>
                    2.หากเกิน 5 วัน จะคิดค่าปรับวันละ 5 บาทต่อหนึ่งเล่ม<br>
                    3.หากนิสิตทำเล่มปริญญานิพนธ์ชำรุดเสียหาย นิสิตต้องต้องชดใช้ด้วยการสำเนาเล่มปริญญานิพนธ์นั้นมาส่งเจ้าหน้าที่ผู้รับผิดชอบ<br>
                   
                </h4>
            </div>
            <br>
            <br>
        </div>

    <div class="panel-footer panel-footer-h ">
        <div class="container text-center">
            <div class="">
                <img src="../img/48377202_814140415584700_4249375672692113408_n.png" width="200">
            </div>


        </div>
    </div>
</body>
</html>
