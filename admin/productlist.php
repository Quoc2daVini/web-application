<?php
    include '../inc/header.php';
    include 'adminsidenav.php';
?>

<?php 
    include '../classes/classes.php';
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
                                <a class="breadcrumb-item" href="#">Sản phẩm</a>
                                <span class="breadcrumb-item active">Danh sách sản phẩm</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Danh sách sản phẩm</h4>
                            <div class="m-t-25">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th> 
                                                <th scope="col">ID</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Danh mục</th>
                                                <th scope="col">Thương hiệu</th>
                                                <th scope="col">Chi tiết sản phẩm</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Loại</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pd = new product();
                                            $pdList = $pd->show_product();
                                            if($pdList){
                                                $i = 0;
                                                while($result = $pdList->fetch_assoc()){ 
                                                    $i++;                                  
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $result['productID']; ?></td>
                                                <td><?php echo $result['image']; ?></td>
                                                <td><?php echo $result['productName']; ?></td>
                                                <td><?php echo $result['catID']; ?></td>
                                                <td><?php echo $result['brandID']; ?></td>
                                                <td><?php echo $result['productDesc']; ?></td>
                                                <td><?php echo $result['price']; ?></td>
                                                <td><?php 
                                                    if($result['price']==0){
                                                        echo "Không nổi bật";
                                                    } else echo "Nổi bật";
                                                 ?></td>
                                            </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                <!-- Content Wrapper END -->
<?php
    include '../inc/footer.php';
?>