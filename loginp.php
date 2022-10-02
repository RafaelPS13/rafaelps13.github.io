
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- jquery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container   " style="margin-top: 90px;">

        <div class="row">
            <div class="col"></div>

            <div class="col-lg-4" style="width: 350px; height: auto;">

                <div class="arealogin">
                        <h2 style="text-align:center; margin-top: 5px;">Login</h2>

                        <form action="processar_login.php" method="post" style="margin-top:20px;"> 
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Exibir senha</label>
                            </div>

                            <div class="d-grid gap-2" style="margin-top: 20px; margin-bottom: 20px;">
                                <button type="submit" class="btn btn-secondary">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="col"></div>
        </div>
    </div>
 <style>
    
 </style>
    <script>

        $(function () {
            
            $('#exampleCheck1').click(function(){

                var checkbox = $('#exampleCheck1');

                if(checkbox.is(":checked")) {
                    $('#senha').attr('type', 'text');
                } else {
                    $('#senha').attr('type', 'password');
                }

            });
        });
    </script>

    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>