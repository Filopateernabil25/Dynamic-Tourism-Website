<?php
include "./includes/data.php";
$id=$_GET['id'];
$cite=$cites[$id];
include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/DiscoverEgypt.php";

?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="<?=$cite['images']?>  " class="rounded-2" >
        </div>
        <div class="col-md-6">
            <h4><?=$cite['title']?></h4>
            <p><?=$cite['discreption']?></p>
        </div>
    </div>

</div>
<?php include "./includes/footer.php"; ?>