<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programação Orientada a Objetos em PHP</title>
        <script src="https://kit.fontawesome.com/25b5970f89.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- ATENÇÃO: Estrutura semântica (div, header, footer, main, article, 
             sections, aside...) omitida para fins de simplifação didática -->
        <h1>Programação Orientada a Objetos em PHP: Classes e Objetos</h1>

        <h2>Uso #1001</h2>

        <?php
        
        /**
         * Atalho para criar saída pré-formatada com var_dump
         * @param type $variavel
         */
        function var_dump_pre($variavel) {
            echo '<pre>';
            var_dump($variavel);
            echo '</pre>';
        }

        require_once 'classes/br/edu/ifnmg/php/poo/Postagem.class.php';

        // Operações com objetos
        $postagem = new br\edu\ifnmg\php\poo\Postagem();
//        $postagem = new Postagem();

        $postagem->id = 1001;
        $postagem->dataHora = new DateTime();
        $postagem->titulo = "POO em PHP";
        $postagem->conteudo = "Classes e objetos em PHP podem...";
        $postagem->positivo = 12;
        $postagem->negativo = 1;
        $postagem->ativa = true;
        
        var_dump_pre($postagem);

        echo "<p>$postagem</p>";
        ?>



        <hr>



        <h2>Uso #1002</h2>

        <?php
//        require_once("classes/Autoloader.class.php");
//        
//        // Operações com objetos
//        $postagem = new br\edu\ifnmg\php\poo\Postagem();
//
//        $postagem->id = 1002;
//        $postagem->dataHora = new DateTime();
//        $postagem->titulo = "POO em PHP";
//        $postagem->conteudo = "Classes e objetos em PHP podem...";
//        $postagem->positivo = 2222;
//        $postagem->negativo = 12;
//        $postagem->ativa = false;
//
//        echo "<p>$postagem</p>";
        ?>



        <hr>



        <h2>Uso #1003</h2>

        <?php
//        require_once("classes/Autoloader.class.php");
//        
//        use br\edu\ifnmg\php\poo\Postagem;
////        
//        // Operações com objetos
//        $postagem = new Postagem();
//
//        $postagem->id = 1003;
//        $postagem->dataHora = new DateTime();
//        $postagem->titulo = "POO em PHP";
//        $postagem->conteudo = "Classes e objetos em PHP podem...";
//        $postagem->positivo = 100;
//        $postagem->negativo = 3333;
//        $postagem->ativa = true;
//
//        echo "<p>$postagem</p>";
        ?>



        <hr>



        <h2>Uso #1004</h2>

        <?php
//        require_once("classes/Autoloader.class.php");
//        
//        use br\edu\ifnmg\php\poo\Postagem as MyPost;
////        
//        // Operações com objetos
//        $postagem = new MyPost();
//
//        $postagem->id = 1004;
//        $postagem->dataHora = new DateTime();
//        $postagem->titulo = "POO em PHP";
//        $postagem->conteudo = "Classes e objetos em PHP podem...";
//        $postagem->positivo = 4444;
//        $postagem->negativo = 5;
//        $postagem->ativa = true;
//
//        echo "<p>$postagem</p>";
        ?>

    </body>
</html>
