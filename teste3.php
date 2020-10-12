<?php
date_default_timezone_set('America/Sao_paulo');
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");
?>
<h1> <?= date('d/m/Y - H:i:s'); ?></h1>
<h1> <?= strtotime('1985/03/08'); ?></h1>
<h1> <?= date('d/m/Y',479098800); ?></h1>
<h1> <?= strtotime('+1 week'); ?></h1>
<h1> <?= date('d/m/Y - H:i:s',1600028512); ?></h1>
<hr>
<h2><?= strftime('%A - %d de %B de %G')?></h2>
<h2>
    <?php
        $date = new DateTime();
        echo $date->format('d/m/Y - H:i:s');

    ?>

</h2>
<h2>
    <?php
    $per = new DateInterval('P15D');
    $date->add($per);
    echo $date->format('d/m/Y - H:i:s');

    ?>
</h2>
<h2>
    <?php
    $d = new DateTime();
    $p = new DateInterval('P10D');
    $d->sub($p);
    echo $d->format('d/m/Y - H:i:s');
    ?>
</h2>
<h2>
    <?php
    $niver = new DateTime('1957/02/25');
    $atual = new DateTime('2020/08/27');
    $idade = $niver->diff($atual);
    echo $idade->format('%Y Anos %m meses %d dias');

    ?>
</h2>
<hr>
<?php
class Pessoa{
    private $nome;
    private $tel;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function dados(){
        return 'Meu nome é '.$this->getNome(). ' e meu telefone é '. $this->getTel() . '.';
    }
}

class Funcionario extends Pessoa{


    public function funcionario(){
        return 'Funcionário nome : '.$this->getNome(). ' e telefone : '. $this->getTel() . '.';
    }

}

?>
<h1>Dados Pessoais</h1>
<?php
$dados = new Pessoa();
$dados->setNome('irwing');
$dados->setTel(993176442);
?>
<h3><?= $dados->dados(); ?></h3>
<hr>
<?php
$func = new Funcionario();
$func->setNome('Aldo');
$func->setTel(999999999);

?>
<h3><?= $func->funcionario(); ?></h3>