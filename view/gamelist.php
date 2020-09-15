<?php
include 'nav.php';
include 'header.php';

while ($game = $games->fetch_assoc()) {
?>

   <div class="col-sm-3">
        <img src="<?php echo $game['image'] ?>" all=" " class="custom-img">
        <h4>Title: <a href="index.php?id=<?php echo $game['id'] ?>"> <?php echo " ". $game['title'] ?> </a></h4>
        <h4><?php echo "Author: ". $game['author'] ?></h4>
        <h4><?php echo "Description: ". $game ['description'] ?></h4>
   </div>
<?php  } ?>
    
