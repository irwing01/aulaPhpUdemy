<?php
//include_once 'teste.php';
//$var = DocumentoTeste::validaCpf('72887001191');
//var_dump($var);


class Pessoa1{
    public $nome = 'irwing';
    protected $idade = '35';
    private $senha = 123456;

    public function ver(){
        echo get_class($this).'<br>';
        echo $this->nome.'<br>';
        echo $this->idade.'<br>';
        echo $this->senha.'<br>';
    }
}

class Funcionário extends Pessoa1{

//    public function ver(){
//        echo get_class($this).'<br>';
//        echo $this->nome.'<br>';
//        echo $this->idade.'<br>';
//        echo $this->senha.'<br>';
//    }
}

$p = new Funcionário();
$p->ver();


















