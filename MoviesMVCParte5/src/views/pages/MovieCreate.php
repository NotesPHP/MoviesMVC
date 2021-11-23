<?php require_once __DIR__ . '/../layouts/default.php'; ?>

<main class="container">
    <section class="row justify-content-center">
        <form action="/movies" method="POST">
            <div class="mb-3">
                <label for="inputTitle" class="form-label">title</label>
                <input type="text" name="title" class="form-control" id="inputTitle">
            </div>
            <div class="mb-3">
                <label for="inputImage" class="form-label">image</label>
                <input type="url" class="form-control" id="inputImage" name="image">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </section>
</main>