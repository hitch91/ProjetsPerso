<?php include 'nav_admin.php';

$result = $mysqli->query('SELECT * FROM messages');?>

<div class="container">
    <div class="media">
        <ul class="list-unstyled"> 
<?php foreach ($result as $row):?>

  <li class="media">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><?php echo $row['sujet'] ?></h5>
      <p><?php echo $row['message'] ?></p>
            <em><?php echo $row['nom'] ?></em><br>
            <strong><?php echo $row['email'] ?></strong>
      <hr>
    </div>
  </li>

       
<?php endforeach ?>   
        </ul>     
    </div>
</div>



<?php include 'footer_admin.php'; ?>