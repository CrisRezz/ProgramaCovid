<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content= "Vejo o numero de casos confirmados e de mortalidades por Covid19">
    <title>Juntos contra Covid19</title>
    <link rel="stylesheet" type = "text/css" href="style.css" />

  </head>

  <body>
    <header class="cabeçalho">
         <img class="cabeçalho-imagem" src="coronavirus.png" alt="covid19">
      <nav class="cabeçalho-menu">
        <a class="cabeçalho-menu-item" href="laddingpage.php">Informações sobre COVID19</a>
          <a class="cabeçalho-menu-item" href = "laddingpage.php">Início</a>
          <a class="cabeçalho-menu-item" href = "ConsultaBrasil.php">Brasil</a>
          <a class="cabeçalho-menu-item" href = "ConsultaCanada.php">Canada</a>
          <a class="cabeçalho-menu-item" href = "ConsultaAustralia.php">Australia</a>
          <a class="cabeçalho-menu-item">Outros paises</a>
      </nav>
    </header>

    <main class="conteudo"> 

    <section class="conteudo-principal">
        <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Consulta de casos covid19</h1>
        <h2 class="conteudo-principal-escrito">Sobre qual pais deseja consultar?</h2>
       
       <div style="display: inline-block;">
<button class="conteudo-principal-escrito-botao" ><a href = "ConsultaBrasil.php" >Brasil</a></button>
<button class="conteudo-principal-escrito-botao" ><a href = "ConsultaCanada.php" >Canada</a></button>
<button class="conteudo-principal-escrito-botao" ><a href = "consultaAustralia.php" >Australia</a></button>
<button class="conteudo-principal-escrito-botao" ><a href = "ConsultaOutrosPaises.php" >Outros Paises</a></button>
</div>
        </div>

    </section>


    <section class ="conteudo-secundario">
<h3 class ="conteudo-secundario-titulo"><strong>  Proteja a si mesmo e a sua familia, tome os principais cuidados:</strong></h3>
<p class = "conteudo-secundario-paragrafo">•Lave as mãos frequentemente</p>
<p class = "conteudo-secundario-paragrafo">•Use máscara em locais publicos lotados, como ônibus, metro e lojas.</p>
<p class = "conteudo-secundario-paragrafo">•Limpe e desinfete superficies que são muito tocadas como bancadas e pisos.</p>
<p class = "conteudo-secundario-paragrafo">•Cuide da sua saúde, pratique esportes e coma alimentos saudavéis!</p>
<p class = "conteudo-secundario-paragrafo">•Vacine-se!</p>
   
    <script src="mobile-navbar.js"></script>


</section>
 </main>

<footer class = "rodapé"> 

    <script src="datahora.js"></script>
    <p class =" rodapé-footer" > @Copy right Cris Rezz</p>
    <a class =" rodapé-footer" href="https://github.com/CrisRezz" >Meu github!</a>
    <p>Último acesso em: <span id="data-hora"></span></p>
  </footer>
  </body>
</html>
  