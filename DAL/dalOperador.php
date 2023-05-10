<?php
    namespace DAL; 
    include_once '../../DAL/conexao.php';
    include_once '../../MODEL/Operador.php';
    
    
    class dalOperador{

        public function Select(){
          $sql = "select * from operador;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();

          // return $result; não vai retornar como linha e sim como objeto

          foreach($result as $linha) {
              $operador = new \MODEL\Operador();

              $operador->setId($linha['id']);
              $operador->setNome($linha['nome']);
              $data = date_create($linha['aniversario']);
              $operador->setAniversario($linha['aniversario']);
              $operador->setSalario($linha['salario']);

              $listOperador[] = $operador;
          }
   
          return $listOperador;
        }

        public function SelectID(int $id){

        }

        public function Insert(){

        }

        public function Update(){

        }

        public function Delete(){

        }   


    }

?> 