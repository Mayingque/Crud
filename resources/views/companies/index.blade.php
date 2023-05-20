<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2"style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-12 margin-tb border p-4" style = "height">
                <div class="pull-left">
                    <h2>Register Account</h2>
                </div>
                    <form method = "post" action = "{{ route('regaccount') }}">
                    {{ csrf_field() }}
                        <div class="row p-1">
                            <div class="col">
                                <input type = "text" name = "name" class = "form-control" placeholder = "Name">
                            </div>
                            <div class="col">
                                <input type = "email" name = "email" class = "form-control" placeholder = "Email">
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col">
                                <input type = "text" name = "address" class = "form-control" placeholder = "Address">
                            </div>
                            <div class="col">
                                <input type = "password" name = "password" class = "form-control" placeholder = "Password">
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col">
                                <button type = "submit" class = "btn btn-primary" style = "width: 100%;">Register</button>
                            </div>
                        </div>
                    </form>
                    
            </div>
        </div>
        
    </div>
</body>
</html>