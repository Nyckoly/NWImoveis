<?php
$servername="localhost";
$username="root";
$password="";
$dbname="imobiliaria";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $cidade = mysqli_real_escape_string($conn,$_POST["cidade"]);
    $bairro = mysqli_real_escape_string($conn,$_POST["bairro"]);

    $valor = floatval(mysqli_real_escape_string($conn,$_POST["valor"]));

    $tipo = mysqli_real_escape_string($conn,$_POST["tipo"]);
    var_dump($valor);
    $tiporesidencia =  mysqli_real_escape_string($conn,$_POST["tiporesidencia"]);
    $observacao =  mysqli_real_escape_string($conn,$_POST["observacao"]);
   
    //tratamento da imagem
    $diretorio_imagens = "uploads/"; //diretório onde irão ficar as imagens
    $imagem_nome = basename($_FILES["imagem"] ["name"]);//variavel que vai receber o nome da imagem enviada pelo formulário
    $destino = $diretorio_imagens . $imagem_nome;//a variavel $destino irá receber o diretório e o nome da imagem

    if(move_uploaded_file($_FILES['imagem']['tmp_name'],$destino)){
      $sql = "INSERT INTO cadastrodeimoveis (valor, cidade, bairro, tipo,tiporesidencia, observacao, imagem) VALUES ('$valor','$cidade','$bairro','$tipo', '$tiporesidencia', '$observacao','$destino')";
      if(mysqli_query($conn,$sql)){
 
        echo"Livro cadastrado com sucesso";
      }
      else{
        echo"erro ao cadastrar o livro " . mysqli_error($conn);
      }
   
    }
    else{
      echo "erro ao fazer upload da imagem";
    }
 
 
}
mysqli_close($conn);
 
 
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW +ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
  </head>
  <body>
    <?php include 'cabecalho.php'?>
    <main>
      <form method="POST" enctype="multipart/form-data">
          <label for="endereco">Endereço</label>
          <input type="text" placeholder="Cidade" id="cidade" name="cidade" required>
          <input type="text" placeholder="Bairro" id="bairro" name="bairro" required>
          <div class="compra">
            <div class="valor">
              <label for="valor"><i class="fa-solid fa-dollar-sign"></i></label>
              <input type="number" placeholder="Valor" id="valor" name="valor" required>
            </div>
            <div class="icone">
            </div>
            <select name="tipo" id="tipo">
            <option selected disabled value="">Selecione o tipo do anuncio</option>
              <option value="aluguel">Aluguel</option>
              <option value="venda">Venda</option>
            </select>
          </div>
          <div class="select">
            <select name="tiporesidencia" id="tiporesidencia" required>
              <option selected disabled value="">Selecione o tipo do imóvel</option>
              <option value="casa">Casa</option>
              <option value="apartamento">Apartamento</option>
              <option value="terreno">Terreno</option>
            </select>
          </div>
          <label for="observacao">Observação</label>
          <input name="observacao"type="text" maxlength="300" placeholder="digite aqui sua observação">
          <label for="imagem">Imagem da casa</label>
          <input type="file" id="imagem" name="imagem" required>
          <button type="submit">Cadastrar</button>
        </form>
    </main>
    <footer>
        <h4>NW Imóveis</h2>
        <div class="redes">
          <a href=""><i class="fa-brands fa-facebook-f"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
      </footer>
    <script src="js/cadastro.js"></script>
    <script src="https://kit.fontawesome.com/b8bf04cdf7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"  crossorigin="anonymous"></script>
  </body>
</html>