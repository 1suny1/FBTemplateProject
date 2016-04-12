<!DOCTYPE html>
<html lang="en" ng-app="templateApp">

<head>
	<base href='<?php echo base_url() ?>' />
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<!--     <title>Business Casual - Start Bootstrap Theme</title> -->
	<title><?= isset($title)?$title:''; ?></title>
	
	<?= isset($header_css)?$header_css:''; ?>

    <!-- Bootstrap Core CSS <link href="<?php echo base_url("/css/bootstrap.min.css") ?>" rel="stylesheet"> -->

    <!-- Custom CSS <link href="<?php echo base_url("/css/business-casual.css") ?>" rel="stylesheet">-->

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="brand">{{ 'TOP_MAIN_TITLE' | translate }}</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container" ng-controller="templateAppCtrl">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">{{ 'HOME' | translate }}</a>
                    </li>
                    <li>
                        <a href="about.html">{{ 'ABOUT' | translate }}</a>
                    </li>
                    <li>
                        <a href="blog.html">{{ 'BLOG' | translate }}</a>
                    </li>
                    <li>
                        <a href="contact.html">{{ 'CONTACT' | translate }}</a>
                    </li>
                </ul>
            </div>
            <div>
            	<a href ng-click="setLang('en')">English</a>/<a href ng-click="setLang('kr')">한글</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    