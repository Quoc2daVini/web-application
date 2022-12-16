<?php
    include '../inc/header.php';
    include 'adminsidenav.php';
?>

<?php
    include '../classes/product.php';
?>

<?php
//     $prod = new product();

//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $brandName = $_POST['brandName'];
//         $insertbrand = $brand->insert_brand($brandName);
//    }
?>

<!-- Page Container START -->
<div class="page-container">  
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">SẢN PHẨM</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
                                <a class="breadcrumb-item" href="productlist.php">Danh sách sản phẩm</a>
                                <span class="breadcrumb-item active">Thêm sản phẩm</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <?php
                            // if(isset($insertbrand)){
                            //     echo $insertbrand;
                            // }
                            ?>
                            <form action="brandadd.php" method="POST">
                            <!-- <div class="m-t-25"> -->
                                <div class="row">
                                    <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Tên sản phẩm</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="productName" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Danh mục</span>
                                        </div>
                                        <select class="btn btn-default dropdown-toggle" name="catID" aria-describedby="basic-addon1">
                                            <option>Chọn danh mục</option>
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Thương hiệu</span>
                                        </div>
                                        <select class="btn btn-default dropdown-toggle" name="brandID" aria-describedby="basic-addon1">
                                            <option>Chọn thương hiệu</option>
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Mô tả</span>
                                        </div>
                                        <textarea class="form-control" name="productDesc" aria-describedby="basic-addon1"></textarea>
                                    </div>
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Giá</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nhập giá sản phẩm" name="price" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nổi bật</span>
                                        </div>
                                        <select class="btn btn-default dropdown-toggle" name="productID" aria-describedby="basic-addon1">
                                            <option>Chọn loại sản phẩm</option>
                                            <option value="1">Noi bat</option>
                                            <option value="">0 Noi bat</option>

                                        </select>
                                    </div>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload hình ảnh</label>
                                    <!-- </div>
                                    
                                    <div> -->
                                         <input type="submit" class="btn btn-primary btn-tone m-r-5" required="" value="Thêm"/>
                                    </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                            </form>
                        </div>
                    </div>   

</div>
            <!-- Page Container END -->
            <!-- page css -->
<link href="assets/vendors/select2/select2.css" rel="stylesheet">

<!-- page js -->
<script src="assets/vendors/select2/select2.min.js"></script>
<?php
    include '../inc/footer.php';
?>