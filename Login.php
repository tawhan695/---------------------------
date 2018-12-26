<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
        <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="bootstrap-3.3.7/css/page-login.css">

        <script language="javascript">

            function pasuser(form) {
                
                if (form.username.value == "b5940201997") {
                    document.getElementById("UserError").innerHTML ="";
                     document.getElementById("passError").innerHTML ="" 
                    if (form.password.value == "123456") {
                document.getElementById("passError").innerHTML ="";        
                location = "/PhpProject1/cource/home.php"
                        
                    } else {
                       document.getElementById("passError").innerHTML ="รหัสผ่านไม่ถูกต้อง! กรุณาตรวจสอบ";
                    }
                } else {
                      document.getElementById("UserError").innerHTML ="ชื่อผู้ใช้ไม่ถูกต้อง! กรุณาตรวจสอบ";
                      document.getElementById("passError").innerHTML ="รหัสผ่านไม่ถูกต้อง! กรุณาตรวจสอบ";
                }
            }

</script>
    </head>
    <body>

        <div class="container">
            <div class=" col-md-6 style1">

        <img class="img-responsive" src="img/48377202_814140415584700_4249375672692113408_n.png"  width="520" alt="icon">

    </div>



    <div class=" col-md-6 style2">
        <div class="labelH">
            <h3>เข้าสุ่ระบบ</h3>
        </div>
        <form name="myform" method="post">
            <div class="form-group">

                <label for="username">ชื่อผู้ใช้งาน</label>
                <input type="username" class=" input-lg form-control" id="username" placeholder="b5940201997" name="username" required>
                <p id="UserError"class="text-danger"></p>
            </div>
            <div class="form-group">
                <label for="pwd">รหัสผ่าน</label>
                <input type="password"  class=" input-lg form-control" id="pwd" placeholder="password" name="password" required>
                <p id="passError"class="text-danger"></p>
            </div>
            <div class="form-group ">

                <button type="button" onclick="pasuser(this.form)" class="btn btn-lg btn-info btn-group-justified">ล็อกอิน</button>
            </div>
        </form>

    </div>

</div>




</body>
</html>


