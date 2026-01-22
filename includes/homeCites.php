 <h1 class="text-center mt-3">Featured Cities</h1>
    <div class="container">
        <div class="row">
            <?php
            foreach (array_slice($cites, 0, 4) as $key => $cite): ?>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <img src="<?= $cite['images'] ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title "><?= $cite['title'] ?></h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p> -->
                            <a href="detailsoneCites.php?id=<?=$key?>" class="btn btn-outline-primary mt-2">Go somewhere</a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>