<?php
    include("includes/menu.php");
?>

<body>    

<?php
    include("includes/header.php");
?>
<br><br><br>
<a href="">
    <button class="btn btn-primary" style="float: right">ADD</button>
</a>
<br><br>



    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
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
                    <span class="count"></span>
                </h4>
                    <h3 class="text-light">
                    </h3>    
                </a>      
                <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                    <canvas id="widgetChart3" height="53" style="display: block; width: 228px; height: 53px;" width="228"></canvas>
                </div>
            </div>    
        </div>
    </div>



<?php
include("includes/footer.php");
?>