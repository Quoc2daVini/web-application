<?php
    include '../classes/adminlogin.php';
?>

<?php
    $newLogin = new adminlogin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminUser = $_POST['adminUser'];
        $adminPass = $_POST['adminPass'];

        $login_check = $newLogin->login_admin($adminUser, $adminPass);
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UIT Pro - Log in</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <section id="content">
            <form action="login.php" method="POST">
                <h1>Admin Login</h1>
                
                <div>
                    <input type="text" required="" name="adminUser"/>
                </div>
                <div>
                    <input type="password" required="" name="adminPass"/>
                </div>
                <div>
                    <input type="submit" required="" value="log in"/>
                </div>
            </form>
        </section>
    </div>
</body>
<!--
<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="assets/images/logo/logo.png">
                                        <h2 class="m-b-0">????ng nh???p</h2>
                                    </div>
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">T??n t??i kho???n:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" required="" name="adminUser" placeholder="T??n t??i kho???n">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">M???t kh???u:</label>
                                            <a class="float-right font-size-13 text-muted" href="">Qu??n m???t kh???u?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" required="" name="adminPass" placeholder="M???t kh???u">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    Kh??ng c?? t??i kho???n?
                                                    <a class="small" href="">????ng k??</a>
                                                </span>
                                                <button class="btn btn-primary">????ng nh???p</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>s
        </div>
    </div>
    <script src="assets/js/vendors.min.js"></script>
    <script src="assets/js/app.min.js"></script>
-->
</body>
</html>