<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
       
        

        .logo
        {
            width: 104px;
            height: 54px;
            margin: 40px;
        }
        h1{
            
            margin-left: 55px;
            width: 357px;
            height: 52px;
            /* UI Properties */
            text-align: left;
            font: Roche Sans, Bold ;
            font-size: 39px;
            letter-spacing: 0px;
            color: #3652A4;
            opacity: 1;
            font-weight: bold
        }
        p
        {
            margin-left: 55px;
            color: #4E4C4B;
            font-size: 24px;
            font: Roche Sans;
            font-weight: lighter
        }
        .verify{
            margin-left: 128px;
            color: #4E4C4B;
            font-size: 22px;
            font: Roche Sans;
            font-weight: lighter
        }
        h4{
            color: #3652A4;
            font-size: 27px;
            font: Roche Sans;
            font-weight: bold;
            margin-left: 51px;
        }
        .sucess
        {
            margin-top:20%
        }
        .button
        {
            font: Roche Sans;
            font-weight: bold;
            font-size: 12px;
            background-color: #3652A4;
            margin-left: 126px;
            margin-top: 561;
            width: 241px;
            height: 46px;
            margin-bottom: 40%
        }
        .bg
        {
            background-image: url('{{ asset('assets/bg.png') }}'); 
            background-size: cover; 
            background-repeat:no-repeat;
            background-position: center;
        }
        .icon-blue
        {
            color: #3652A4;
            margin-left: 207px; 
            
        }
    </style>
</head>
<body>
   
        <div class="row test">
            
            <div class="col-md-4">
                <img class="logo" src="{{ asset('assets/roche.png') }}" alt="" >
                <h1>Beyond innovation</h1>
                <p>Together,<br> 
                   transforming healthcare</p>

                   
                <div class="sucess">
                    
                    <i class="fas fa-check fa-5x icon-blue"></i>


                    <h4>Thanks for attending the event</h4>
                    <p class="verify">Code entered successfully</p>
                    
                </div>
            </div>
            <div class="col-md-8 bg" >
                
            </div>
        </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>