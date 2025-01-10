<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Login with Google</title>
    <link type="stylesheet" href="google-login/style.css"/>
    <style>
        * {
            box-sizing: border-box;
            font-family: system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 16px;
        }

        body {
            background-color: #ca6454;
            margin: 0;
        }

        .content {
            max-width: 400px;
            width: 100%;
            margin: 50px auto 15px auto;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            padding: 25px;
        }

        .content h1 {
            text-align: center;
            font-size: 24px;
            font-weight: 500;
            margin: 0 0 15px 0;
            color: #3b4252;
        }

        .content h1 .icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background-color: #9196a5;
            margin-left: 5px;
            font-size: 14px;
        }

        .content h1 .icon svg {
            fill: #fff;
        }

        .content .login-txt {
            margin: 0;
            padding: 15px 0 25px 0;
            color: #3b4252;
        }

        .content .google-login-btn {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #fff;
            width: 100%;
            overflow: hidden;
            border-radius: 5px;
            background-color: #d6523e;
            cursor: pointer;
        }

        .content .google-login-btn .icon {
            display: inline-flex;
            height: 100%;
            padding: 15px 20px;
            align-items: center;
            justify-content: center;
            background-color: #cf412c;
            margin-right: 15px;
        }

        .content .google-login-btn .icon svg {
            fill: #fff;
        }

        .content .google-login-btn:hover {
            background-color: #d44a36;
        }

        .content .google-login-btn:hover .icon {
            background-color: #c63f2a;
        }

        .content .profile-picture {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px 0 25px 0;
        }

        .content .profile-picture img {
            width: 100%;
            max-width: 100px;
            border-radius: 50%;
        }

        .content .profile-details {
            display: flex;
            flex-flow: column;
            padding: 10px 0;
        }

        .content .profile-details>div {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #f1f2f5;
            margin-bottom: 15px;
            padding-bottom: 15px;
        }

        .content .profile-details>div .icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #9196a5;
            margin-right: 15px;
            font-size: 14px;
        }

        .content .profile-details>div .icon svg {
            fill: #fff;
        }

        .content .profile-details>div strong {
            display: block;
            font-size: 14px;
            font-weight: 500;
        }

        .content .profile-details>div:last-child {
            border-bottom: none;
        }

        .content .logout-btn {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #fff;
            width: 100%;
            overflow: hidden;
            border-radius: 5px;
            background-color: #db5d36;
            cursor: pointer;
        }

        .content .logout-btn .icon {
            display: inline-flex;
            height: 100%;
            padding: 15px 20px;
            align-items: center;
            justify-content: center;
            background-color: #d24e26;
            margin-right: 15px;
        }

        .content .logout-btn .icon svg {
            fill: #fff;
        }

        .content .logout-btn:hover {
            background-color: #d9562d;
        }

        .content .logout-btn:hover .icon {
            background-color: #c94b24;
        }
    </style>
</head>

<body>

    <div class="content home">

        <h1>
            Login
            <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                </svg>
            </span>
        </h1>

        <p class="login-txt">Please login using the button below. You'll be redirected to Google.</p>

        <a href="google-oauth.php" class="google-login-btn">
            <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                </svg>
            </span>
            Login with Google
        </a>

    </div>

</body>

</html>
