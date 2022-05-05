<?php
require_once 'bebida.php';
require_once 'vinho.php';
require_once 'suco.php';
require_once 'refrigerante.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja de Bebidas</title>
</head>
<body>

<form method = "post">
   <h1> Vinho </h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome do vinho</label>
    <input type="text" class="form-control" id="nomeVinho" name="nomeVinho" placeholder="Nome do vinho">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço</label>
    <input type="text" class="form-control" id="precoVinho" name="precoVinho" placeholder="Preço do vinho">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Safra</label>
    <input type="text" class="form-control" id="safraVinho" name="safraVinho" placeholder="Safra do vinho">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tipo</label>
    <input type="text" class="form-control" id="tipoVinho" name="tipoVinho" placeholder="Tipo do vinho">
  </div>
    <button type="submit" class="btn btn-primary" name="btVinho" id="btVinho">Enviar</button>
</form>

<form method = "post">
   <h1> Suco </h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome do Suco</label>
    <input type="text" class="form-control" id="nomeSuco" name="nomeSuco" placeholder="Nome do suco">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço</label>
    <input type="text" class="form-control" id="precoSuco" name="precoSuco" placeholder="Preço do suco">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sabor</label>
    <input type="text" class="form-control" id="saborSuco" name="saborSuco" placeholder="Sabor do suco">
  </div>
    <button type="submit" class="btn btn-primary" name="btSuco" id="btSuco">Enviar</button>
</form>

<form method = "post">
   <h1> Refrigerante </h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome do Refrigerante</label>
    <input type="text" class="form-control" id="nomeRefri" name="nomeRefri" placeholder="Nome do refrigerante">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço</label>
    <input type="text" class="form-control" id="precoRefri" name="precoRefri" placeholder="Preço do Refrigerante">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Retornavel</label>
    <input type="text" class="form-control" id="retornaRefri" name="retornaRefri" placeholder="Retornavel do Refrigerante">
  </div>
    <button type="submit" class="btn btn-primary" name="btRefri" id="btRefri">Enviar</button>
</form>

</body>
</html>


<?php
    if(isset($_POST["btVinho"])){
        
        $vinho1 = new Vinho();
        $vinho1->setNome($_POST['nomeVinho']);
        $vinho1->setPreco($_POST['precoVinho']);
        $vinho1->setSafra($_POST['safraVinho']);
        $vinho1->setTipo($_POST['tipoVinho']);
        echo $vinho1->mostrarBebida();
        echo $vinho1->verificarPreco();
        if($_POST['precoVinho'] > 25){
          echo " Caro!";
        } else {
          echo " Dentro do orçamento";
        }
      }
        


    if(isset($_POST["btSuco"])){
        
        $suco1 = new Suco();
        $suco1->setNome($_POST['nomeSuco']);
        $suco1->setPreco($_POST['precoSuco']);
        $suco1->setSabor($_POST['saborSuco']);
        echo $suco1->mostrarBebida();
        echo $suco1->verificarPreco();       
        if($_POST['precoSuco'] > 5){
          echo " Caro!";
        } else {
          echo " Dentro do orçamento";
        }
        
    }

    if(isset($_POST["btRefri"])){
        
        $refri1 = new Refrigerante();
        $refri1->setNome($_POST['nomeRefri']);
        $refri1->setPreco($_POST['precoRefri']);
        $refri1->setRetornavel($_POST['retornaRefri']);
        echo $refri1->mostrarBebida();
        echo $refri1->verificarPreco();
        if($_POST['precoRefri'] > 2.5){
          
          echo " Caro!";
        } else {
          echo " Dentro do orçamento";
        }
        
    }



?>