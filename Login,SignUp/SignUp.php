<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to G8 Studio</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('https://img.freepik.com/free-vector/halftone-background-with-circles_23-2148907689.jpg?size=626&ext=jpg&ga=GA1.1.632798143.1705449600&semt=ais');
    background-size: auto;
    background-position: center;
}    

.container{
    width: 420px;
    color: #fff;
    background: transparent;
    border: 2px solid(255,255,255,rgba(255,255,255,.2));
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    border-radius: 40px;
    padding: 30px 40px;
}

.container h1{
    font-style: oblique;
    font-size: 40px;
    text-align: center;
}

.container h2{
    font-size: 25px;
    text-align: center;
}

.container .input{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0 ;
}

.input input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255,255,255,.2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.input input::placeholder{
    color: #fff;
}


.input i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.container .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.remember-forgot label input {
    accent-color: #fff;
    margin-right: 3px;
}

.remember-forgot a{
    color: #fff;
    text-decoration: none;
}

.remember-forgot a:hover{
    text-decoration: underline;
}

.container .Login button{
    width: 100%;
    height: 40px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    color:#333;
}

</style>
<body>
    <div class="container">
        <form method="POST" action="">
            <h1>
                <strong>G8 Music Studio</strong>
            </h1>
            <h2>Đăng ký</h2>
                <div class="input">
                    <input type="text" name="Username" placeholder="Tên đăng nhập" required>
                    <i class='bx bxs-user' ></i>
                </div>    
                <div class="input">    
                    <input type="password" name="Password" placeholder="Mật khẩu" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>    
                <div class="input">
                    <input type="email" name="Email"placeholder="aaaa@gmail.com" required>
                </div>
                <div class="input">
                    <input type="text" name="name"placeholder="Tên của bạn"required>
                </div>
                    <div class="Login">
                     <button type="submit" name="input">
                        <span>Đăng ký</span>
                     </button>
                </div>
        </form>
    </div>
</body>
</html>