
    <?php
        include("models/aluno.php");
        /*
        function teste_bd(){
            $PDO = create_connection();
            $matricula = 4;
            $sql = "SELECT * FROM aluno where matricula = :matricula";
            $stmt = $PDO->prepare( $sql );
            $stmt->bindParam(':matricula',$matricula);
            $result = $stmt->execute();

            if ( ! $result ){
                var_dump( $stmt->errorInfo() );
                exit;
            }

            $rows = $stmt->fetchAll(  );
            var_dump($rows);
        }
        */
    ?>

<html>
<head>

</head>
<body>
    
    <div>
        <?php
        /*
            $a = new Aluno("leooouu","3333","teste512312","2015/04/12");
            echo $a->get_nome();
            echo $a->get_matricula() . "<br>";
            $a->save();
            $b = Aluno::authenticate("leooouu","3333");
            echo "matricula: " . $b->get_matricula() . " nome: " . $b->get_nome() . "<br>";
            $b->set_nome("testezinho");
            $b->save();
            echo "matricula: " . $b->get_matricula() . " nome: " . $b->get_nome() . "<br>";
        */
        ?>
        
        <form action="login.php" method="POST">
            login: <input type=text name=login><br>
            senha: <input type=text name=senha><br>
        <input type=submit value="OK">
        </form>
    </div>
</body>
</html>