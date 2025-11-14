<?php
$projetos = [
    [
        "titulo" => "Portfolio",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" => "Portfólio dinâmico desenvolvido em PHP, estruturado com componentes reutilizáveis e uso de lógica para manipulação de dados, filtragem e exibição de projetos. Aplica fundamentos essenciais da linguagem, como variáveis, funções, condicionais e arrays, além de integração com HTML e TailwindCSS. O resultado é uma página organizada, modular e totalmente gerada de forma dinâmica pelo servidor.",
        "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
        "emoji" => "💻",
        "link" => "https://github.com/GiovanneMika/portfolio",
    ],
    [
        "titulo" => "Gerenciador de Empregos",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "API RESTful desenvolvida para gerenciar usuários e suas informações profissionais, incluindo
                experiência e formação acadêmica. O sistema implementa autenticação segura via JWT (JSON Web
                Token) e segue boas práticas de desenvolvimento de APIs.",
        "stack" => ["Laravel", "HTML", "CSS", "JavaScript", "SQLite"],
        "emoji" => "📋",
        "link" => "https://github.com/GiovanneMika/gerenciador-empregos",
    ],
    [
        "titulo" => "ONG Los Lobos e Los Gatos",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Projeto desenvolvido para a ONG Casa Los Lobos e Los Gatos, consistindo em uma landing page institucional e um sistema para automatizar o apadrinhamento de animais resgatados. Inclui autenticação, dashboards e CRUD de usuários, administradores e animais, seguindo arquitetura limpa e princípios SOLID. A solução foi construída com Next.js no frontend e Node.js/TypeScript no backend, com API documentada em Swagger.",
        "stack" => ["Next.js", "HTML", "TailwindCSS"],
        "emoji" => "🐺",
        "link" => "https://github.com/pereirathiago/projeto-casa-los-lobos-los-gatos-backend",
    ],
];

$stacksColors = [
    "PHP" => "bg-[#4F5B93]",
    "CSS" => "bg-blue-600",
    "HTML" => "bg-orange-500",
    "SQLite" => "bg-sky-700",
    "JavaScript" => "bg-amber-400",
    "Laravel" => "bg-orange-600",
    "Next.js" => "bg-zinc-500",
    "TailwindCSS" => "bg-sky-500",
]


?>

<?php foreach ($projetos as $projeto): ?>
    <div class="my-5 flex p-4 items-center bg-slate-800 rounded-lg max-[550px]:flex-col max-[550px]:gap-y-6">
        <div class="w-1/6 h-full flex justify-center items-center">
            <p class="text-8xl -mt-4"><?= $projeto['emoji'] ?></p>
        </div>
        <div class="size-5/6 max-[550px]:w-full">
            <div class="flex ml-4 sm:flex-row flex-col">
                <h3 class="mr-4 text-2xl font-semibold hover:text-slate-400">
                    <a href="<?= $projeto['link'] ?>" target="_blank">
                        <?= ($projeto['finalizado'] ? "✔️" : "⌛") ?>
                        <?= $projeto['titulo'] ?>
                        <span class="text-xs text-gray-500 opacity-70 italic">
                            <?= ($projeto['finalizado'] ? "(finalizado em " . $projeto["ano"] . ")" : "(em andamento)") ?>
                        </span>
                    </a>
                </h3>
                <ul class="flex gap-x-2 text-slate-800 font-semibold text-xs items-center sm:mt-0 mt-2">
                    <?php foreach ($projeto['stack'] as $stack): ?>
                        <li class="rounded-lg <?= (!isset($stacksColors[$stack]) || !$stacksColors[$stack]) ? "bg-gray-600" : $stacksColors[$stack]  ?> p-1"><?= $stack ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="ml-4 mt-2 mr-4 text-gray-400">
                <p><?= $projeto['descricao'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>