<h1>Encapsulamento</h1>
<h3>public: Pode ser acessado de fora pelo objeto instanciado ou de dentro da classe.</h3>
<h3>protected: Só pode ser acessado por metodos que estão dentro da classe ou quem herda dessa classe (O objeto instanciado não acessa o atributo diretamente).</h3>
<h3>private: Só a própria classe acessa (não herda).</h3>
<p>
    class Pessoa{<br>
    public $nome = 'Rasmus Lerdorf';<br>
    protected $idade = 48;<br>
    private $senha = '123456';<br><br>

    public function verDados(){<br>
    echo $this->nome;<br>
    echo $this->idade;<br>
    echo $this->senha;<br>
    }<br>
    }<br>
    $p = new Pessoa();<br>
    echo $p->nome;<br><br>
    //nem a ide deixa acessar os objetos protected e private<br><br>
    //echo $p->idade;<br>
    //echo $p->senha;<br>
    echo $p->verDados();<br><br>


</p>
<h3>Os objetos protected e private são acessados pelo método verDados()</h3>


<?php
class Pessoa{
    public $nome = 'Rasmus Lerdorf';
    protected $idade = 48;
    private $senha = '123456';

    public function verDados(){
        echo $this->nome.'<br>';
        echo $this->idade.'<br>';
        echo $this->senha.'<br>';
    }
}
$p = new Pessoa();
echo $p->nome.'<br>';
//nem a ide deixa acessar os objetos protected e private
//echo $p->idade.'<br>';
//echo $p->senha.'<br>';
echo $p->verDados();

?>

<hr>

<h1>Exemplo de herança</h1>
<h3>A classe Programador herda de Pessoa</h3>
<h3>Acessando o método verDados()</h3>
<p>
    class Programador extends Pessoa{<br><br>

    }<br><br>

    $prog = new Programador();<br>
    echo $prog->verDados();<br><br>

</p>

<?php
class Programador extends Pessoa{

}

$prog = new Programador();
echo $prog->verDados();

?>

<hr>

<h1>Outro Exemplo de herança</h1>
<h3>A classe Analista herda de Pessoa</h3>
<h3>Copiando o método verDados() para a classe Analista para mostrar que o 'private $senha' não pode ser exibido pela classe analista pois o private não herda e so tem acesso na classe onde ele está</h3>
<p>
    class Analista extends Pessoa{<br><br>

    public function verDados(){<br>
    echo 'Mostra a classe que esta sendo chamado o método -> '.get_class($this);<br>
    echo $this->nome;<br>
    echo $this->idade;<br>
    echo $this->senha;<br>
    }<br><br>

    }<br><br>

    $prog = new Programador();<br>
    echo $prog->verDados();<br><br>

</p>

<h3>Para testar descomentar a linha 106 (echo $this->senha;)</h3>

<?php
class Analista extends Pessoa{

    public function verDados(){
        echo 'Mostra a classe que esta sendo chamado o método -> '.get_class($this).'<br>';
        echo $this->nome.'<br>';
        echo $this->idade.'<br>';
//        echo $this->senha.'<br>';
    }
}

$ana = new Analista();
echo $ana->verDados();

?>



<br><br><br>
<button><a href="metodos_magicos4.php">Página anterior Metodos Mágicos </a></button>
<button><a href="heranca6.php">Proxima aula Herança </a></button>
<br><br>
