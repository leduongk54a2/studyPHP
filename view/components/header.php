

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
        .flex {
            display: flex;
        }
        .flex-end {
            justify-content: end;
        }
        .flex-around {
            justify-content: space-around;
        }
        .item-center {
            justify-content: center;
            align-items: center;
        }
        .margin-right-15 {
            margin-right: 15px;
        }

        .margin-top-30 {
            margin-top: 30px !important;
        }
        .margin-bottom-30 {
            margin-bottom: 30px;
        }

        .margin-auto {
            margin: auto;
        }
        .padding-20 {
            padding: 20px;
        }
        .font-size-20 {
            font-size: 20px;
        }
        .bg-gray {
            background-color: darkgray;
        }
        .width-100 {
            width: 100%;
        }
        .width-fit {
            width: fit-content;
        }
        .position-relative {
            position: relative;
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
        .text-red {
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

        .table-root {
            width: 40vw;
            margin: 20px;
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            padding:0;
        }
        td,th {
            border: 1px solid #ddd;
            height: 100%;
            text-align: center !important;
        }
        tr:nth-child(even){background-color: #f2f2f2;}
        tr:hover {background-color: #ddd;}
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: blue;
            color: white;
        }
        .line-height-25 {
            line-height: 25.5px;
        }
    </style>
</head>
<body>
    <div class="header-app">Todo List Application</div>
