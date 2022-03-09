<!DOCTYPE html>
<html>
<head>
<title>Database</title>
<?php include 'links/link.php' ?>
</head>
<body>

<div class="container">
    <div class="col-lg-12">
    <br><br>
    <h1 class="text-warning text-center" > Database </h1>
    <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">

            <th> Id </th>
            <th> Username </th>
            <th> Email </th>
            <th> Delete </th>
    
        </tr >

<?php
  include 'dbcon.php';
  

  $q = "SELECT * from register_user";
  $query = mysqli_query($conn, $q);

  while($res = mysqli_fetch_array($query)){

?>
    <tr>
        <td> <?php echo $res['id']; ?></td>
        <td> <?php echo $res['user_name']; ?> </td>
        <td> <?php echo $res['user_email']; ?> </td>
        <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class = "text-white"> Delete </a> </button></td>
       
    </tr> 

    <?php
    }
    ?>
    </table>

</div>
</div>




</body>
</html>






