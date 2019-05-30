<?php 
    $titulo = "Doceria - Consulta por valor";

include("src/componentes/cabecalho.php"); ?>

        <div class="container conteudo justify-content-center">
            <div class="row h-100 justify-content-center align-items-center">
                <h2 align="center" class="mr-4">Digite o preço do doce:</h2> <br>
                <form action="consultar_doces_porvalor.php" method="POST">
                    <div class="input-group">
                        <input  type="number" step="any" class="form-control" id="valor" name="valor">
                        <div>
                            <button type="submit" class="btn btn-danger">Buscar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php include('src/componentes/footer.php'); ?>