<?php include "includes/header.php" ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php" ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Admin
                            <small>Nuruddeen</small>
                        </h1>

                        <?php
                        if(isset($_GET['source'])){
                            $source = $_GET['source'];
                        }else{
                            $source = "";
                        }

                        switch($source){
                            case '34';
                            echo "yoo";
                            break;

                            case 'edit_post';
                            include "includes/edit_post.php";
                            break;
                            
                            case 'Addpost';
                            include "includes/Addpost.php";
                            break;

                            default:
                            include "includes/viewAllPosts.php"; 
                        }
                        
                        
                        
                        ?>


                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include "includes/footer.php" ?>