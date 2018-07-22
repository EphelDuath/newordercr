<!DOCTYPE html>
<html lang="en" <?php if(config('config.direction') == 'rtl'): ?> dir="rtl" <?php endif; ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="ScriptMint">
        <title><?php echo e(env('APP_NAME')); ?></title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <link rel="shortcut icon" href="/images/favicon.png">
        <?php if(config('config.direction') == 'rtl'): ?>
            <link href="<?php echo e(mix('/css/style-rtl.css')); ?>" id="direction" rel="stylesheet">
        <?php else: ?>
            <link href="<?php echo e(mix('/css/style.css')); ?>" id="direction" rel="stylesheet">
        <?php endif; ?>
        <link href="<?php echo e(mix('/css/colors/'.config('config.color_theme').'.css')); ?>" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <div id="root">
            <router-view></router-view>
        </div>
        <script src="/js/lang"></script>
        <script src="<?php echo e(mix('/js/plugin.js')); ?>"></script>
        <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
    </body>
</html>
