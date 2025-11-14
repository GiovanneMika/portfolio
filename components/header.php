<?php
$itens = [
    ['href' => '#projetos', 'label' => 'Projetos', 'externo' => false],
    ['href' => 'https://github.com/GiovanneMika', 'label' => 'GitHub', 'externo' => true],
    ['href' => 'https://www.linkedin.com/in/giovanne-mika-b73179294/', 'label' => 'LinkedIn', 'externo' => true],
]

?>

<header class="mx-auto max-w-screen-lg px-4 py-6 flex items-center justify-between mx-8">
    <div class="font-bold font-mono text-2xl text-sky-300">
        👨🏼‍💻Meu Portfolio...
    </div>
    <div class="w-1/3">
        <ul class="flex font-medium text-gray-300 justify-around gap-x-6">
            <?php foreach ($itens as $menu): ?>
                <?php if ($menu['externo']): ?>
                    <li>
                        <a class="hover:text-zinc-600" target="_blank" href="<?= $menu['href'] ?>"><?= $menu['label'] ?></a>
                    </li>
                <?php else: ?>
                    <li>
                        <a class="hover:text-zinc-600" href="<?= $menu['href'] ?>"><?= $menu['label'] ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</header>