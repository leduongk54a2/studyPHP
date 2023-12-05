<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do app</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .header-app {
            width: 100vw;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            background-color: blue;
            color: #fff;
        }
         .login-btn-wrapper{
             padding: 20px;
             text-align: right;
         }
        .login-btn-wrapper .login-btn{
            color: red;
            cursor: pointer;
        }
        .form-root {
            position: relative;
            padding: 20px;
            width: fit-content;
            margin: auto;
            border: solid 1px;
            border-radius: 20px;
        }
        .title {
            position: absolute;
            top: 0;
            left: 42%;
            transform: translateY(-15px);
            font-size: 22px;
            background: #fff;
        }
        .form-wrapper {
            width: 330px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin: auto;
        }
        .row-wrapper {
            display: flex;
            flex-flow: row wrap;
            width: 100%;
            margin-bottom: 10px;
        }
        .col-40 {
            display: block;
            flex: 0 0 40%;
            max-width: 40%;
        }
        .col-60 {
            display: block;
            flex: 0 0 57%;
            max-width: 57%;
        }
        .captcha-text {
            color: red;
        }

        .btn-wrapper {
            width: 100%;
            display: flex;
            justify-content: space-around;
            flex-direction: row-reverse;
        }

        .btn-wrapper .btn {
            border: solid 1px #cce6ff;
            padding: 5px 10px;
            border-radius: 40px;
            background: #cce6ff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header-app">Todo List Application</div>
