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
    <title>E-KISAN | Dealers</title>
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
<?php
include("includes/menu.php");
?>   

<body>    

<?php
include("includes/header.php");
?>


        

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                            <a href="<?php echo base_url('Farmers/Productspriceadd')?>">
                                <input type="submit" style=" float: right;width: 100px;" name="add" value="ADD" class="btn btn-primary form-control">
                            </a>    
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 200px;"> Kisaan Name</th>
                                     <th class="sorting" aria-controls="bootstrap-data-table" style="width: 335px;">Quantity</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 148px;">Rate</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 121px;">Address</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 121px;">Type</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 121px;">Quality</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 350px; padding-left: 100px;">Action</th> 

                                </tr>
                                </thead>
                                <tbody> 
                                    <tr role="row" class="odd">

                                    <?php if($alldata): ?>
                                    <?php foreach($alldata as $datalist): 
                                        //print_r($datalist);exit;
                                    ?>                                     
                                        <td><?php echo $datalist->username;?></td>
                                        <td><?php echo $datalist->quantity;?></td>
                                        <td><?php echo $datalist->rate;?></td>
                                        <td><?php echo $datalist->address;?></td>
                                        <td><?php echo $datalist->type;?></td>
                                        <td><?php echo $datalist->quality; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Farmers/Productspriceedit/'.$datalist->id)?>">
                                                <input type="submit" style="width: 100px;" name="edit" value="EDIT" class="btn btn-primary form-control">
                                            </a>
                                            <a href="<?php echo base_url('Farmers/Productspricedelete/'.$datalist->id)?>">
                                                <input type="submit" style="width: 100px;" name="delete" value="DELETE" class="btn btn-danger form-control">
                                            </a>        
                                        </td>
                                    </tr> 
                                    <?php endforeach; ?>
                                    <?php endif; ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>    
                </div>
            </div>        
        </div><!-- .animated -->
    </div>

</div>
        

<?php
include("includes/footer.php");
?>