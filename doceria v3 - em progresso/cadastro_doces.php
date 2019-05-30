<?php 
 $titulo = "Doceria - Cadastro de Doces";
include('src/componentes/cabecalho.php'); ?>    
        <div class="conteudo central">
            <h2 align="center">Cadastre o Doce</h2>
            <form class="central" name= "signup" action="" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="Nome" name="Nome" />
                </div>
                <div class="form-group">
                    <label for="Quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="Quantidade" name="Quantidade"/>
                </div>
                <div class="form-group">
                    <label for="Valor">Valor</label>
                    <input type="number" step="any" class="form-control" id="Valor" name="Valor"/>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger">Cadastrar</button> 
                </div>
                
            </form>
        </div>






        <!-- BACK END -->
        <?php
            include_once("src/classe/conexao.php");

            $nome = $_POST["Nome"];
            $qtd = $_POST["Quantidade"];
            $valor = $_POST["Valor"];
    
            $sql = "INSERT INTO loja_doce(nome_doce, quant_doce, valor_doce) VALUES ('$nome', $qtd, $valor)";
            if(mysqli_query($mysqli, $sql)){
                echo "<script>alert('Records inserted successfully.')</script>";

            } else{
                echo "<script>alert('Erro. Algo não ocorreu como deveria !')</script>";
            }
        ?>

<?php include('src/componentes/footer.php'); ?>