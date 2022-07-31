<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'Lato', sans-serif;
            }
            body {
                background-image: url("background.jpg");
                background-size: 100% 100%;
                background-color: rgba(12, 18, 74, 0.993);
            }
            .login-div {
                margin: 100px auto;
                width: 350px;
                background-color: #fff;
                padding: 60px;
            }
            .logo {
                background-color: rgba(35, 30, 30, 0.12);
                width: 150px;
                height: 150px;
                border-radius: 50%;
                margin:0 auto;
                margin-bottom: 10px;
            }
            .logo img{
                width:100%;
            }
            .title, .sub-title {
                text-align: center;
                color: #505050;
            }
            .title {
                font-weight: bolder;
                font-size: 35px;
            }
            .form {
                width: 100%;
                margin-top:30px;
            }
            .form input {
                font-size: 18px;
                padding: 10px 20px 10px 5px;
                border: none;
                outline: none;
                background: none;
            }
            .username, .password, .confirm-password {
                display: block;
                border-radius: 30px;
                border: 1px solid rgba(0, 0, 0, 0.2);
                padding: 15px;
                margin: 10px 0;
            }
            .form svg {
                height: 25px;
                margin-bottom: -5px;
                margin-left: 10px;
                margin-right: 5px;
            }
            .options {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                padding: 5px 0px;
                margin-bottom: 30px;
            }
            button {
                width: 100%;
                padding: 12px 10px;
                border: none;
                font-size: 18px;
                border-radius: 30px;
                background-color: rgba(22, 22, 184, 0.918);
                color: #fff;
                margin-bottom: 5px;
            }
            .sign-up {
                text-align: center;
            }
        </style>
    </head>  

    <body>
        <div class="login-div">
            <div class="logo">
                <img src="fuel.png" alt="" width="150">
            </div>

            <div class="title">REGISTER</div>

            <div class="form">
                <form action="\registerSubmit" method="POST" class=register>
                    @csrf
                <div class="username">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                    </svg>
                    <input type="text" placeholder="Username" name="username"  required>
                </div>
                
                <div class="password">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                    </svg>
                    <input type="password" placeholder="Password" name="password"  required>
                </div>

                <div class="confirm-password">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                    </svg>
                    <input type="password" placeholder="Confirm Password" name="confirmPassword"  required>
                </div>

                <button name="submit" class="signin">CONFIRM</button>

                <p class="sign-up"> Already have an account?
                    <a href="{{url('/login')}}">Login here!</a>
                </p>

                </form>

            </div>


        </div>
    </body>
</html>
