<?php
include './nav.php';
include './header.php';

echo "testlist";

while ($game = $games->fetch_assoc()) {
?>

   <div class="col-sm-3">
        <img src="<?php echo $game['image'] ?>" all=" " class="custom-img">
        <h4><?php echo "Title: ". $game['title'] ?></h4>
        <h4><?php echo "Author: ". $game['author'] ?></h4>
        <h4><?php echo "Description: ". $game ['description'] ?></h4>
   </div>
<?php  } ?>
    
