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
    <div class="conteudo-principal-escrito">
        <h2 class="conteudo-principal-escrito">Numero total de casos confirmados no Pais: 10,114,810 </h2>
        <h2 class="conteudo-principal-escrito">Numero total de mortes no Pais: 14,429 </h2>
        <h2 class = "conteuddo -principal-escrito" > Lista de Provincias/Estados: </h2>
 <?php
          $url ="https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Australia";
          $ch = curl_init($url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
          
          $resultado = json_decode(curl_exec($ch));
         //var_dump($resultado);
          foreach($resultado as $estado){
            //var_dump($estado);
                echo "Nome do estado: ". $estado->ProvinciaEstado ."<br>";
                echo "Numero de casos confirmados: " . $estado->Confirmados ."<br>";
                echo "Numero de mortes: " . $estado->Mortos."<br>";
                echo "<hr>";
                   

          }
 
?>
</div>

    </main>



<script src="mobile-navbar.js"></script>


<footer class = "rodapé"> 
<p class =" rodapé-footer" > @Copy right Cris Rezz</p>
<a class =" rodapé-footer" href="https://github.com/CrisRezz" >Meu github!</a>
<a class =" rodapé-footer"  href= "ultimo_acesso.php">ultimo acesso</a>
</footer>


</body>
</html>  