<?php include('server.php') ?>
<?php $pagename = "homepage"; include( 'header.php'); ?>
        <!-- Sign in  Form -->
        <section >
                    <div class="container">
                        <div class="signup-content">
                            <div class="col-md-6">
                                <h2 class="form-title">LOG IN</h2>
                                <form method="post" class="register-form" action = "signin.php">                                    
                                    <div>
										<?php include('errors.php') ?>
									</div>
									<div >
                                        <label for="name"></label>
                                        <input type="text" name="username" class="input" placeholder="Your Username"/>
                                    </div><br>
                                    <div >
                                        <label for="name"></label>
                                        <input type="password" name="password" class="input" placeholder="Your Password"/>
                                    </div><br>
                                    <div >
                                        <input type="submit" name="signin" class="form-submit" value="Login"/>
									</div><br>
									
                                </form>
                            </div>
                            <span class="signup-image">
                                <figure><img src="elephantPhotos/post16.jpg" alt="sign up image"></figure>
                                <a href="register.php" class="signup-image-link">Create a new account?</a>
                            </span>
                            
                        </div>
                    </div>
                </section>
		<?php include('footer.inc')?>

    </body>
</html>