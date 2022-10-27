<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php   
     include 'parts/nav_bar.php';
?>


<section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="/forum/parts/_handleLogin.php" method="post">
                        <div class="field input-field">
                        <label for="name"></label>
                        <input type="email" name="loginEmail" placeholder="email" class="form-control" id="email"> 
                        </div>

                        <div class="field input-field">
                        <label for="password"></label>
                        <input class="form-control" placeholder="Password" name="loginPass" id="password"> 
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="signup_form.php" class="link signup-link">Signup</a></span>
                    </div>
                </div>

                
</section>

<?php
    include 'parts/footer.php';
    ?>
                
</body>

<style>/* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.container{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    column-gap: 30px;
}
.form{
    position: absolute;
    max-width: 430px;
    width: 100%;
    padding: 30px;
    border-radius: 6px;
    background: black;
}
.form.signup{
    opacity: 0;
    pointer-events: none;
}
.forms.show-signup .form.signup{
    opacity: 1;
    pointer-events: auto;
}
.forms.show-signup .form.login{
    opacity: 0;
    pointer-events: none;
}
header{
    font-size: 28px;
    font-weight: 600;
    color: #fff;
    text-align: center;
}

.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}
.field input,
.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
}
.field input{
    outline: none;
    padding: 0 15px;
    border: 1px solid#CACACA;
}
.field input:focus{
    border-bottom-width: 2px;
}
.eye-icon{
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    font-size: 18px;
    color: #8b8b8b;
    cursor: pointer;
    padding: 5px;
}
.field button{
    color: #fff;
    background-color: red;
    transition: all 0.3s ease;
    cursor: pointer;
}
.field button:hover{
    background-color: #e63600;
}
.form-link{
    text-align: center;
    margin-top: 10px;
}
.form-link span,
.form-link a{
    font-size: 14px;
    font-weight: 400;
    color: gray;
}
.form a{
    color: white;
    text-decoration: none;
}
.form-content a:hover{
    text-decoration: underline;
}


@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
}</style>

</html>