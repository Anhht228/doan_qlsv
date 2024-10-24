<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./views/css/style.css">
    <link rel="icon" href="./views/images/logo.jpg">
</head>
<body class="body-login">
    <div class="black-fill"><br> <br> 
        <div class="d-flex justify-content-center align-items-center flex-column">
            <form class="login" 
                    method="post" 
                    action="./views/req/login.php">
                <div class="text-center">
                    <img src="./views/images/logo-remove_bg.png" width="80">
                    <h4>LOGIN</h4>
                </div>
                    <?php
                       if(isset($_GET['error'])) {?>
                            <div class="alert alert-danger" role="alert">
                                <?=$_GET['error']?>
                            </div>

                    <?php } ?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" 
                        class="form-control" 
                        name="username">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" 
                        class="form-control"   
                        name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Login As</label>
                    <select class="form-control" 
                            name="role">
                        <option value="1">Admin</option>
                        <option value="2">Teacher</option>
                        <option value="3">Student</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <a href="index.php" class="text-decoration-none">Home</a>
            </form>
            <br><br><br><br><br> <br><br><br>
            <div class="text-center text-light">
                <?php
                    $passw = 123;
                    $passw = password_hash($passw, PASSWORD_DEFAULT) ;
                    echo $passw;               
                ?>
                <!--Copyright $copy; 2024 Vinh University.-->
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>