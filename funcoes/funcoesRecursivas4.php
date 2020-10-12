<h1>Função recursiva (Quando a função chama a si mesmo)</h1>

<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                )
            ),
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    array(
                        'nome_cargo'=>'Gerente de Contas a pagar',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=>'Supervisor de pagamentos'
                            )
                        )
                    ),
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=>'Supervisor de suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'Funcionario'
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    )
);


function exibe($cargos){
    $html = '<ul>';

    foreach($cargos as $cargo){

        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }
        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}
echo exibe($hierarquia);

?>

<br><br><br>
<button><a href="novidadesFuncoes3.php">Página anterior Novidade em funções. </a></button>
<button><a href="funcoesAnonimas5.php">Proxima aula Funções Anônimas</a></button>
<br><br>
