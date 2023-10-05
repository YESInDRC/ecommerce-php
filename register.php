<?php include("inc/header.inc.php"); ?>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        
        <!-- Registration Start -->
        <div class="login">
            <div class="container">
                <div class="section-header">
                    <h3>User Registration</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-12">    
                        <div class="register-form">
                            <form action="robot/register.robot.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control" name="firstName" type="text" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name"</label>
                                    <input class="form-control" name="lastName" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="text" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" name="mobileNumber" type="text" placeholder="Mobile No">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password</label>
                                    <input class="form-control" name="confirmPassword" type="password" placeholder="Verify Password">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration End -->
        
<?php include("inc/footer.inc.php"); ?>       