<h1>Polimorfismo</h1>
<h3>Métodos com o mesmo none em classes diferentes com comportamentos diferentes</h3>
<h3>Como retornar o resultado de um método da classe pai quando se está instanciando a classe flilho com método do mesmo nome:</h3>
<p style="color: red"><strong>Ex:</strong></p>
<p ><strong>
        class Animal{<br><br>

        public function falar(){<br>
        return "Som";<br>
        }<br><br>

        public function mover(){<br>
        return 'Anda';<br>
        }<br>
        }<br><br>

        class Passaro extends Animal{<br><br>

        public function falar(){<br>
        return "Canta";<br>
        }<br>
        public function mover(){<br>
        $r = 'Voa e ';<br>
        $e = '.';<br>
        return $r . <i style="color: red">parent::mover()</i>.$e;<br>
        }<br>
        }<br><br>


        $ave = new Passaro();<br>
        echo'Instanciando classe Passaro';<br>
        echo $ave->falar();<br>
        echo $ave->mover();<br>
    </strong></p>
<h3><i style="color: red">parent::mover()</i> (parente e uma referencia a classe PAI, e o mover() é o metodo mover da classe pai) </h3>
<h3>Lembrar: Para retornar duas ou mais variaveis em um metodo: ( <i style="color: red">return $r . parent::mover().$e;)</i> </h3>
<hr>
<br><br>
<p>
    class Animal{<br><br>

    public function falar(){<br>
    return "Som";<br>
    }<br><br>

    public function mover(){<br>
    return 'Anda';<br>
    }<br>
    }<br><br>

    class Cachorro extends Animal{<br><br>

    public function falar(){<br>
    return "Late";<br>
    }<br>
    }<br><br>

    class Gato extends Animal{<br><br>

    public function falar(){<br>
    return "Mia";<br>
    }<br>
    }<br><br>

    class Passaro extends Animal{<br><br>

    public function falar(){<br>
    return "Canta";<br>
    }<br>
    public function mover(){<br>
    $r = 'Voa e ';<br>
    $e = '.';<br>
    return $r . parent::mover().$e;<br>
    }<br>
    }<br><br>

    $pluto = new Cachorro();<br>
    echo'Instanciando classe cachorro';<br>
    echo $pluto->falar();<br>
    echo $pluto->mover();<br><br><br>


$gato = new Gato();<br>
echo'Instanciando classe gato';<br>
echo $gato->falar();<br>
echo $gato->mover();<br><br><br>


$ave = new Passaro();<br>
echo'Instanciando classe Passaro';<br>
echo $ave->falar();<br>
echo $ave->mover();<br>
</p>

<?php
class Animal{

    public function falar(){
        return "Som";
    }

    public function mover(){
        return 'Anda';
    }
}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }
}

class Gato extends Animal{

    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{

    public function falar(){
        return "Canta";
    }
    public function mover(){
        $r = 'Voa e ';
        $e = '.';
        return $r . parent::mover().$e;
    }
}

$pluto = new Cachorro();
echo'Instanciando classe cachorro <br>';
echo $pluto->falar();
echo'<br>';
echo $pluto->mover();

echo'<hr>';

$gato = new Gato();
echo'Instanciando classe gato <br>';
echo $gato->falar();
echo'<br>';
echo $gato->mover();

echo'<hr>';

$ave = new Passaro();
echo'Instanciando classe Passaro <br>';
echo $ave->falar();
echo'<br>';
echo $ave->mover();

?>


<br><br><br>
<button><a href="classe_abstrata8.php">Página anterior Classe abstrata </a></button>
<button><a href="autoload9/autoload9.php">Proxima aula Autoload </a></button>
<br><br>


