<h1>Métodos Estáticos</h1>

<h3>O método estático não precisa instancia-lo para chama-lo.</h3>
<h3 style="color: red">Exemplo: Documento::validarCpf($numero);</h3>
<h3>Pode ser chamado dentro ou fora da classe.</h3>
<p>


</p>
class Documento{ <br>
private $numero; <br><br>

public function getNumero()<br>
{<br>
return $this->numero;<br>
}<br><br>

public function setNumero($numero)<br>
{<br>
$res = Documento::validarCpf($numero);<br>
if($res === false){<br>
throw new Exception('CPF inválido!!',1);<br>
}<br>
$this->numero = $numero;<br>
}<br><br>

public static function validarCpf($cpf){<br><br>

if(empty($cpf)) {<br>
return false;<br>
}<br>

$cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;<br>

$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);<br><br><br>


if (strlen($cpf) != 11) {<br>
echo "length";<br>
return false;<br>
}<br><br>

else if ($cpf == '00000000000' ||<br>
$cpf == '11111111111' ||<br>
$cpf == '22222222222' ||<br>
$cpf == '33333333333' ||<br>
$cpf == '44444444444' ||<br>
$cpf == '55555555555' ||<br>
$cpf == '66666666666' ||<br>
$cpf == '77777777777' ||<br>
$cpf == '88888888888' ||<br>
$cpf == '99999999999') {<br>
return false;<br><br>

} else {<br>

for ($t = 9; $t < 11; $t++) {<br><br>

for ($d = 0, $c = 0; $c < $t; $c++) {<br>
$d += $cpf{$c} * (($t + 1) - $c);<br>
}<br>
$d = ((10 * $d) % 11) % 10;<br>
if ($cpf{$c} != $d) {<br>
return false;<br>
}<br>
}<br><br>

return true;<br>
}<br>
}<br>

}<br><br>

$num = new Documento();<br>
$num->setNumero('72887001191');<br>
var_dump($num->getNumero());<br><br><br>


<?php
class Documento{
    private $numero;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $res = Documento::validarCpf($numero);
        if($res === false){
            throw new Exception('CPF inválido!!',1);
        }
        $this->numero = $numero;
    }

    public static function validarCpf($cpf){

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

$num = new Documento();
$num->setNumero('72887001191');
echo 'CPF: <strong>'.$num->getNumero().'</strong>';
//var_dump($num->validarCpf('72887001191'));
?>

<br><br><br>
<button><a href="atributos_metodos2.php">Página anterior Atributos e Métodos </a></button>
<button><a href="metodos_magicos4.php">Proxima aula Métodos Magicos</a></button>
<br><br>
