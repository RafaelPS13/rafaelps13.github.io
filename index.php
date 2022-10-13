<!-- LOGIN PRINCIPAL -->

<?php 
    if (isset($_GET['erro_senha']) == true) {
        $erro_senha=$_GET['erro_senha'];
    } else {
        $erro_senha = false;
    }
?>

<!doctype html>
<html lang="en">    

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- jquery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

</head>

<body>
       
    <div class="container" style="margin-top: 190px;">

        <div class="row">
            <div class="col"></div>

            <div class="col-lg-3 login" style="width:380px; padding-left: 30px; padding-right: 30px; height: 385px;">

                <div class="arealogin">
                    <h2 style="text-align:center; margin-top: 20px; font-size:40px;">Login</h2>

                    <form action="processar_login.php" method="post" style="margin-top:25px; width:320px;">
                        <div class="mb-3">
                            <label for="usuario" class="form-label" style="margin-left:5px;">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label" style="margin-top:5px; margin-left:5px;">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Exibir senha</label>
                        </div>

                        <div class="d-grid gap-2" style="margin-top: 35px; margin-bottom: 10px;">
                            <button type="submit" class="btn btn-secondary">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script>
    $(function() {

        $('#exampleCheck1').click(function() {

            var checkbox = $('#exampleCheck1');

            if (checkbox.is(":checked")) {
                $('#senha').attr('type', 'text');
            } else {
                $('#senha').attr('type', 'password');
            }

        });
    });
    </script>

    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    


<style>

  body {
    background-image: url("img/coffe22.jpg") ;  
}
</style>

</body>

</html>