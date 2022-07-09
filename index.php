
<?php

       include('connection.php');
       include('header.php');

        ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PHP CRUD using MySQLi Database</a>
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
                         PHP CRUD With Datatables
                        </h1>

                    </div>
                </div>



             <div class="col-lg-12">
                        <h2>List of Records</h2> <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                    </tr>
                               </thead>
                                <tbody>
                                 <?php
                $query = 'SELECT * FROM inventory';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['product_name'].'</td>';
                            echo '<td>'. $row['quantity'].'</td>';

                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['id'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
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



    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
