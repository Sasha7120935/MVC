<!DOCTYPE html>
<html>
<head>
    <?php if(!empty($title)) : ?>
    <title><?php echo $title; ?></title>
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="stQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" ></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"...>
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-tar>
            <span class="navbar-toggler-icon"></span>
    </button>
    <div classs="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create Posts</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main">


