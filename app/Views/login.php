<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        html
        {
            height: 100%;
        }
        body
        {
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: linear-gradient(#ffffff,#ffec5d);
        }
        .login-box
        {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }
        .login-box h2
        {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        .login-box .user-box
        {
            position: relative;
        }
        .login-box .user-box input
        {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .login-box .user-box label
        {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label
        {
            top: -20px;
            left: 0;
            color: #fec503;
            font-size: 12px;
        }
        .login-box form a 
        {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #fec503;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }
        .login-box a:hover
        {
            background: #fec503;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #fec503,
                        0 0 25px #fec503,
                        0 0 50px #fec503,
                        0 0 100px #fec503;
        }
        .login-box a span
        {
            position: absolute;
            display: block;
        }
    </style>
</head>
<body>
    <div class="name-stripe">
        <img src="./logos_LIEE/LIEE_Logo.png" alt="Logo y nombre del LIEE"/>
        
    </div>
    <div class="login-box">
        <h2>Login</h2>
        <form>
            <div class="user-box">
                <input type="text" name="" required="">
                <label>Correo electrónico</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Contraseña</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Ingresar
            </a>

            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            </a>
        </form>
    </div>
</body>
</html>