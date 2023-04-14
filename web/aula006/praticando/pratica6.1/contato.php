<?php 
require './header.php';
?>
<div class="container">
        <h1>Formulário</h1>
        <hr>
        <form action="./destino.php" method="post" class="row g-3">

            <div class="col-12">
                <label class="form-label" for="">Nome:</label>
                <input class="form-control" type="text" id="tituloPagina" name="nome">
            </div>

            <div class="col-12">
                <label class="form-label" for="">E-mail:</label>
                <input class="form-control" type="text" id="tituloPagina" name="email">
            </div>

            <div class="col-12">
                <label class="form-label" for="">Mensagem:</label>
                <textarea class="form-control" name="mensagem" id="corpo" cols="35" rows="5"></textarea>
            </div>
           
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-warning" type="reset">Limpar</button>
                
            </div>
        </form>
    </div>
<?php
require './footer.php'
?>