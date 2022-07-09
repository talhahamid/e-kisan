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
    <title>E-KISAN | Products</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="apple-touch-icon" href="../Layout/apple-icon.png">
    <link rel="shortcut icon" href="../Layout/favicon.ico">

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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

<?php include('includes/menu.php'); ?>
<?php include('includes/header.php'); ?>

<br>
<div  style="padding-left: 1000px;">
<a href="/ekisan/Dealers/buy">
    <button class="btn btn-primary">Back</button>
</a>
</div>

<br><br>

<?php if($productsprice): ?>
<?php foreach($productsprice as $productsprice): ?>

    <div class="col-sm-6 col-lg-3">        
        <div class="card text-white bg-flat-color-4">   
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <a href="<?php echo base_url('Dealers/productcategorylist/'.$productsprice['id'])?>">  
                        <h3  class="text-light"><span class="count"><?php echo $productsprice['name']; ?></span></h3>
                    </a>
                </h4>     
                            
                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;">        
                    </iframe>
                    <canvas id="widgetChart3" height="53" style="display: block; width: 228px; height: 53px;" width="228">
                    </canvas>
                </div>
            </div>    
        </div>
             
    </div>

<?php endforeach; ?>
<?php endif; ?>


<?php include('includes/footer.php'); ?>
</body>
</html>