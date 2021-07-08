<?php
include('top.php');
if(isset($_GET['type'])&& $_GET['type']!=='' && isset($_GET['id']) && $_GET['id'] >0){
    $type = get_safe_value($_GET['type']);
    $id=get_safe_value($_GET['id']);
    if($type=='delete'){
        mysqli_query($con,"DELETE from food_category where id ='$id'");
        header('location:category.php');
    }
    if($type=='active' || $type=='deactive'){
        $status=1;
        if($type=='deactive'){
            $status=0;
        }
        mysqli_query($con,"update food_category set status='$status' where id='$id'");
        header('location:category.php');
    }
}
$sql = "SELECT * FROM food_category order by order_number";
$res= mysqli_query($con,$sql);
?>
<html>
<head>
<link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    
</head>

    <body>
    <div class="card-body">
       <center> <h1>Food Category</h1> 
            </center><h3><a href="Manage_category.php">Add category</a></h3>   
                <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                </nav>
            <div class ="row">
                <div class="col-12">
                    <div class="table-responsive">
                       <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                            
                            <tr>
                                <th width="12%">Serial Number</th>
                                <th width="50%">Category</th>
                                <th width="10%">Order Number</th>
                                <th>Action</th>
                                
                            </tr>
                            <?php if(mysqli_num_rows($res)>0) { 
                            $i=1;
                            while ($row = mysqli_fetch_assoc($res)){
                            ?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $row['category']?></td>
                                <td><?php echo $row['order_number']?></td>
                                <td>
                               <a href ="Manage_category.php?id=<?php echo $row['id']?>">
                                   <label class="badge badge-primary">Edit</label></a>
                                    &nbsp;
                                    <?php
                                    if($row['status']==1){
                                    ?>
                                    <a href="?id=<?php echo $row['id']?>&type=deactive"><label class=" badge badge-info">Active</label>"</a>
                                    <?php
                                    }else
                                    {
                                    ?>
                                    <a href="?id=<?php echo $row['id']?>&type=active"><label class=" badge badge-danger">Deactive</label>"</a>
                                     <?php   
                                    }
                                    
                                    ?>
                                    <a href=""><label class="badge badge-warning">Pending</label></a>
                                    &nbsp;
                                    <a href="?id=<?php echo $row['id']?>&type=delete"><label class="badge badge-danger">Delete</label></a> 
                                </td>                                
                                <td></td>
                            </tr>
                            <?php
                            $i++;
                            } } else { ?>
                            <tr>
                            <td rowspan="5"><center>No data found</center></td>
                            </tr>
                            <?php } ?>
                        </table>    
                    </div>
                </div>
            </div>
        
    </div>
    </body>
</html>
