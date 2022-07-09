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
                            <a href="">
                                <input type="submit" style=" float: right;width: 100px;" name="add" value="ADD" class="btn btn-primary form-control">
                            </a>    
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 200px;"></th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 335px;"></th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 148px;"></th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 121px;"> </th>
                                    <th class="sorting" aria-controls="bootstrap-data-table" style="width: 300px; padding-left: 100px;">Action</th>

                                </tr>
                                </thead>
                                <tbody> 
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="deliverymenedit.php">
                                                <input type="submit" style="width: 100px;" name="edit" value="EDIT" class="btn btn-primary form-control">
                                            </a>
                                            <a href="">
                                                <input type="submit" style="width: 100px;" name="delete" value="DELETE" class="btn btn-danger form-control">
                                            </a>        
                                        </td>
                                    </tr> 
                                    
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