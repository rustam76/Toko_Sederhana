<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container ">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card shadow-sm">
                <h4 class="text-center mt-3">Form Register</h4>

                <form action="daftar.php" method="post">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="">Masukkan Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Password</label>
                            <input type="password" name="pass" id="passwordfield" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan No Hp</label>
                            <input type="number" name="no_hp" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Daftar" class="btn btn-primary form-control">
                        </div>
                        <p class="text-center">Sudah Punya akun<a href="login.php"> Login</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
<script src="js/java.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>