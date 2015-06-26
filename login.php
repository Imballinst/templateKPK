<?php include("header.php"); ?>
     <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row row-custom">
                    <h2 class="center">Login</h2>
                    <form action="?p="home"">
                        <!-- USERNAME -->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                                    <i class="glyphicon glyphicon-user form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <!-- PASSWORD -->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <!-- CHECKBOX AND SUBMIT BUTTON -->
                        <div class="row">
                            <div class="col-md-12">  
                                <div class="center-form">
                                    <div class="checkbox">
                                        <input type="checkbox"> Biarkan saya tetap masuk
                                    </div>
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>