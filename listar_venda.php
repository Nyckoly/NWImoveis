<?php
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "imobiliaria";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    /* Die - Para a conexão ou o que estiver fazendo e vai mostrar o error que está dando */
    die("Erro na conexão". mysqli_connect_error());
}
$sql = "SELECT *FROM cadastrodeimoveis
    where tipo = 'venda'";
$resultado = mysqli_query($conn, $sql)
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/relatorios.css">

        <title>Relatório - Imóveis à venda</title>
    </head>
    <body>
        <header><nav><?php include 'cabecalho.php';?></nav></header>
        <main>
            <div class="container">
                <?php
                if (mysqli_num_rows($resultado) > 0) {
            
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<div class='card-imoveis'>";
                            echo "<div class='imagem'><img src='".htmlspecialchars($row["imagem"])."' alt='imagem do imóvel'></div>";
                            echo "<div class='localidade'>";
                                echo"<div class='icones'><i class='fa-solid fa-location-dot'></i></div>";
                                echo "<p class='cidade'>".htmlspecialchars($row['cidade'])."</p>";
                                echo "<p class='bairro'>".htmlspecialchars($row['bairro'])."</p>";
                            echo "</div>";
                            echo "<div class='informacoes'>";
                                echo "<div class='icones'>";
                                if ($row["tipoResidencia"] == "casa"){
                                    echo "<i class='fa-solid fa-house'></i>";
                                }
                                else if ($row["tipoResidencia"] == "apartamento"){
                                    echo "<i class='fa-solid fa-building'></i>";
                                }
                                else if ($row["tipoResidencia"] == "terreno"){
                                    echo "<i class='fa-solid fa-hammer'></i>";
                                }
                                echo "</div>";
                                echo "<p class='tipo'>".htmlspecialchars($row['tipoResidencia'])."</p>";
                                echo "<p class='valor'>".($row["valor"])."</p>";
                            echo "</div>";
                            echo "<div class='observacao'>";
                                echo "<div class='icones'><i class='fa-solid fa-comment'></i></div>";
                                echo "<p>".htmlspecialchars($row['observacao'])."</p>";
                            echo "</div>";
                        echo "</div>";
                    }
            
                }
                else {
                    echo "Nenhum Imóvel Encontrado";
                }
                ?>
            </div>
        </main>
        <footer>
            <h4>NW Imóveis</h2>
            <div class="redes">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/b8bf04cdf7.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"   crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"   crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"  crossorigin="anonymous"></script>
    </body>
</html>