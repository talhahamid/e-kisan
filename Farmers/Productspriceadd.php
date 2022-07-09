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
    <title>E-KISAN | Products Price Add</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="apple-touch-icon" href="../Layout/apple-icon.png">
    <link rel="shortcut icon" href="../Layout/favicon.ico">
    <link rel="stylesheet" href="../Layout/assets/css/normalize.css">
    <link rel="stylesheet" href="../Layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Layout/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Layout/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../Layout/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../Layout/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../Layout/assets/scss/style.css">
    <link href="../Layout/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

<script>  
    $(document).ready(function(){  
        $("#productspriceadd").validate({
            rules: {
                name: {
                    required: true,
                },
                quantity: {
                    required: true,
                    number: true
                },
                rate: {
                    required: true,
                    number: true
                },
                address: {
                    required: true
                },
                producttype: {
                    required: true
                },
                quality: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "specify name"
                },
                quantity: {
                    required: "specify quantity"
                },
                rate: {
                    required: "specify rate"
                },
                address: {
                    required: "specify address"
                },
                producttype: {
                    required: "specify producttype"
                },
                quality: {
                    required: "specify quality"
                }
            }  
        });
    }); 
</script> 


</head>
<body>
<?php
include("includes/menu.php");
?>

<br><br>
<div style="padding-left: 800px;">
<a href="javascript:window.history.go(-1);" class="btn btn-primary">Previous</a>
</div>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content"> 
                <div class="login-form">
                    <h3>Add Products Price </h3><hr><br>
                    <form id="productspriceadd" action="<?php echo base_url('Farmers/Productspricestore')?>">
                        <div class="row form-group">
                            <div class="col col-md-4">
                                <label class=" form-control-label">
                                    NAME
                                </label>
                            </div>

                            <div class="col-12 col-md-8">
                                <select name="name" class="form-control">
                                    <?php 
                                    if($producttype): ?>
                                <?php foreach($producttype as $producttype): ?>
                                    <option value="$producttype['id']"><?php echo $producttype['name']; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </select>
                            </div>
                                
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-4">
                                <label class=" form-control-label">
                                   Product Type
                                </label>
                            </div>
                            <div class="col-12 col-md-8">
                                <select name="producttype" class="form-control">
                                <?php if($productsubcategorytype): ?>
                                <?php foreach($productsubcategorytype as $productsubcategorytype): ?>
                                    <option value="$productsubcategorytype['id']"><?php echo $productsubcategorytype['name']; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </select>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-4">
                                <label class=" form-control-label">
                                    Quality
                                </label>
                            </div>
                            <div class="col-12 col-md-8">
                                <select name="quality" class="form-control">
                                    <option class="form-control">Low</option>
                                    <option class="form-control">Medium</option>
                                    <option class="form-control">High</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-4">
                                <label class=" form-control-label">
                                    RATE
                                </label>
                            </div>
                            <div class="col-12 col-md-8">
                                <input type="number" name="rate" class="form-control">
                            </div>
                        </div>    

                        <div class="row form-group">
                            <div class="col col-md-4">
                                <label class=" form-control-label">
                                    Quantity
                                </label>
                            </div>
                            <div class="col-12 col-md-8">
                                <input type="number" name="quantity" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-4">
                                <label class=" form-control-label">
                                    Address
                                </label>
                            </div>
                            <div class="col-12 col-md-8">
                                <textarea type="text" name="address" class="form-control"></textarea>
                            </div>
                        </div>

                        
                        <br><hr>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

                    

    <script src="../Layout/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../Layout/assets/js/widgets.js"></script>
    <script src="../Layout/assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../Layout/assets/js/dashboard.js"></script>
    <script src="../Layout/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../Layout/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../Layout/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    

</body>
</html>
