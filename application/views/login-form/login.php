<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=base_url("assets/css/login.css");?>" />
    <title>LOGIN FORM</title>
</head>

<body>
    <div class="container">
        <div class="content-img">
            <img src="<?=base_url("assets/assets/login.png")?>" width="350px" height="350px" alt="" />
        </div>
        <div class="form">
            <h1 style="text-align: center; font-weight: 700">LOGIN</h1>
            <form action="login.html">
                <label for="">Username</label>
                <input type="text" id="username" />
                <label for="">Password</label>
                <input type="password" id="password" />
                <a href="#"><button type="submit" class="btn px-5 mx-auto"
                        style="background-color: #7b9cff; color: white">Login</button></a>
            </form>
            <div class="login-option d-flex flex-row gap-3 mt-4 justify-content-center" style="color: #7c7c7c">
                <p>Login With</p>
                <div class="login-img">
                    <a href="https://www.google.com"><img src="<?=base_url("assets/assets/google.png")?>" width="20px"
                            height="20px" alt="" /></a>
                    <a href="https://www.facebook.com"><img src="<?=base_url("assets/assets/fb.png")?>" width="20px"
                            height="20px" alt="" /></a>
                    <a href="https://www.twitter.com"><img src="<?=base_url("assets/assets/twitter.png")?>" width="25px"
                            height="25px" alt="" /></a>
                </div>
            </div>
            <p style="text-align: center; color: #7c7c7c">No Have Account? <a href="#" style="color: #7c7c7c">Create
                    Here</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>