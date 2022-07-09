<?php
    include("includes/menu.php");
?>

<body>    

<?php
    include("includes/header.php");
?>

        <div class="container">
            <div class="login-content"> 
                <div class="login-form">
                    <form method="" action="<?php echo base_url('Farmers/')?>">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Age
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="age" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    From
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="from" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    To
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="to" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Location
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="location" class="form-control">
                            </div>
                        </div>
                        
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