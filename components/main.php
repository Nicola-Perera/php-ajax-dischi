<main>
    <div class="cards container">
    <?php foreach ($songs as $song) : ?>  
            <div class="card">
                <div class="song">
                    <img src="<?php echo $song['poster']; ?>" alt="song poster">
                        <h2><?php echo $song['title']; ?></h2>
                        <div class="song_content">
                            <div>
                                <h4><?php echo $song['author']; ?></h4>
                                <h4><?php echo $song['year']; ?></h4>
                            </div>
                        </div>
                </div>
            </div>
            <?php endforeach; ?> 
        </div> 
</main>