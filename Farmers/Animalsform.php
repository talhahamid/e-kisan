<html>
<head>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

<script>  
    $(document).ready(function(){  
        $("#animalsform").validate({
            rules: {
                age: {
                    required: true,
                },
                location: {
                    required: true,
                },
                price: {
                    required: true,
                },
            },
            messages: {
                age: {
                    required: "select age"
                },
                location: {
                    required: "specify location"
                },
                price: {
                    required: "specify price"
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

<body>    

<?php
    include("includes/header.php");
?>
<br><br><br>



        <div class="container">
            <div class="login-content"> 
                <div class="login-form">
                    <form method="post" id="animalsform" action="<?php echo base_url('Farmers/resourcestore')?>">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    <strong>Age:</strong>
                                </label>
                            </div>    
                            <div class="col-12 col-md-9">
                                
                                <select name="age" class="form-control" style="width: 350px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    <strong>Location:</strong>
                                </label>
                            </div>
                             <div class="col-12 col-md-9">
                                <input type="text" name="location" class="form-control">
                            </div> 
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    <strong>Price:</strong>
                                </label>
                            </div>
                             <div class="col-12 col-md-9">
                                <input type="text" name="price" class="form-control">
                            </div> 
                        </div>
                        
                        <br><hr>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">
                                    Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>







<?php
include("includes/footer.php");
?>