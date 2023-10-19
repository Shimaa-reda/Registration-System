<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration code</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        
        *
        {
            margin: 0;
            padding: 0;
            background-color: #FFEBE8;
            
        }
        .test{
            height: 100vh  ;
        }
        body{
            overflow: hidden;
        }
        .form-control {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            padding: 0;
            background: transparent;
        }
        form{
            margin-left: 55px
        }
        input
        {
            margin-bottom: 30px;
            margin-right: 30px
        }
        .input{
            width: 400px
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ccc;
        }

        .logo
        {
            width: 104px;
            height: 54px;
            margin: 40px;
        }
        
        h1
        {
            margin-left: 39px;
            color: #3652A4;
            font-size: 39px;
            font: Roche Sans;
            font-weight: bold
        }
        p
        {
            margin-left: 39px;
            color: #4E4C4B;
            font-size: 32px;
            font: Roche Sans;
            font-weight: lighter;
        }
        .button
        {
            background-color: #3652A4;
            margin-left: 30%
        }
        .bg
        {
            background-image: url('{{ asset('assets/bg.png') }}'); 
            background-size: cover; 
            background-repeat:no-repeat;
            background-position: center;
        }
        .code
        {
            width: 290px;
            height: 111px;
            background-color: #3652A4;
            text-align: center;
            color: rgb(223, 223, 223);
            margin-left: 20%;
            font-size: 18px;
            font-family: Roche Sans;
            font-weight: lighter;
            padding: 10px;
        }
        a
        {
            color: #3652A4;
            font-family: Roche Sans;
            font-weight: bold;
            margin-left: 211px;
            font-size: 18px;
            margin-top: 552px;
        }
    </style>
</head>
<body>
   
        <div class="row test">
            <div class="col-md-4">
                <img class="logo" src="{{ asset('assets/roche.png') }}" alt="" >
               
                <h1 >Thank you for the <br>
                   registration,</h1>
                <p >please save the code below <br>
                    for later use.</p>
                <div class="code">
                    your code is: <br> <br>{{ $code }}
                </div>
                <a href="{{ route('login-code') }}" >Okay</a>
            </div>
            <div class="col-md-8 bg" >
                
            </div>
            
        </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>