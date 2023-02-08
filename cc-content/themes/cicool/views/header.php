<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= get_option('site_description'); ?>">
    <meta name="keywords" content="<?= get_option('keywords'); ?>">
    <meta name="author" content="<?= get_option('author'); ?>">

    <title>
        <?= isset($title) ? $title : site_name() ?>
    </title>

    <script src="<?= theme_asset(); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- custom -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
         function hideURLbar(){ window.scrollTo(0,1); } 
      </script>
    <!-- //for-mobile-apps -->
    <link href="<?= theme_asset(); ?>/store/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="<?= theme_asset(); ?>/store/style.css" rel='stylesheet' type='text/css' />
    <!-- js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?= theme_asset(); ?>/store/move-top.js"></script>
    <script type="text/javascript" src="<?= theme_asset(); ?>/store/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="<?= theme_asset(); ?>/store/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <script src="<?= theme_asset(); ?>/store/jstarbox.js"></script>
    <link rel="stylesheet" href="<?= theme_asset(); ?>/store/jstarbox.css" type="text/css" media="screen"
        charset="utf-8" />
    <link href="<?= theme_asset(); ?>/store/custom.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript">
        jQuery(function () {
            jQuery('.starbox').each(function () {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function (event, value) {
                    if (starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' ' + val);
                        return val;
                    }
                })
            });
        });
    </script>

</head>