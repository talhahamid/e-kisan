<?php

    include("includes/menu.php");
?>

<body style="background-color: LightGray;">    

<?php
    include("includes/header.php");
?>

<br><br><br>
<!-- 
<div  style="padding-left: 1000px;">
<a href="addsales">
    <button class="btn btn-primary">ADD</button>
</a>
</div>
 -->
<br><br>

<?php if($sales): ?>
<?php foreach($sales as $sales): ?>

    <div class="col-sm-6 col-lg-3">        
        <div class="card text-white bg-flat-color-3">   
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
                    <a href="<?php echo base_url('Farmers/salescategorylist/'.$sales['id'])?>">  
                        <h3  class="text-light"><span class="count"><?php echo $sales['name']; ?></span></h3>
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

<?php
include("includes/footer.php");
?>


