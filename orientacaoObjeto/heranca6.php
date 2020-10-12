<h1>Herança</h1>
<h3>A classe filha herda atributos e métodos da classe pai, mas a classe pai não herda atributos e métodos da classe filha.</h3>
<h3></h3>
<p>
    class Documento{ <br>
    private $numero;<br><br>

    public function getNumero(){<br>
    return $this->numero;<br>
    }<br>
    public function setNumero($n){<br>
    $this->numero = $n;<br>
    }<br>
    }<br><br><br>


    class CPF extends Documento{<br><br>

    public function validar(){<br>
    $numeroCpf = $this->getNumero();<br>
    //            var_dump($numeroCpf);<br>
    return $numeroCpf;<br>
    }<br>
    }<br><br>

    $obj = new CPF();<br>
    $obj->setNumero('72887001191');<br>
    echo $obj->validar();<br>
    echo $obj->getNumero();<br>
</p>

<?php
    class Documento{
        private $numero;

        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($n){
            $this->numero = $n;
        }
    }


    class CPF extends Documento{

        public function validar(){
            $numeroCpf = $this->getNumero();
//            var_dump($numeroCpf);
            return $numeroCpf;
        }
    }

$obj = new CPF();
$obj->setNumero('72887001191');
echo $obj->validar();
echo '<br>';
echo $obj->getNumero();

?>



<br><br><br>
<button><a href="encapsulamento5.php">Página anterior Encapsulamento </a></button>
<button><a href="interface7.php">Proxima aula Interface </a></button>
<br><br>

