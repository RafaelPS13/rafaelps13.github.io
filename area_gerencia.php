<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Area Gerência</title>
    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- jquery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        h6{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .inserir{
            display:"none";
        }
    </style>
</head>
<body class="paginas">
    <?php

        include('dados.php');

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

    ?>
    

    <div class="container">   
        <div class="row">
        
            <div class="col-sm-1 col-lg-2"></div>
                
            <div class="col-sm-12 col-lg-8">
                    
                <h1 class="titulo">Painel de Opções</h1>
                
                <table class="table" style="backgroud-color: white;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">Opções</th>

                            <td scope="row"></td>

                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody style="margin-top: 30px;">

                        <tr>
                            <th scope="row" style="text-aling:right;">
                                <h6>Produtos</h6>
                            </th>

                            <td scope="row"></td>

                            <td align="right">
                                <div class="col offset-md-4">
                                    <button id="produto" href="editar.php?cod_aluno=" class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#inserir">Inserir</button>
                                    <a href="editar.php?cod_aluno=" class="btn btn-primary btn-sm">Editar</a>
                                    <button class="btn btn-secondary btn-sm btn-listar" data-bs-toggle="modal" data-bs-target="#listar" id="produtos_listar">Listar</button>
                                </div>
                                
                            </td>
                            
                        </tr>

                        <tr>
                            <th scope="row" style="text-aling:right;">
                                <h6>Categorias</h6>
                            </th>

                            <td scope="row"></td>

                            <td align="right">
                                <div class="col offset-md-4">
                                    <button id="categoria" href="editar.php?cod_aluno=" class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#inserir">Inserir</button>
                                    <a href="editar.php?cod_aluno=" class="btn btn-primary btn-sm">Editar</a>
                                    <button class="btn btn-secondary btn-sm btn-listar" data-bs-toggle="modal" data-bs-target="#listar" id="categoria_listar">Listar</button>
                                </div>
                                
                            </td>
                            
                        </tr>
                        
                        <tr>
                            <th scope="row">
                                <h6>Atendentes</h6>
                            </th>

                            <td scope="row"></td>

                            <td align="right">
                                <div class="col offset-md-4">
                                    <a href="editar.php?cod_aluno=" class="btn btn-success btn-sm">Cadastar</a>
                                    <a href="editar.php?cod_aluno=" class="btn btn-primary btn-sm">Editar</a>
                                    <button class="btn btn-secondary btn-sm btn-listar" data-bs-toggle="modal" data-bs-target="#listar" id="atendentes_listar">Listar</button>
                                </div>
                                
                            </td>
                            
                        </tr>

                    </tbody>
                </table>
                
            </div>
            
            <div class="col-sm-1 col-lg-2"></div>
        </div>
    </div>


    <!-- Modal inserir -->
    <div class="modal fade" id="inserir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inserirLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="ins-produto" class="inserir">
                        <form action="" method="post">
                            <label for="">cod_barras</label><input type="text" name="" id=""> <br>
                            <label for="">desc_prod</label><input type="text" name="" id=""><br>
                            <label for="">v unitario</label><input type="text" name="" id=""><br>
                            <label for="cars">Choose a car:</label>
                            <select name="categorias" id="categorias">
                            <?php

                                $sql = "SELECT descricao_categoria FROM categorias";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <option value="<?php echo $row["descricao_categoria"]?>"><?php echo $row["descricao_categoria"]?></option>
                            <?php
                                    }
                                } 
                                else {
                                    echo "0 results";
                                }

                                mysqli_close($conn);
                            ?>
                            </select>
                        </form>
                    </div>

                    <div id="ins-categoria" class="inserir">
                        <form action="" method="post">
                            <label for="">cod_categoria</label><input type="text" name="" id=""> <br>
                            <label for="">desc_prod</label><input type="text" name="" id=""><br>
                            <label for="">v unitario</label><input type="text" name="" id=""><br>
                            <label for="cars">Choose a car:</label>
                            <select name="categorias" id="categorias">
                            <?php

                                $sql = "SELECT descricao_categoria FROM categorias";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <option value="<?php echo $row["descricao_categoria"]?>"><?php echo $row["descricao_categoria"]?></option>
                            <?php
                                    }
                                } 
                                else {
                                    echo "0 results";
                                }

                                mysqli_close($conn);
                            ?>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Modal Listar -->
    <div class="modal fade" id="listar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="listar"><span id="titulo_inserir"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">cod</th>
                        <th scope="col">nome</th>
                        <th scope="col">valor</th>
                        <th scope="col">categoria</th>
                        </tr>
                    </thead>
                 
                    <?php
                        include('dados.php');
                        $sql = "SELECT descricao_produto,v_unit_produto,categoria_produto FROM produtos";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {?>
                           


                            <th scope="row">1</th>
                            <td><?php echo $row["descricao_produto"]; ?></td>
                            <td><?php echo $row["v_unit_produto"]; ?></td>
                            <td><?php echo $row["categoria_produto"] ;?></td>
                           
                            </tr>
            
                           
                         <?php }
                        } else {
                          echo "0 results";
                        };
                        
                        mysqli_close($conn);
                    
                    ?>
                  <tbody>
                        <tr>
                        
                    </tbody>
                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    
    <script>
        $(function(){    
   

            $("#produto").click(function(){
                $("#ins-produto").css("display","block");
                $("#ins-categoria").css("display","none");
            });

            $("#categoria").click(function(){
                $("#ins-categoria").css("display","block");
                $("#ins-produto").css("display","none");
            });

            $("#resposta").find(".btn-listar").click(function(){
                console.log($(this).attr("id"));
            });
        });

    </script>

    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script> 
</script>
</body>
</html>