<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meu portifolio</title>
</head>

<body>
    <?php include('./components/header.php') ?>

    <?php include('./components/posts.php') ?>

    <footer class="bg-[url('/images/img2.png')] bg-cover h-screen w-full flex flex-col items-center justify-center" >
        <div>
            <h3 class="text-purple-400 text-center">Contato</h3>
            <h2 class="text-white text-2xl text-center" >Gostou do meu trabalho?</h2>
            <span class="text-gray-400 text-center">Entre em contato ou acompanhe as minhas redes sociais!</span>
        </div>
        <div class="mt-10 flex flex-col gap-y-4">
            <div class="flex bg-gray-800 w-96 h-12 items-center justify-between rounded-xl">
                <div class="flex ml-4">
                    <img src="/images/linkedin-logo.png" alt="" class="h-7 w-7">
                    <span class="text-gray-400 ml-2" >LinkedIn</span>
                </div>
                <img src="/images/arrow-up-right.png" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
            <div class="flex bg-gray-800 w-96 h-12 items-center justify-between rounded-xl">
                <div class="flex ml-4">
                    <img src="/images/instagram-logo.png" alt="" class="h-7 w-7">
                    <span class="text-gray-400 ml-2" >Instagram</span>
                </div>
                <img src="/images/arrow-up-right.png" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
            <div class="flex bg-gray-800 w-96 h-12 items-center justify-between rounded-xl">
                <div class="flex ml-4">
                    <img src="/images/github-logo.png" alt="" class="h-7 w-7">
                    <span class="text-gray-400 ml-2" >Github</span>
                </div>
                <img src="/images/arrow-up-right.png" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
            <div class="flex bg-gray-800 w-96 h-12 items-center justify-between rounded-xl">
                <div class="flex ml-4">
                    <img src="/images/envelope-simple.png" alt="" class="h-7 w-7">
                    <span class="text-gray-400 ml-2" >E-mail</span>
                </div>
                <img src="/images/arrow-up-right.png" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
        </div>
    </footer>
</body>

</html>