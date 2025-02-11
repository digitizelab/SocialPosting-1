<?php
require_once 'header.php';

/**
 * If authorized in Twitter, get user account details
 */
$twitterUser = null;
if($socialPosting->validateTwitterCredentials()){
    $twitterUser = $socialPosting->getUserProfile();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SocialPosting App</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="vendor/twbs/bootstrap/docs/examples/cover/cover.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Social Posting</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">Home</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-md-4">
                    <h3>Facebook</h3>
                    <a class="btn btn-default" href="#" role="button">TODO</a>
                </div>
                <div class="col-md-4">
                    <h3>Twitter</h3>
                    <?php  if(!$socialPosting->validateTwitterCredentials()){ ?>
                        <a class="btn btn-default" href="<?=$socialPosting->buildTwitterAuthorizeUrl();?>" role="button">Authorize</a>
                    <?php }else{ ?>
                        <img src="<?=$twitterUser->profile_image_url;?>" alt="profile picture">
                        <p>@<?=$twitterUser->screen_name;?></p>
                    <?php } ?>

                </div>
                <div class="col-md-4">
                    <h3>Google+</h3>
                    <a class="btn btn-default" href="#" role="button">TODO</a>
                </div>
            </div>
            <div class="inner cover">
                <h1 class="cover-heading">Express to the world!</h1>
                <p class="lead">
                <form action="post.php" method="post">
                    <div class="form-group">
                        <textarea name="status" class="form-control" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-lg btn-default">Submit</button>
                </form>

                </p>
                <?php if(isset($_REQUEST['posted'])){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Status Posted.
                    </div>
                <?php } ?>

            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a
                            href="https://twitter.com/mdo">@mdo</a>.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
