<html>

<head>
    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Import custom css -->
    <link rel="stylesheet" href="../../../daycare-pure/public/css/parentreg.css">
</head>

<body>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/daycare-pure/app/views/partials/navbar/navbar.php');

?>


<div id="wrapper">

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/daycare-pure/app/views/partials/sidebar/sidebar.php');

    ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <?php  if($_GET['error'] != null){
            echo "<div class='alert alert-danger mt-5'>" .$_GET['error']. "</div>";
        }; ?>
        <?php  if($_GET['success'] != null){
            echo "<div class='alert alert-primary mt-5'>" .$_GET['success']. "</div>";
        }; ?>
        <div class="container mt-1 ">
            <form action="updateparent">
                <p class="pt-5">Parent Registration</p>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="parentName">Parent Name </label>
                            <input type="text" class="form-control" id="parentName" name="parentName" placeholder="Enter Parent Name" value="<?php echo $data->parentName?>">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nic">NIC </label>
                            <input type="text" class="form-control" id="nic" name="nic" value="<?php echo $data->nic?>" placeholder="Enter NIC">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address </label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $data->address?>" placeholder="Enter Address 1">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobileno">Mobile no </label>
                            <input type="text" class="form-control" id="mobileno" name="mobileno" value="<?php echo $data->mobileno?>" placeholder="Enter Mobile no">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email?>" placeholder="Enter Email">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $data->password?>" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="repassword">Re-Enter Password </label>
                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-Enter Password">
                        </div>
                    </div>
                </div>

                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data->id?>">

                <div class="row">
                    <button type="submit" class="btn btn-primary btn-lg mt-5 mx-3">Submit</button>
                </div>

            </form>

        </div>

    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



<!-- Font Awsome -->
<script src="https://kit.fontawesome.com/75dbf31c78.js" crossorigin="anonymous"></script>


<!-- Import JQurey in bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<!-- import custom java script -->
<script src="home.js" type="text/javascript"></script>

</body>

</html>