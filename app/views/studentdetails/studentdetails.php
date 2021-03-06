<html>

<head>
    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Import custom css -->
    <link rel="stylesheet" href="../../../daycare-pure/public/css/studentreg.css">
</head>

<body>

<!-- Navugation bar -->
<?php
include($_SERVER['DOCUMENT_ROOT'].'/daycare-pure/app/views/partials/navbar/navbar.php');

?>



<div id="wrapper">

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/daycare-pure/app/views/partials/sidebar/sidebar.php');

    ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container mt-5 ">

        <div class="row">
            <div class="col-md-5 mt-5 col-sm-12">
                <img src='../../../daycare-pure/public/uploadimages/babies/<?php echo $data->photo?>' class='img-fluid fit-image'>
            </div>
            <div class="col-md-7 col-sm-12">
            
                <div class="row text-center">
                    <div class="col-md-12 col-sm-12">
                        <h1 class="text-bold text-white"> <?php echo $data->firstname. " ". $data->lastname ?></h1>
                    </div>
                </div>
                <div class="alert alert-primary"  >
                <div class="row mt-3 ml-3">
                    <h5 class="text-primary"> <i class="fas fa-birthday-cake mr-3 "></i> <?php echo $data->birthday ?></h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> <i class="fas fa-male mr-3"></i> <?php echo $data->gender ?></h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> <i class="fas fa-map-marker-alt mr-3"></i> <?php echo $data->address ?></h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Hours of Child Care -  <?php echo $data->hoursofchildcare ?> hours</h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Days of Week -  <?php echo $data->daysofweek ?> Week</h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Weight -  <?php echo $data->weight ?> </h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Height -  <?php echo $data->height ?> </h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Medical Allergise -  <?php echo $data->medicationallergies ?> </h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Cronical Health Consern -  <?php echo $data->cronichealthconsern ?> </h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Narrations -  <?php echo $data->narrations ?> </h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-primary"> Special notes -  <?php echo $data->specialnotes ?> </h5>
                </div>
            </div>
            <div class="alert alert-danger">
                <div class="row mt-3 ml-3">
                    <h5 class="text-danger"> Emergency Contact Name-  <?php echo $data->ename ?> </h5>
                </div>
                <div class="row mt-2 ml-3">
                    <h5 class="text-danger"> Emergency Contact Number-  <?php echo $data->ephoneno ?> </h5>
                </div>
            </div>
            </div>

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