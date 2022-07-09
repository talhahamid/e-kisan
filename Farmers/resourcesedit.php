<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> 
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-KISAN | EDIT</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="apple-touch-icon" href="../../Layout/apple-icon.png">
    <link rel="shortcut icon" href="../../Layout/favicon.ico">

    <link rel="stylesheet" href="../../Layout/assets/css/normalize.css">
    <link rel="stylesheet" href="../../Layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Layout/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../Layout/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../Layout/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../Layout/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../../Layout/assets/scss/style.css">
    <link href="../../Layout/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    
     <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

<script>  
    $(document).ready(function(){  
        $("#resourcesedit").validate({
            rules: {
                animals: {
                    required: true,
                },
                seeds: {
                    required: true,
                },
                vehicles: {
                    required: true,
                },
                workers: {
                    required: true,
                },
                fertilizers: {
                    required: true,
                },
                pesticides: {
                    required: true,
                },
                patri: {
                    required: true,
                },
            },
            messages: {
                animals: {
                    required: "specify animals"
                },
                seeds: {
                    required: "specify seeds"
                },                        
                vehicles: {
                    required: "specify vehicles"
                },
                workers: {
                    required: "specify workers"
                },
                fertilizers: {
                    required: "specify fertilizers"
                },
                pesticides: {
                    required: "specify pesticides"
                },
                patri: {
                    required: "specify patri"
                },
            }  
        });
    }); 
</script>
</head>

<body>
<?php
include("includes/menu.php");
?>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content"> 
                <div class="login-form">
                    <h3>Edit Resources</h3><hr><br>
                    <form method="post" id="resourcesedit" action="<?php echo base_url('Farmers/resourcesupdate')?>">
                        <input type="hidden" name="id" value="<?php echo $resources['id']; ?>">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    ANIMALS
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="animals" value="<?php echo $resources['Animals']; ?>" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    SEEDS
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="seeds" value="<?php echo $resources['Seeds']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    VEHICLES
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="vehicles" value="<?php echo $resources['Vehicles']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    WORKERS
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="workers" value="<?php echo $resources['Workers']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    FERTILIZERS
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="fertilizers" value="<?php echo $resources['Fertilizers']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    PESTICIDES
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="pesticides" value="<?php echo $resources['Pesticides']; ?>" class="form-control">
                            </div>
                        </div>
                            
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    PATRI
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="patri" value="<?php echo $resources['Patri']; ?>" class="form-control">
                            </div>
                        </div>
                        <br><hr>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">EDIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

                    

    <script src="../../Layout/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../../Layout/assets/js/dashboard.js"></script>
    <script src="../../Layout/assets/js/widgets.js"></script>
    <script src="../../Layout/assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../../Layout/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../../Layout/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../../Layout/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    

</body>
</html>
