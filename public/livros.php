<!DOCTYPE html>

<head>
    <style>
        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>

<html>

<body>
    <div class="content">
        <h1>Bibliófilo's</h1>

        <h2>Livros</h2>
        <?php
        require 'mysql_server.php';

        $conexao = RetornaConexao();

        $titulo = 'titulo';
        $autor = 'autor';
        $categoria = 'categoria';
        $classificacao = 'classificacao';
        $editora = 'editora';
        $num_pag = 'num_pag';
        $data_lancamento = 'data_lancamento';
        $edicao = 'edicao';
        /*TODO-1: Adicione uma variavel para cada coluna */


        $sql =
            'SELECT ' . $titulo .
            '     , ' . $autor .
            '     , ' . $categoria .
            '     , ' . $classificacao .
            '     , ' . $editora .
            '     , ' . $num_pag .
            '     , ' . $data_lancamento .
            '     , ' . $edicao .
            /*TODO-2: Adicione cada variavel a consulta abaixo */
            '  FROM livros';


        $resultado = mysqli_query($conexao, $sql);
        if (!$resultado) {
            echo mysqli_error($conexao);
        }



        $cabecalho =
            '<table>' .
            '    <tr>' .
            '        <th>' . $titulo . '</th>' .
            '        <th>' . $autor . '</th>' .
            /* TODO-3: Adicione as variaveis ao cabeçalho da tabela */
            '        <th>' . $categoria . '</th>' .
            '        <th>' . $classificacao . '</th>' .
            '        <th>' . $editora . '</th>' .
            '        <th>' . $num_pag . '</th>' .
            '        <th>' . $data_lancamento . '</th>' .
            '        <th>' . $edicao . '</th>' .
            '    </tr>';

        echo $cabecalho;

        if (mysqli_num_rows($resultado) > 0) {

            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';

                echo '<td>' . $registro[$titulo] . '</td>' .
                    '<td>' . $registro[$autor] . '</td>' .
                    /* TODO-4: Adicione a tabela os novos registros. */
                    '<td>' . $registro[$categoria] . '</td>'.
                    '<td>' . $registro[$classificacao] . '</td>' .
                    '<td>' . $registro[$editora] . '</td>' .
                    '<td>' . $registro[$num_pag] . '</td>' .
                    '<td>' . $registro[$data_lancamento] . '</td>' .
                    '<td>' . $registro[$edicao] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '';
        }
        FecharConexao($conexao);
        ?>
    </div>
</body>

</html>