<!-- Common header included -->
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
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>@Otto</td>
                <td>BCA</td>
                <td><img src="https://img.freepik.com/premium-photo/young-girl-is-typing-computer-with-lit-up-screen-using-artificial-intelligence_131911-1.jpg" style="width: 50px;height:50px;"></td>
                <td>
                    <button type="Submit" class="btn btn-success">Update</button>
                    <button type="Submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
      </table> 
    </div>
    </div>
</div>
<?php require 'footer.php'; 
?>