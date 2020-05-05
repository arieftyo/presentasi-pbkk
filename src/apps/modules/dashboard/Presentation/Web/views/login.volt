<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>Login</title>
    {{assets.outputCss('header')}}
</head>

    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="POST" action="{{ url('submit') }}">
           
            <div class="form-register-with-email">
                {{this.flashSession.output()}}
                <div class="form-white-background">
                    <div class="form-title-row">
                        <h1>Login User</h1>
                    </div>                   
                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="text" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Login</button>
                    </div>
                    <div class="form-row">
                        <p>Belum punya akun ?  <a href="{{ url('register') }}">Daftar</a> </p>
                       
                    </div>
                </div>


            </div>
        </form>
      

    </div>

</body>

</html>
