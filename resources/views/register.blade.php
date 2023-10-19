<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            background-color: #FFEBE8;

        }

        .test {
            height: 100vh;
        }

        body {
            overflow: hidden;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            padding: 0;
            background: transparent;
        }

        form {
            margin-left: 55px
        }

        input {
            margin-bottom: 30px;
            margin-right: 30px
        }

        .input {
            width: 400px
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ccc;
        }

        .logo {
            width: 104px;
            height: 54px;
            margin: 40px;
        }

        h1 {

            margin-left: 55px;
            width: 357px;
            height: 52px;
            /* UI Properties */
            text-align: left;
            font: Roche Sans, Bold;
            font-size: 39px;
            letter-spacing: 0px;
            color: #3652A4;
            opacity: 1;
            font-weight: bold
        }

        p {
            margin-left: 55px;
            color: #4E4C4B;
            font-size: 24px;
            font: Roche Sans;
            font-weight: lighter
        }

        
        .button
        {
            font: Roche Sans;
            font-weight: bold;
            font-size: 12px;
            background-color: #3652A4;
            margin-left: 100px;
            margin-top: 561;
            width: 241px;
            height: 46px;
            margin-bottom: 40%
        }

        .bg {
            background-image: url('{{ asset('assets/bg.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

    </style>
</head>
<body>

    <div class="row test">
        <div class="col-md-4">
            <img class="logo" src="{{ asset('assets/roche.png') }}" alt="">
            <h1>Beyond innovation</h1>
            <p>Together,<br>
                transforming healthcare</p>
            <form action="{{ route('user.register-code') }}"  method="POST">
                @csrf
                <div class="mb-1 input">

                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                </div>
                <div class="mb-1 input">

                    <input type="text" class="form-control" id="job_title" name="job_title" placeholder="job title">
                </div>
                <div class="mb-1 input">

                    <input type="text" class="form-control" id="organization" name="organization" placeholder="Organization">
                </div>
                <div class="mb-1 input">

                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="mb-1 input">

                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact Number">
                </div>
                <button type="submit" class="btn btn-primary button" name="register" >submit</button>

            </form>
        </div>
        <div class="col-md-8 bg">

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
