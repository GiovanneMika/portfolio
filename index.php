<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-gray-200">
    <?php include './components/header.php'; ?>
    <main class="mx-auto max-w-screen-lg px-3">
        <?php include './components/hero.php'; ?>
        <!-- Projetos -->
        <section class="gap-y-6" id="projetos">
            <h2 class="text-3xl font-bold">Projetos Recentes</h2>
            <?php include './components/projects.php'; ?>
        </section>
    </main>
    <!-- Footer -->
    <footer class="h-20 mx-auto max-w-screen-lg">
        <div class="border-t border-gray-600">
            <div>
                <p class="text-center text-gray-500 text-sm py-4">© <?= date("Y"); ?> Feito por Giovanne Mika com ❤️ :)</p>
            </div>
            <!-- Outros Links -->
            <div>
            </div>
        </div>
    </footer>
</body>

</html>