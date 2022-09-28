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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- jquery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-4">
                    
                <h1 class="titulo">Login</h1>

                <form action="processar_login.php" method="post">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário</label>
                        <input type="text" name="usuario" class="form-control" id="usuario">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mostrar senha</label>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end area_inferior">
                        
                        <button type="submit" id="botao_login" class="btn btn-primary">Login</button>
                    </div>                    
                </form>    
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Atenção</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="margin-bottom: -5px; text-align: center; font-weight: 700;">Usuário ou senha incorretos</p>
                </div>
                <div class="modal-footer" style="margin-bottom: -5px;">
                    <button type="button" class="btn btn-secondary"  style="margin-top: -5px;" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

            if(<?php echo $erro_senha;?> == true){
                $('.modal').modal('show');
                
            } else {
                $('.modal').modal('hide');
               
            }
            
        });
    </script>

    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>