<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
</head>

<body>
    <?php
    $nome = "Giovanne";
    $ano = date('Y', strtotime('+3 year'));
    $projeto = "Portfolio";
    $finalizado = false;
    $anoDoProjeto = 2025;

    $descricao = "Este é o portfolio de $nome, escrito em PHP e HTML, criado em $anoDoProjeto. O projeto '$projeto' está " . ($finalizado ? "finalizado." : "em andamento.");

    $projetos = [
        [
            "titulo" => "Meu portfolio",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Este é o portfolio de $nome, escrito em PHP e HTML, criado em $anoDoProjeto. O projeto '$projeto' está " . ($finalizado ? "finalizado." : "em andamento."),
        ],
        [
            "titulo" => "Blog pessoal",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Um blog pessoal onde compartilho minhas ideias e experiências.",
        ],
        [
            "titulo" => "Loja virtual",
            "finalizado" => true,
            "ano" => 2023,
            "descricao" => "Uma loja virtual para venda de produtos diversos.",
        ],
        [
            "titulo" => "Aplicativo de tarefas",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Um aplicativo para gerenciar tarefas diárias e aumentar a produtividade.",
        ],
        [
            "titulo" => "Sistema de reservas",
            "finalizado" => true,
            "ano" => 2022,
            "descricao" => "Um sistema para gerenciar reservas em restaurantes.",
        ],
        [
            "titulo" => "Site institucional",
            "finalizado" => true,
            "ano" => 2021,
            "descricao" => "Um site institucional para uma empresa de tecnologia.",
        ]
    ];

    $livros = [
        [
            "nome" => "Bacurau",
            "paginas" => 221,
        ],
        [
            "nome" => "Harry Potter",
            "paginas" => 352,
        ],
        [
            "nome" => "O Senhor dos Anéis",
            "paginas" => 415,
        ],
        [
            "nome" => "1984",
            "paginas" => 328,
        ],
        [
            "nome" => "Dom Casmurro",
            "paginas" => 290,
        ],
    ];



    function estaFinalizado(bool $finalizado)
    {
        if ($finalizado) {
            return "<strong style='color:green;'>O projeto foi finalizado com sucesso! 🎉</strong>";
        }
        return "<strong style='color:brown;'>O projeto ainda está em andamento. ⏳</strong>";
    }


    function filtrarProjetos($listaProjetos, $finalizado = null): array
    {
        if ($finalizado === null) { //ou is_null($finalizado) 
            return $listaProjetos;
        }

        $listaProjetosFinalizados = [];
        foreach ($listaProjetos as $projeto) {
            if ($projeto['finalizado'] === $finalizado) {
                $listaProjetosFinalizados[] = $projeto;
            }
        }
        return $listaProjetosFinalizados;
    }

    function filtrar($itens, $chave, $valor, $funcao = null): array
    {
        if ($funcao === null) {
            $funcao = function ($a, $b) {
                return $a == $b;
            };
        }
        if ($chave === null || $valor === null) {
            echo "teste";
            return $itens;
        }

        $listaFiltrada = [];
        foreach ($itens as $item) {
            if (isset($item[$chave]) && $funcao($item[$chave], $valor)) {
                $listaFiltrada[] = $item;
            }
        }
        return $listaFiltrada;
    }

    $projetosFiltrados = array_filter($projetos,  function ($projeto) {
        return $projeto['ano'] <= 2024 && $projeto['ano'] != 2023;
    });

    $livrosFiltrados = filtrar(
        $livros,
        'paginas',
        352,
        function ($a, $b) {
            return $a >= $b;
        }
    );
    ?>

    <h1>Portfolio do <?php echo $nome; ?></h1>

    <?php
    $saudacao = "Bem-vindo ao meu portfolio!";
    echo "<p>$saudacao Estamos no ano de $ano! </p>";
    ?>

    <hr />


    <ul>
        <?php foreach ($livrosFiltrados as $livro): ?>
            <div>
                <h2><?= $livro['nome'] ?></h2>
                <div><?= "Numero de páginas:" . $livro['paginas'] ?></div>
            </div>
        <?php endforeach; ?>
    </ul>
    <hr />

    <ul>
        <?php foreach ($projetosFiltrados as $projeto): ?>
            <div
                <?php if (($ano - $projeto['ano']) > 2): ?>
                style="background-color: lightgreen;"

                <?php endif; ?>>
                <div>
                    <h2><?= $projeto['titulo']; ?></h2>
                    <p><?php echo $projeto['descricao']; ?></p>
                </div>
                <div>
                    <div><?= $projeto['ano']; ?></div>
                </div>
                <div>
                    <div>
                        <?= estaFinalizado($projeto['finalizado']); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>




</body>

</html>