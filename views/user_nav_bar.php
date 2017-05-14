<nav class="navbar navbar-default top-navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a class="navbar-brand" href="#">Cooking World</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.html"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Sign In</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Sign Out</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;Favorites</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;Notifications</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="clearfix"></div>
<!-- login modal -->
<div class="modal fade" id="loginModal" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="false" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="loginModalTitle">Login</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="login.php" method="post">
                    <div class="form-group">
                        <label for="username" class="control-label col-md-2">Username: </label>
                        <div class="col-md-10">
                            <input type="text" name="username" class="form-control" id="username" placeholder="username or mobile phone number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2 col-md-2" for="password">Password: </label>
                        <div class="col-md-10">
                            <input type="password" name="password" id="password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-8">
                            <div class="checkbox pull-right">
                                <label><input type="checkbox" name="checkbox" id="saveUser">Remember Me</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="sign-in">Sign In</button>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- login modal ends -->