  <?php
          $url ="https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1";
          $ch = curl_init($url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
          
          $resultado = json_decode(curl_exec($ch));
         var_dump($resultado);
          foreach($resultado as $estado){
            var_dump($estado);
               echo "Nome do estado: ". $estado->ProvinciaEstado ."<br>";
                echo "Numero de mortes: " . $estado->Mortos."<br>";
                echo "<hr>";

          }
         
          ?>