<?php include "include/header.php" ?>

<div id="wrapper">

<!-- Navigation -->
<?php include "include/navigation.php" ?>
<!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
Welcome To Transcript Generating System
<!-- <small> <?php echo $_SESSION['username'] ?></small> -->
</h1>
<!-- <ol class="breadcrumb">
<li>
    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
</li>
<li class="active">
    <i class="fa fa-file"></i> Blank Page
</li>
</ol> -->
</div>
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="panel panel-green">
<div class="panel-heading">
<div class="row">
    <div class="col-xs-3">
        <i class="fa fa-file-text fa-5x"></i>
    </div>
    <div class="col-xs-9 text-right">

<!-- <?php
$query = "SELECT * FROM posts";
$select_all_post = mysqli_query($connection,$query);
$post_counts = mysqli_num_rows($select_all_post);
 echo "<div class='huge'>{$post_counts}</div>"

?> -->

  
        <div>Completed Result</div>
    </div>
</div>
</div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Results</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php include "include/footer.php"  ?>