<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product List</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
        <?php include "../view/navigation.php"; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product Lists</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product Lists
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <a href="product_form.php"><button type="button" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i>Add New Product</button></a>
                            <br>
                            <br>
                            <table width="100%" class="table table-striped" id="dataTables-example">
                                <?php
                                    include '../php/function.php';
                                    
                                    $hasil = $function->conn->query("select * from product");
                                    
                                    echo "<thead align='center'><tr><th>#</th>";
                                    echo "<th>Product</th>";
                                    echo "<th align='center'>Qty</th>";
                                    echo "<th>Price</th>";
                                    echo "<th>Last Update</th>";
                                    echo "<th>Action</th></tr></thead>";
                                   
                                    $i = 0;
                                    while ($data = mysqli_fetch_array($hasil))
                                    {   
                                        
                                        echo "<tr><td>";
                                        echo ++$i;
                                        echo "</td>";
                                        echo "<td>$data[1]</td>";
                                        echo "<td>$data[2]</td>";
                                        echo "<td>";
                                        echo $function->rupiah($data[3]);
                                        echo "</td>";
                                        echo "<td>$data[4]</td>";
                                        echo "<td><a href=\"product_edit.php?product_id=$data[0]\" data-toggle=\"tooltip\" title=\"Edit\"><button type=\"button\" class=\"btn btn-primary btn-circle\"><i class=\"fa fa-edit fa-fw\"></i></button></a>\n";
                                        echo "<a href=\"../php/handler.php?act=deleteProduct&product_id=$data[0]\" data-toggle=\"tooltip\" title=\"Delete\"><button type=\"button\" class=\"btn btn-danger btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></a></td></tr>";
                                    }
                                ?>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

<!-- Footer -->
<?php include "../view/footer.php"; ?>

</body>

</html>
