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
                            <a href="<?php echo base_url('Farmers/dealersadd')?>">
                                <input type="submit" style=" float: right;width: 100px;" name="add" value="ADD" class="btn btn-primary form-control">
                            </a>    
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 200px;">Name</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 335px;">Crop</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 148px;">Rate</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 121px;">Total Price</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 300px; padding-left: 100px;">Action</th>

                                </tr>
                                </thead>
                                <tbody> 
                                    <?php if($dealers): ?>
                                    <?php foreach($dealers as $dealers): ?>
                                    <tr role="row" class="odd">
                                        <td><?php echo $dealers['name']; ?></td>
                                        <td><?php echo $dealers['crop']; ?></td>
                                        <td><?php echo $dealers['rate']; ?></td>
                                        <td><?php echo $dealers['total_price']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Farmers/dealersedit/'.$dealers['id'])?>">
                                                <input type="submit" style="width: 100px;" name="edit" value="EDIT" class="btn btn-primary form-control">
                                            </a>
                                            <a href="<?php echo base_url('Farmers/dealersdelete/'.$dealers['id'])?>">
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