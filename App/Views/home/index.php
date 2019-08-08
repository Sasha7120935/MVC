<?php
\Core\View::render('parts/header/php',['title' => ' Home Page']); ?>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Hello,world!</h1>
        <p>This is a tempplate for a simple marketing or information websit</p>
        <p><a class="btn btn-primary bth-lg" href="#" role="button">leam </a></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi </p>
            <p><a class="btn btn-secondary" href="#" role="button">View deta</a> </p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in</p>
            <p><a class="btn-secondary" href="#" role="button">View deta</a></p>
        </div>
    </div>

    <hr>

</div>
<?php \Core\View::render('parts/footer.php'); ?>
