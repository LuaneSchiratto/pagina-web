<!DOCTYPE html>
< lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<>
    <h1>No PHP existem algumas maneiras básicas para exibir uma imformação na tela</h1>
    <h3>A instrução echo</h3>
    <?php
        echo ("Olá estou aprendendo uma nova Linguagem de programação! O PHP<br/>");
    ?> 
    <h3>A instrução print</h3>  
    <?php
        print("Bom dia a todos!<br/>");
    ?> 
    <h3>A instrução printf</h3>  
    <?php
        printf("Olá %s, você tem %d anos de idade.<br/>", "João", 25);
    ?> 
    <p>Existem três formas de se criar comentários no PHP?</p>
    <?php
        //Usando o barra barras
        #Usando hashtag
        /*Ou usando o Barra asteristico e astesristo barra */
    ?>
    <h3>Concatenação em PHP</h3>
    <?php
        $dia = 14;
        $mes = "abril";
        $ano = 1912;
        $anocomplemento = $dia. "de" . $mes. "de" .$ano;
        echo $anocomplemento;
    ?>
    <p>Segunda forma:</p>
    <?php
        $anocomplemento = 14;
        $anocomplemento .= "de abril de";
        $anocomplemento .= 1912;
        echo $anocomplemento;
    ?>
   <h3>Variáveis em PHP</h3>
    <?php
        $_nome="João Antonio";
        $Nome="Alfredo Maciel";
        $valor=123456;
    ?>
    <h3>Variáveis locais</h3>
    <?php function quadrado (){
        $numero = 3;
        $numero = $numero*$numero;
    }
    echo "O número ao quadrado é $numero";
   ?>
   <h3>Variáveis globais</h3>
   <?php
        function quadrado() {
            global $numero;
            $numero = $numero*$numero;
        }
        quadrado();
        echo "O número ao quadrado é $numero";
    ?>
    <h3>Variáveis estáticas</h3>
    <?php
        function somatorio(){
            static $soma = 0;
            $soma = $soma +1;
            echo "O valor é $soma<br/>";
        }
        somatorio();
        somatorio();
        somatorio();
    ?>
    <h3>Variáveis dinâmicas</h3>
    <?php
        $var = "Curso";
        $$var = "Tecnologia em Análise e Desenvolvimento de Sistemas";
        echo "O nome armazenado é $nome<br/>";
        echo "E o conteúdo de var é $var";
        ?>
    <h3>Variáveis superglobais</h3>
    <ul>
        <li>$_SERVER</li>
        <li>$_GET</li>
        <li>$_POST</li>
        <li>$_FILES</li>
        <li>$_REQUEST</li>
        <li>$_SESSION</li>
        <li>$_ENV</li>
        <li>$_COOKIE</li>
    </ul>
    <h3>Constantes</h3>
    <?php
    define ("CONSTANT", "Hello word!");
    echo CONSTANT;
    ?>
    <h3>Arrays</h3>
    <?php
        $nome_do_array=array();
    ?>-
    <?php
    $Nome_do_array=array("UNINOVE", "PHP", "Programação web", 2015);
    ?>
    <?php
        $Nome_do_array[]= "UNINOVE";
        $Nome_do_array[]= "PHP";
        $Nome_do_array[]= "Programação web";
        $Nome_do_array[]= 2015;
    ?>
    <h3>Exibindo o valor de uma posição do array</h3>
    <?php
        $Nome_do_array[1]= "UNINOVE";
        $Nome_do_array[3]= 2015;
    ?>
    <?php
    $Nome_do_array=array("UNINOVE", "PHP", "Programação web", "2015");
    print_r($nome_do_array);
    ?>
    <h3>Arrays associativos</h3>
    <?php
        $aluno=array()
        $aluno["Curso"] ="Tec, em Analise e desenvolvimeto de sistemas";
        $aluno["Nome"] ="Astrogildo Anbrósio Campos";
        $aluno["RA"] = "000.000.000.000";
    ?>
    <p>Ou se preferir:</p>
    <?php
        $aluno=array(
        $aluno["Curso"] => "Tec, em Analise e desenvolvimeto de sistemas",
        $aluno["Nome"] => "Astrogildo Anbrósio Campos",
        $aluno["RA"] => "000.000.000.000")
    ?>
    <p>Para exibir os valores dos array associativo, seguimos o mesmo padrão:</p>
    <?php
        $aluno=array("Curso" => "Tec, em Analise e desenvolvimeto de sistemas",
            "Nome" => "Astrogildo Anbrósio Campos",
            "RA" => "12345");
        echo("Dados do aluno:" .
            "<BR><strog>Nome: </strong>". $aluno['Nome'] .
            "<BR><strog>Curso: </strong>". $aluno['Curso'] .
            "<BR><strog>RA: </strong>". $aluno['RA']) .
    ?>
    <h3>Arrays multidimensionais (Matrizes)</h3>
    <?php
        $aluno=array("TADS" => array ("Descrição" => "Tec. em Análise e desenvolvimeto de sistemas", "Diciplina" => "Programação web"),
        "TSIN" => array ("Descrição" => "Tec. em Sistemas para a internet", "Diciplina" => "Comércio Eletrônico"),
        "SI" => array ("Descrição" => "Sistema de Informação", "Diciplina" => "Design de interface"));
        echo("Cursos e diciplinas ...".
        "<BR><BR>".
        "<strong>Sigla: </strong> TADS: " .
        "<BR><strong>Descrição: </strong>" $aluno ['TADS']['Descrição'] .
        "<BR><strong>Dicliplina: </strong>" $aluno ['TADS']['Diciplina'] .
        "<BR><BR>".
        "<strong>Sigla: </strong> TSIN: " 
        "<BR><strong>Descrição: </strong>" $aluno ['TSIN']['Descrição'] .
        "<BR><strong>Dicliplina: </strong>" $aluno ['TSIN']['Diciplina'] .
        "<BR><BR>".
        "<strong>Sigla: </strong> SI: " 
        "<BR><strong>Descrição: </strong>" $aluno ['SI']['Descrição'] .
        "<BR><strong>Dicliplina: </strong>" $aluno ['SI']['Diciplina'] );
    ?>



</body>
</html>