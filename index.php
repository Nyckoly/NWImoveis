<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>NW Imóveis</title>
    </head>
    <body>
        <header><?php include 'cabecalho.php'?></header>
        <main>
            <div class="banner">
                <h2>NW Imóveis</h2>
                <p>Imóveis com o melhor preço de mercado!</p>
            </div>
            <section class="opcoes">
                <div class="sobre-nos">
                    <i class="fa-solid fa-file-lines"></i>
                    <h3>Sobre nós</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem laudantium nulla non doloremque porro esse optio distinctio laborum corrupti nihil excepturi veniam vitae officia nam, nisi dolore. Maiores, voluptate. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="sobre-nos">
                    <i class="fa-solid fa-clipboard-check"></i>
                    <h3>Cadastre seu imóvel</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem laudantium nulla non doloremque porro esse optio distinctio laborum corrupti nihil excepturi veniam vitae officia nam.</p>
                    <a href="cadastro.php">Cadastrar</a>
                </div>
                <div class="sobre-nos">
                    <i class="fa-solid fa-wallet"></i>
                    <h3>Financiamento</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem laudantium nulla non doloremque porro esse optio distinctio laborum corrupti nihil excepturi veniam vitae officia nam, nisi dolore. Maiores, voluptate. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </section>
            <section class="equipe">
                <h4>Nossa equipe</h4>
                <div class="cards">
                    <div class="pessoas">
                        <div class="foto" id="renato"></div>
                        <p class="nome">Renato Albuquerque</p>
                        <p class="funcao">Diretor Fundador</p>
                    </div>
                    <div class="pessoas">
                        <div class="foto" id="marisa"></div>
                        <p class="nome">Marisa Teixeira</p>
                        <p class="funcao">Consultora Imobiliária</p>
                    </div>
                    <div class="pessoas">
                        <div class="foto" id="gabriela"></div>
                        <p class="nome">Gabriela Oliveira</p>
                        <p class="funcao">Consultora Imobiliária</p>
                    </div>
                    <div class="pessoas">
                        <div class="foto" id="fernando"></div>
                        <p class="nome">Fernando Martins</p>
                        <p class="funcao">Sócio</p>
                    </div>
                </div>
            </section>
            <section class="interesse">
                <h4>Registre seu interesse</h4>
                <form action="">
                    <div class="nome">
                        <input type="text" placeholder="Nome.*">
                        <input type="text" placeholder="Sobrenome.*">    
                    </div>
                    <div class="contato">
                        <input type="tel" placeholder="Número de telefone.*">
                        <input type="email" placeholder="Endereço de e-mail.*">
                    </div>
                    <textarea rows="3" placeholder="Que tipo de propriedade você está procurando?"></textarea>
                    <button id="" type="submit">Enviar</button>
                </form>
            </section>
        </main>
        <footer>
            <h4>NW Imóveis</h2>
            <div class="redes">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/b8bf04cdf7.js" crossorigin="anonymous"></script>
    </body>
</html>