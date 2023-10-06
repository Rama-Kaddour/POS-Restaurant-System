<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="icon" type="image/x-icon" href="/assets/food-restaurant-svgrepo-com.svg">
    <link href="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.xyz/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body style="background-color: #2C294B;">
    <p class="text-center text-white fst-italic pt-5 fs-2 fw-bold" >Mika Restaurant</p>
        
    <div class="d-flex justify-content-center mt-2 ms-4 ps-4 pe-4 mt-md-3  ">
        <div class="card mt-md-5" style="border: lightgrey solid 3px;">
            <div class="card-body">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" class="align-self-center align-middle mw-100" style=" width: 450px;">
                    <p class="text-primary pt-2 fs-2 fw-bold text-center mw-100" >Sign Up</p>
                    <div class="mb-4">
                        <label for="text" class="form-label fw-medium">Email address</label>
                        <input name="email" type="text" placeholder="example@mail.com" class="form-control" id="email1" >
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-medium">Password</label>
                        <input name="password" type="password" placeholder="Enter your password" class="form-control" id="password">
                    </div>
                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label fw-medium">Confirm Password</label>
                        <input name="confirmPassword" type="password" placeholder="Confirm your password" class="form-control" id="confirmPassword">
                    </div>
                    <p class="text-secondary pt-3">Already have an account?</p>
                    <div class="d-flex justify-content-between">
                        <a class="text-primary text-decoration-none fw-medium " href="login.php">Login</a>
                        <input name="submit" type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>