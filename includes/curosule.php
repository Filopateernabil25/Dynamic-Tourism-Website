<div class="container mt-3">
    <!-- Start carousle -->
    <div id="carouselExampleControlsNoTouching" class="carousel slide " data-bs-touch="false" data-bs-ride="carousel">
        <div class="carousel-inner">
            <
                <?php
                for ($i = 1; $i <= 10; $i++): ?>
                    <div class="carousel-item <?php if($i==1) echo 'active'?>">
                        <img src="images/slide-<?=$i?>.jpg" class="d-block w-100 rounded-2 " alt="...">
                    </div>
                <?php endfor; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><!-- End carousle -->
</div>