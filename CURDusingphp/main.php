<!-- Common header included -->
<?php require 'connectDb.php'?>

<?php 
  $selectAll = "SELECT * FROM STUDENT";
  $allData = mysqli_query($connect,$selectAll);
?>

<?php include 'header.php'; ?>

<!-- Main module content goes here -->
<div class="w-100 bg-light d-flex align-items-center" style="height:612px;">
     <div class=" container d-flex align-items-center justify-content-center">
        <div>
        <table class="table">
        <thead>
            <tr class="bg-primary">
                <th class="bg-primary" scope="col">Sl No</th>
                <th class="bg-primary" scope="col">Name</th>
                <th class="bg-primary" scope="col">Email</th>
                <th class="bg-primary" scope="col">course</th>
                <th class="bg-primary" scope="col">profile</th>
                <th class="bg-primary" scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
        <?php if(mysqli_num_rows($allData) > 0){?>
            <?php while($row = mysqli_fetch_assoc($allData)){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['course']?></td>
                <td><img src="<?php echo $row['profile_pic'] ?>" style="width: 50px;height:50px;"></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id'];?>"><button type="Submit" class="btn btn-success">Update</button></a>
                    <a href="delete.php?id=<?php echo $row['id'];?>"><button type="Submit" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <?php }?>
            <?php } else { ?>
                <tr aria-rowspan="4">
                  <td class="opacity-50">No data found.</td>
                </tr>
            <?php }?>
        </tbody>
      </table> 
    </div>
    </div>
</div>
<?php require 'footer.php'; 
?>