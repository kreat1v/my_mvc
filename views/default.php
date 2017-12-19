<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=Config::get('site_name')?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/"><?=Config::get('site_name')?></a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if(App::getRouter()->getController() == 'pages') { ?>active<?php } ?>">
                    <a class="nav-link" href="/pages/">Pages</a>
                </li>
                <li class="nav-item <?php if(App::getRouter()->getController() == 'contacts') { ?>active<?php } ?>">
                    <a class="nav-link" href="/contacts/">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <div class="starter-template">
	        <?php if(Session::hasFlash()) { ?>
                <div class="alert alert-info" role="alert">
			        <?php Session::flash(); ?>
                </div>
	        <?php } ?>

	        <?=$data['content']?>
        </div>

    </main>

</body>
</html>