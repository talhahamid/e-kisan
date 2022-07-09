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
                            <a href="<?php echo base_url('Farmers/rentersadd')?>">
                                <input type="submit" style=" float: right;width: 100px;" name="add" value="ADD" class="btn btn-primary form-control">
                            </a>    
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 200px;">NAME</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 335px;">RENT</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 148px;">DURATION</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 121px;">CONTACT</th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 300px; padding-left: 100px;">Action</th>

                                </tr>
                                </thead>
                                <tbody> 
                                    <?php if($renters): ?>
                                    <?php foreach($renters as $renters): ?>
                                    <tr role="row" class="odd">
                                        <td><?php echo $renters['name']; ?></td>
                                        <td><?php echo $renters['rent']; ?></td>
                                        <td><?php echo $renters['duration']; ?></td>
                                        <td><?php echo $renters['contact']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Farmers/rentersedit/'.$renters['id'])?>">
                                                <input type="submit" style="width: 100px;" name="edit" value="EDIT" class="btn btn-primary form-control">
                                            </a>
                                            <a href="<?php echo base_url('Farmers/rentersdelete/'.$renters['id'])?>">
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
        </div>
    </div>

</div> 
        


<?php
include("includes/footer.php");
?>
    