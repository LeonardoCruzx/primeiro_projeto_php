<?php
    include_once("connection.php");

    class Aluno{
        
        private $matricula;
        private $login;
        private $senha;
        private $nome;
        private $data_nascimento;

        function __construct($login,$senha,$nome,$data_nascimento){
            $this->login = $login;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->data_nascimento = $data_nascimento;
            return $this;
        }

        function get_matricula(){
            return $this->matricula;
        }

        function get_nome(){
            return $this->nome;
        }

        function get_data_nascimento(){
            return $this->data_nascimento;
        }

        private function set_matricula($matricula){
            $this->matricula = $matricula;
        }
        
        function set_nome($nome){
            $this->nome = $nome;
        }

        function save(){
            $PDO = Connection::create_connection();
            
            if(isset($this->matricula)){
                $sql = "UPDATE alunos SET nome = :nome, data_nascimento = :data_nascimento WHERE matricula = :matricula;";
                $stmt = $PDO->prepare( $sql );
                $stmt->bindParam(':matricula',$this->matricula);
                $stmt->bindParam(':nome',$this->nome);
                $stmt->bindParam(':data_nascimento',$this->data_nascimento);
                $result = $stmt->execute();
                if ( ! $result ){
                    var_dump( $stmt->errorInfo() );
                    exit;
                }

            }else{
                $sql = "INSERT INTO alunos(login, senha, nome, data_nascimento) VALUES (:login, :senha, :nome, :data_nascimento);";
                $stmt = $PDO->prepare( $sql );
                $stmt->bindParam(':login',$this->login);
                $stmt->bindParam(':senha',$this->senha);
                $stmt->bindParam(':nome',$this->nome);
                $stmt->bindParam(':data_nascimento',$this->data_nascimento);
                $result = $stmt->execute();
                if ( ! $result ){
                    var_dump( $stmt->errorInfo() );
                    exit;
                }
            }

        }

        static function authenticate($login,$senha){
            $PDO = Connection::create_connection();
            
            $sql = "SELECT * FROM ALUNOS WHERE login = :login AND senha = :senha;";
            $stmt = $PDO->prepare( $sql );
            $stmt->bindParam(':login',$login);
            $stmt->bindParam(':senha',$senha);
            $result = $stmt->execute();
            if ( ! $result ){
                var_dump( $stmt->errorInfo() );
                exit;
            }
            $row = $stmt->fetch();
            $al = new Aluno($row['login'],$row['senha'],$row['nome'],$row['data_nascimento']);
            $al->set_matricula($row['matricula']);
            return $al;
        }

    }
?>