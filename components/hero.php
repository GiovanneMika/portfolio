<?php
$itens = [
    ['href' => 'https://www.linkedin.com/in/giovanne-mika-b73179294/', 'src' => 'https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white', 'alt' => 'LinkedIn'],
    ['href' => 'https://www.youtube.com/@giovannemika-htmlsociety7622', 'src' => 'https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white', 'alt' => 'YouTube'],
    ['href' => 'https://github.com/GiovanneMika', 'src' => 'https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white', 'alt' => 'GitHub'],
    ['href' => 'mailto:giovannemika18@gmail.com', 'src' => 'https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white', 'alt' => 'Gmail'],
]

?>

<section class="flex gap-x-3 md:flex-row flex-col-reverse items-center ">
    <!-- Titulo e Descrição -->
    <div class="size-2/3">
        <h1 class="sm:text-3xl text-3xl font-bold my-6 md:text-left text-center">Oi, meu nome é Giovanne!</h1>
        <p class="sm:text-xl text-lg leading-8 mt-2 md:text-left text-left">Sou um desenvolvedor full-stack em
            formação,
            cursando <strong>Análise
                e Desenvolvimento de Sistemas na UTFPR </strong>.
            <br>
            Meu foco principal é construir soluções robustas com PHP, e estou me aprofundando nos frameworks
            Laravel e CodeIgniter 4. Estou em busca de uma oportunidade para aplicar meus
            conhecimentos, aprender com a equipe e ajudar a construir projetos de impacto.
        </p>
        <ul class="flex gap-x-3 mt-4">
            <?php foreach ($itens as $contato): ?>
                <li class="transition hover:border hover:border-gray-300 hover:scale-110 border border-slate-900"><a
                        href="<?= $contato['href'] ?>" target="_blank"><img
                            src="<?= $contato['src'] ?>"
                            alt="<?= $contato['alt'] ?> Logo" /></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- Imagem -->
    <div class="md:size-1/3 sm:size-3/6 my-6 size-4/6">
        <img class="rounded-full active:animate-spin hover:cursor-pointer"
            src="https://avatars.githubusercontent.com/u/69139838?v=4" alt="FFoto Giovanne Mika">
    </div>
</section>