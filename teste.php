<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testes</title>
</head>
<body>
<form>
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="texto" placeholder="texto">
    <input type="submit">
</form>
<table border="1">
    <thead>
    <tr>
        <th>Nome</th>
        <th>texto</th>
    </tr>
    </thead>
    <tr>
<?php foreach ($_GET as $iten):?>
            <td><?= $iten; ?></td>
<?php endforeach;?>
    </tr>
</table>
<hr>
<?php

function teste(){
    global $dados;
    $dados = 'irwing';
}

teste();
echo $dados;
echo'<hr><hr><hr><hr><hr>';

$e['nome'] = 'irwing';
$e['dados'] = array('telefone'=>123456, 'endereco'=>'quadra23');

$dado = json_encode($e);
var_dump($dado);

echo'<hr>';
$dec = json_decode($dado);
var_dump($dec->nome);
echo '<br>';
var_dump($dec->dados);
echo'<hr>';
echo $dec->nome;
echo'<hr>';
foreach($dec->dados as $i){
    echo $i;
}
echo'<hr><hr><hr><hr><hr>';
session_start();

$_SESSION['tese'] = 'irwing';
$_SESSION['titulo'] = 'A importancia de estudar';

var_dump($_SESSION);
echo'<hr><hr><hr><hr><hr><hr>';

echo session_id();
//session_regenerate_id();
echo'<hr><hr><hr><hr><hr><hr><hr><hr>';
$dt = new DateTime();
echo $dt->format('d/m/Y - H:i:s');
echo '<hr>';
$p = new DateInterval('P10D');
$dt->sub($p);
echo $dt->format('d/m/Y');
echo'<hr><hr><hr><hr><hr><hr>';
$niver = new DateTime('1985/03/08');
$atual = new DateTime('now');
$idade = $niver->diff($atual);
echo $idade->format('%Y anos %m meses %d dias - %H:%i:%s');

echo '<hr><hr>';
class DocumentoTeste{
    private $cpf;

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($value){

        $this->cpf = $value;
    }

    public function validaCpf(){
        if(!empty($this->getCpf())){
            $cpf = $this->getCpf();
        }
        if(empty($cpf)) {
            return false;
        }

        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }

        else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            return false;

        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }
}
$dado = '72887001191';
$doc = new DocumentoTeste();
$doc->setCpf($dado);
var_dump($doc->validaCpf());
echo $doc->getCpf();

?>
</body>
</html>


