<html>
    <head>
        <title><?php echo date('d'); ?></title>
    </head>
    <body>

        <?php 

        echo "Hoje é dia ".date('d/m/Y');
        echo "<br>";
        echo  "Agora são ".date('H:i a');  
        echo "<br>";
        echo  "Agora são ".date('w');  
        echo "<br>";    
        $today  =6 - date('w') ;

        echo $today;

        $data = date('d');
        echo $data;


        function calendario(){
            $hoje = date('d');
            $dia = 1;
            
            $semana = array();
            
            while($dia <=31){
             if ($dia == $hoje){
                $diaNegrito = "<b>".$dia."</b>";
                array_push($semana, $diaNegrito);
             }else{
            
             array_push($semana, $dia);
            }
             

                if(count($semana)==7 ){
                    
                    linha($semana);
                    $semana = array();
                }
                $dia++;
            }
         
            linha($semana); 
            }

          
        

        function  linha($semana){
            echo "<tr>";
            for($i=0; $i<= 6; $i++){
                    if(isset($semana[$i])){
                        echo "<td>{$semana[$i]}</td>";
                    }else{
                        echo "<td></td>";
                    }
                }
               echo"</tr>";
        }
        
        ?>
        <table border="1">
            <tr>
                <th>DOM</th>
                <th>SEG</th>
                <th>TER</th>
                <th>QUA</th>
                <th>QUI</th>
                <th>SEX</th>
                <th>SAB</th>
            </tr>
            <?php calendario(); ?>
        </table>

      <hr>



        
        


    </body>
</html>