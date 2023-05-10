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

          //return $result; não vai retornar como linha e sim como objeto

          foreach ($result as $linha){
              $operador = new \MODEL\Operador(); 

              $operador->setId($linha['id']); 
              $operador->setNome($linha['nome']);
              
             //$operador->setAniversario($linha['aniversario']);
              $data = date_create($linha['aniversario']);
              $operador->setAniversario(date_format($data, 'd-m-Y')); 

              $operador->setSalario($linha['salario']);

              $lstOperador[] = $operador; 
          }

          return $lstOperador; 
   
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