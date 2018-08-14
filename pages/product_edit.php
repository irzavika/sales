<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Product</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../dist/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "../view/navigation.php" ?>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product Update Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php
                include "../php/connect.php";

                $product_id = $_GET["product_id"];
                
                $query = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '$product_id'");
                $data = mysqli_fetch_array($query);
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="../php/handler.php?act=updateProduct" method="post">
                                        <div class="form-group">
                                            <label for="disabledSelect">Product ID</label>
                                            <input class="form-control" id="disabledInput" type="text" name="product_id" value="<?php echo $data['product_id'] ;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="product" value="<?php echo $data['product'] ;?>" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" placeholder="Enter text" type="number" name="qty" value="<?php echo $data['qty'] ;?>" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" placeholder="Enter text" type="number" name="price" value="<?php echo $data['price'] ;?>" required="price">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Footer -->
    <?php include "../view/footer.php"; ?>

</body>

</html>

