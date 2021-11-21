
    <?php require_once __DIR__ . '/../layouts/default.php';?>
    
    <main>
    <section class="row justify-content-center">
    <?php

    foreach ($movies as $itemMovie) {
        echo "
        <div class='card' style='width: 18rem'>
            <img src='{$itemMovie->image}' class='card-img-top'>
            <div class='card-body'>
            </div>
            <h5 class='card-title'>{$itemMovie->title}</h5>
        </div>
        "; 
    } 
    ?>
    </section>
    </main>
</body>
</html>