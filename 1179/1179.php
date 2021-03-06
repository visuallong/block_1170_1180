<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content e-commerce</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3.less', 'css/type-3.css');
        ?>
        <link rel="stylesheet" href="css/type-3.css">
    </head>

    <body>
        <div class="type-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-caret-square-o-right"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-caret-square-o-right"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-caret-square-o-right"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-check-square-o"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>