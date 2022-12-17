<?php
    //include '../lib/database.php';
    //include '../helpers/format.php';
?>

<?php
class product 
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert_product($data, $files)
    {
        $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
        $catID = mysqli_real_escape_string($this->db->link, $data['catID']);
        $brandID = mysqli_real_escape_string($this->db->link, $data['brandID']);
        $productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);
        $feature = mysqli_real_escape_string($this->db->link, $data['feature']);

        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $files['image']['name'];
        $file_size = $files['image']['size'];
        $file_temp = $files['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;

        $uploaded_image = "uploads/".$unique_image;
        // $alert ="alert";
        // return $alert;
        if($productName=="" || $catID=="" || $brandID=="" || $productDesc=="" || $price=="" || $feature=="" || $file_name==""){
            $alert = " Các trường dữ liệu không được để trống";
            return $alert;
        } else{
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_product(productName, catID, brandID, productDesc, price, feature, image) VALUES ('$productName', '$catID','$brandID','$productDesc','$price','$feature','$unique_image')";
            $result = $this->db->insert($query);
            
            if($result){
                $alert ="Thêm sản phẩm thành công!";
                return $alert;
            } else{
                $alert ="Thêm sản phẩm không thành công!";
                return $alert;
            }
        }
    }
    
    public function update_product($productName, $id)
    {
        $productName = $this->fm->validation($productName);

        $productName = mysqli_real_escape_string($this->db->link, $productName);

        if(empty($productName)){
            $alert = "Tên danh mục không được để trống";
            return $alert;
        } else{
            $query = "UPDATE tbl_product SET productName = '$productName' WHERE productID = '$id'";
            $result = $this->db->update($query);
            
            if($result){
                $alert ="Sửa danh mục thành công!";
                return $alert;
            } else{
                $alert ="Sửa danh mục không thành công!";
                return $alert;
            }
        }
    }
    public function delete_product($id)
    {
        $query = "DELETE FROM tbl_product WHERE productID = '$id'";
        $result = $this->db->delete($query);
            
        if($result){
            $alert ="Xóa danh mục thành công!";
            return $alert;
        } else{
            $alert ="Xóa danh mục không thành công!";
            return $alert;
        }
    }
    

    public function show_product(){
        $query = "SELECT * FROM tbl_product ORDER BY productID ASC";
        $result = $this->db->select($query);
        return $result;
    }

    public function get_product_by_id($id){
        $query = "SELECT * FROM tbl_product WHERE productID = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
}
?>