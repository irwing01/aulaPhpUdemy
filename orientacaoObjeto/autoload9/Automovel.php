<?php
interface veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMacha($macha);
}



abstract class Automovel implements Veiculo{

    public function acelerar($velocidade)
    {
        echo 'O veículo acelerou até '.$velocidade.' Km/h';
    }

    public function frenar($velocidade)
    {
        echo 'O veículo frenou até '.$velocidade.' Km/h';
    }

    public function trocarMacha($macha)
    {
        echo 'O veículo engatou a '.$macha.' marcha';
    }
}