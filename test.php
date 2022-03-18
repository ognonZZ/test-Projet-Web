<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Tutorial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>

    <!-- TOP NAVBAR -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <a href="#" class="navbar-brand">MOCK WEBSITE</a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse navHeaderCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PORTFOLIO <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">PHOTOS</a></li>
                            <li><a href="#">VIDEOS</a></li>
                            <li><a href="#">MUSIC</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact" data-toggle="modal">CONTACT</a></li>
                </ul>
            </div>

        </div> <!-- Container -->
    </div> <!-- Nav -->



    <div class="jumbotron">
        <div class="container">
            <h1>MOCK WEBSITE</h1>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>



    <div class="modal fade" id="contact" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal">
                    <div class="modal-header">
                        <h4>Contact Me</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contact-name" class="col-lg-2 control-label">Name:</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="contact-name" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-email" class="col-lg-2 control-label">Email:</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="contact-email" placeholder="you@example.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-msg" class="col-lg-2 control-label">Message:</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="8" placeholder="Write your message..."></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Send</button>
                        <a class="btn btn-default" data-dismiss="modal">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


<div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text pull-left">Site Built By Andrew Vu</p>
        <a href="#" class="navbar-btn btn btn-danger pull-right">Subscribe on YouTube</a>
    </div>
</div>




    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

    </body>
</html>