<?php
// error_reporting(0);
class penjualan
{	
	public $conn;
	function __construct()
	{
		$this->conn=new mysqli("localhost","root","","penjualan");
	}

	function __destruct()
	{
		$this->conn->close();
	}

	function rupiah($angka){
        $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }

	function addNewProduct($product, $qty, $price){
		$cek = $this->conn->query("SELECT * FROM product
	    WHERE product= '$product'");
		
		if($cek->num_rows==0) {
			$sql = "insert into product(
			product, qty, price, date)
			values('$product','$qty','$price', now())";
		
			$hasil=$this->conn->query($sql);
	        
	        if($hasil){
	            echo"<script>alert('Data Added Successfully');document.location='../pages/product_list.php'</script>";
	        }
	    } else {
	         echo"<script>alert('Data Already Exists');document.location='../pages/product_list.php'</script>";
	    }
	}

	function updateProduct($product, $qty, $price){
		$hasil = $this->conn->query("UPDATE product SET 
			product = '$product', 
			qty = '$qty', 
			price = '$price',
			date = now()
			WHERE product = '$product'");

		if ($hasil){
			echo"<script>alert('Data Updated Successfully');document.location.href='../pages/product_list.php'</script>";
		} else{
			echo "<script>alert('Data Cannot be Updated');document.location.href='../pages/product_list.php'</script>";
		}
	}

	function deleteProduct($product_id){
		$hasil = $this->conn->query("DELETE FROM product WHERE product_id='$product_id'");

		if ($hasil) {
			// echo "ok";
			echo"<script>alert('Data Deleted Successfully');document.location='../pages/product_list.php'</script>";
		} else {
			// echo "gagal";
		    echo"<script>alert('Data Cannot Be Deleted');document.location='../pages/product_list.php'</script>"; 
		}
	}
}
$function = new penjualan();
?>