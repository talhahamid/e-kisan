<html>
<head>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

<script>  
/*    $(document).ready(function(){  
        $("#").validate({
            rules: {
                : {
                    required: true,
                },
                
            },
            messages: {
                : {
                    required: "select "
                }                              
            }  
        });
    }); */
</script>
</head>

<body> 



<?php
include("includes/menu.php");
?>
<body>
    
<div class="content lg-12">    
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header" style="width: 1050px;">
            <h3>CALCULATIONS</h3>
        </header>     
    </div> 


        

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Add/Remove fields</strong>
                            <a href="calculationsadd.html">
                                <input type="submit" style=" float: right;width: 80px;" name="add" value="ADD" class="btn btn-primary">
                            </a>    
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                        <option value="4">Option #4</option>
                                        <option value="5">Option #5</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="input-small" name="input-small" class="input-sm form-control-sm form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Delete
                                      </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                          </div>
                    </div>    
                </div>
            </div>        
        </div><!-- .animated -->
    </div>

</div>
        

    
        <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        
    
    </body>
    </html>
    