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
    </style>
</head>
<body>
    <div class="header-app">Todo List Application</div>
