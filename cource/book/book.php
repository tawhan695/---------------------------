<!DOCTYPE html>
<html>
    <head>
        <title>book</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../bootstrap-3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../bootstrap-3.3.7/css/main.css">

        <link rel="stylesheet" href="book-css.css">
        <script src="../../bootstrap-3.3.7/js/jquery.min.js" ></script>
        <script src="../../bootstrap-3.3.7/js/bootstrap.min.js"></script>       
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
                    <a class="navbar-brand" href="../home.php"><img src="../../img/48377202_814140415584700_4249375672692113408_n.png" width="100" height="30"></a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="../home.php">หน้าแรก</a></li>
                            <li class="active "><a href="../borrowing.php">เล่มปริญญานิพนธ์</a></li>   
                            <li><a href="../Borrow.php">รายการแจ้งยืม</a></li>    

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
                            <li><a href="../User.php"><span class="glyphicon glyphicon-user"></span> ทนงศักดิ์ บุญมา</a></li>
                            <li><a href="../../Login.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>       

        <div id="section1" class="container">
            <div class="row">

                <ul class="breadcrumb">

                    <li><a href="../borrowing.php">เล่มปริญญานิพนธ์</a></li>
                    <li class="active">แจ้งยืม</li>        
                </ul>
                 
                <div class="col-sm-6 ">
                    <img  class="img img-responsive"src="../../img/Book/book1.jpg"alt="img" width="470">
                </div>

                <div class="col-sm-6">
                    <h1>ชื่อเล่มปริญญานิพนธ์</h1>
                    <p>
                       เนื้อหาย่อ ##########################################
                       #################################################
                       #################################################
                          ##############################################
                       #################################################
                       #################################################
                        #################################################
                       #################################################
                          ##############################################
                       #################################################
                       ################################################
                        #################################################
                       #################################################
                          ##############################################
                       #################################################
                       ################################################
                        #################################################
                       #################################################
                          ##############################################
                       #################################################
                       ################################################
                    </p>
                    <br>
                    <br>
                    <h4>สถานะ : <span class="label label-danger">ไม่อยู่ในภาควิชาฯ</span></h4>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6">
                            <button type="button" id="ju"class=" button1 btn btn-success btn-lg btn-toolbar" data-toggle="modal" data-target="#myModal">ต่อคิวจอง</button>



                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">

                                        <div class=" modal-body text-center">
                                            <h3>ยืนยัน ต่อคิวจอง</h3>
                                            <br>
                                            <p class="text-danger">ลำดับคิว ที่ 5</p>
                                            <p>*เล่มปริญญานิพนธ์</p>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6"> <a><button type="button" class="btn-model1 btn btn-info btn-block" data-dismiss="modal" onclick="ju()">ตกลง</button></a></div>

                                                <div class="col-sm-6"><button type="button" class="btn-model2 btn btn-danger btn-block" data-dismiss="modal">ยกเลิก</button></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div >
                        <div class="col-sm-6 col-lg-6 col-md-6">
                            <button type="button" class=" button2 btn btn-danger btn-lg btn-toolbar" data-toggle="modal" data-target="#myModal2"><img src="../../img/icon/icons8_PDF.ico">ดาวน์โหลดไฟล์PDF </button>
                            <div class="modal fade" id="myModal2" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">

                                        <div class=" modal-body text-center">
                                            <img class="img-responsive center-block" src="../../img/Book/icons8_PDF_104px.png">
                                            <h3>ดาวน์โหลดไฟล์ PDF</h3>
                                            <p class="text-info"><span><img src="../../img/icon/icons8_PDF.ico"></span> ชื่อเล่มปริญญานิพนธ์</p>
                                            <div class="row">
                                                <div class="col-sm-6"> <button type="button" class="btn-model1 btn btn-info btn-block" onclick="myFunction()">ดาวน์โหลด</button></div>
                                                <a href="../book/PDF.pdf" download="ชื่อเล่มปริญญานิพนธ์.pdf" id="download" hidden></a>

                                                <div class="col-sm-6"><button type="button" class="btn-model2 btn btn-danger btn-block" data-dismiss="modal">ยกเลิก</button></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="line"></div> 

            <div class="tableJ">
                <div>
                    <h2 class="text-success ">
                        สถานะเล่มปริญญานิพนธ์
                       
                    </h2>
                    
                    <h4>
                        เล่มปริญญษนิพนธ์ ถูกยืมโดย :<span class="badge">ทนงศักดิ์ บุญมา รหัสนิสิต 5940201997</span>
                    </h4>
                </div>
                <br>
                <br>
                <div id="Qjong">
                    <h2 class="text-success">รายชื่อคิวจอง</h2>
                    <p>กดปุ่ม "แจ้งยืม" เพื่อต่อคิวยืม </p>
                    <p>เมื่อถึงคิวระจะแจ้งเตือนให้รับทราบ</p>
                    <br>
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ลำดับคิว</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>รหัสนิสิต</th>
                                    <th>วันเดิอนปีที่จอง</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>สม</td>
                                    <td>บุญมา</td>
                                    <td>5940201991</td>
                                    <td>17-12-2561</td>
                                    <td><span class="badge">รออนุมัติ</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>ดี</td>
                                    <td>บุญมา</td>
                                    <td>5940201992</td>
                                    <td>18-12-2561</td>
                                    <td><span class="badge">รออนุมัติ</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>บุญ</td>
                                    <td>บุญมา</td>
                                    <td>5940201993</td>
                                    <td>19-12-2561</td>
                                   <td><span class="badge">รออนุมัติ</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>รวย</td>
                                    <td>บุญมา</td>
                                    <td>5940201994</td>
                                    <td>20-12-2561</td>
                                   <td><span class="badge">รออนุมัติ</span></td>
                                </tr>
                                <tr class="bg-primary">
                                    <td>5</td>
                                    <td>ทนงศักดิ์</td>
                                    <td>บุญมา</td>
                                    <td>5940201997</td>
                                    <td>21-12-2561</td>
                                    <td><span class="badge">รออนุมัติ</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="panel-footer panel-footer-h">
            <div class="container text-center">
                <div class="">
                    <img src="../../img/48377202_814140415584700_4249375672692113408_n.png" width="200">
                </div>


            </div>
        </div>
    <script>
function myFunction() {
    document.getElementById('download').click();
     window.location.reload();
}
function ju(){
     document.getElementById('ju').innerHTML ="ยกเลิก คิวจอง";
}
</script>

    </body>
</html>
