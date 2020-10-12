<h1>NAMESPACE</h1>
<h3>
    Todos os arquivos que estiver na pasta 'class' são classes genéricas. Tudo que estiver em sub pastas obrigatoriamente tem seu namespace
    e é mais para assuntos mais específicos.
</h3>
<p>
    require_once ('config.php');<br><br>

    use Cliente\Cadastro;<br><br>

    $cad = new Cadastro();<br>
    $cad->setNome('Djalma Sindeaux');<br>
    $cad->setEmail('djalma@hcode.com.br');<br>
    $cad->setSenha('123456');<br>
    //echo $cad->__toString();<br><br>

    $cad->registrarVenda();<br>

</p>

<?php
require_once ('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome('Djalma Sindeaux');
$cad->setEmail('djalma@hcode.com.br');
$cad->setSenha('123456');
//echo $cad->__toString();

$cad->registrarVenda();

?>
<hr>
<h3>Passo a passo - para entender</h3>

<p>Foi criado o diretório 'namespace' com aquivo index.php e o arquivo config.php com a função autoload.</p>
<p>Dentro do diretório 'namespace' foi criado o diretório 'class' contendo o arquivo cadastro.php (class cadastro).</p>
<p>Dentro do diretório 'class' foi criado o diretório 'Cliente' contendo um arquivo Cadastro(class cadastro) com o mesmo nome de arquivo e classe da pasta raiz
class Cadastro.</p>
<p>Na classe cadastro na pasta cliente:</p>
<p>Foi criado o NAMESPACE Cliente</p>
<p>A classe é extends a Cadastro da pasta raiz.</p>
<fieldset style="border-color: red;">
<legend>Ex:</legend>
<p>
    namespace Cliente;<br><br>
    class Cadastro extends \Cadastro {<br><br>

    public function registrarVenda(){<br>
    echo "Foi registrada a venda para o cliente " . $this->getNome();<br>
    }<br>
    }<br>
</p>
</fieldset>
<p>No arquivo index:</p>
<p>Para instanciar a class Documeto do diretório Cliente é necessário usar o</p>
<p>use Cliente\Cadastro</p>
<p>Ex:</p>
<fieldset style="border-color: red">
    <legend>use Cliente\Cadastro;</legend>
    require_once ('config.php');<br><br>

    use Cliente\Cadastro;<br><br>

    $cad = new Cadastro();<br>
    $cad->setNome('Djalma Sindeaux');<br>
    $cad->setEmail('djalma@hcode.com.br');<br>
    $cad->setSenha('123456');<br>
    //echo $cad->__toString();<br><br>

    $cad->registrarVenda();<br>
</fieldset>



<br><br><br>
<button><a href="../autoload9/autoload9.php">Página anterior Autoload</a></button>
<button><a href="../../banco_de_dados/conexaoBanco1.php">Próxima aula Conexão com Banco </a></button>
<br><br>

