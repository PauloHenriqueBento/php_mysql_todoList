<?php require_once 'authentication.php' ?>
<?php require_once 'header.php' ?>
<body class="container">
    <h1 class="text-center">Todo List</h1>
    <div class="row">

        <div class="col-6">
            <div class="d-flex flex-column w-100 justify-content-center">
                <h1>Registro</h1>
                <form method="POST" action="">
                    <input type="text" name="username" placeholder="Nome de usuário" required /><br>
                    <input type="password" name="password" placeholder="Senha" required /><br>
                    <input type="submit" name="register" value="Registrar" />
                </form>
            </div>
        </div>


        <div class="col-6">
            <div class="d-flex flex-column w-100 justify-content-center">

                <h1>Login</h1>
                <form method="POST" action="" class="col-6">
                    <input type="text" name="username" placeholder="Nome de usuário" required /><br>
                    <input type="password" name="password" placeholder="Senha" required /><br>
                    <input type="submit" name="login" value="Login" />
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>