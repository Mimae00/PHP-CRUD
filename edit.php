<!DOCTYPE html>
<html lang="en">


<?php

       include('connection.php');
       include('header.php');

        ?>
<body>

    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
            </div>


            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                </ul>
            </div>

        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>

                    </div>
                </div>

<?php
$query = 'SELECT * FROM inventory
              WHERE
              id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
                $zz= $row['product_name'];
                $i= $row['quantity'];


              }

              $id = $_GET['id'];

?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">

                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Name" name="productname" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="quantity" value="<?php echo $i; ?>">
                            </div>


                            </div>
                            <button type="submit" class="btn btn-default">Update Record</button>



                      </form>
                    </div>
                </div>

            </div>


        </div>


    </div>



    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
