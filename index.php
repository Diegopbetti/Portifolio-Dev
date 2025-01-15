<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meu portifolio</title>
</head>

<body class="bg-[url('/images/img1.png')] h-screen w-full bg-cover bg-center">
    <section class="flex flex-col items-center justify-center h-full text-center gap-y-3">
        <img src="/images/perfil.jpg" alt="" class="object-contain object-cover rounded-full h-24 w-24 border-2 border-rose-500 mb-10">
        <h2 class="text-gray-400">Hello World! Meu nome é <span class="text-red-400">Goldie</span> e sou</h2>
        <h1 class="text-white text-5xl font-bold">Desenvolvedor PHP</h1>
        <p class="text-gray-600 w-3/5">
            Transformo necessidades em aplicações reais, envolventes e funcionais. Desenvolvo sistemas através da minha
            paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
        </p>
        <div class="flex gap-x-3 mt-16">
            <span class="bg-green-400 px-3 py-1 rounded-full font-bold">Github</span>
            <span class="bg-violet-400 px-3 py-1 rounded-full font-bold">PHP</span>
            <span class="bg-blue-400 px-3 py-1 rounded-full font-bold">CSS</span>
            <span class="bg-red-400 px-3 py-1 rounded-full font-bold">HTML</span>
            <span class="bg-yellow-400 px-3 py-1 rounded-full font-bold">JavaScript</span>
        </div>
    </section>


    <section class="flex flex-col items-center">
        <div class="flex flex-col items-center mb-10">
            <span class="text-red-400">Meu trabalho</span>
            <span class="text-white text-2xl">Veja os projetos em destaque</span>
        </div>
        <div class="flex flex-col grid grid-cols-2 gap-x-5 gap-y-5 w-5/6">
            <div class="flex bg-gray-800 h-44 w-full rounded-xl gap-x-3">
                <img src="/images/post1.png" alt="" class="h-40 w-1/2 mt-2 ml-2 rounded-xl object-cover">
                <div class="flex flex-col mt-2">
                    <span class="text-white font-bold">Travelgram</span>
                    <span class="text-gray-400 w-52 mt-2">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</span>
                    <div class="mt-6">
                        <span class="bg-violet-400 px-3 py-1 rounded-full text-xs font-bold">PHP</span>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-xs font-bold">CSS</span>
                        <span class="bg-red-400 px-3 py-1 rounded-full text-xs font-bold">HTML</span>
                        <span class="bg-yellow-400 px-3 py-1 rounded-full text-xs font-bold">JavaScript</span>
                    </div>
                </div>
            </div>
            <div class="flex bg-gray-800 h-44 w-full rounded-xl gap-x-3">
                <img src="/images/post2.png" alt="" class="h-40 w-1/2 mt-2 ml-2 rounded-xl object-cover">
                <div class="flex flex-col mt-2">
                    <span class="text-white font-bold">Página de receita</span>
                    <span class="text-gray-400 w-52 mt-2">Página com o passo a passo de uma receita para cupcakes</span>
                    <div class="mt-6">
                        <span class="bg-violet-400 px-3 py-1 rounded-full text-xs font-bold">PHP</span>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-xs font-bold">CSS</span>
                        <span class="bg-red-400 px-3 py-1 rounded-full text-xs font-bold">HTML</span>
                        <span class="bg-yellow-400 px-3 py-1 rounded-full text-xs font-bold">JavaScript</span>
                    </div>
                </div>
            </div>
            <div class="flex bg-gray-800 h-44 w-full rounded-xl gap-x-3">
                <img src="/images/post3.png" alt="" class="h-40 w-1/2 mt-2 ml-2 rounded-xl object-cover">
                <div class="flex flex-col mt-2">
                    <span class="text-white font-bold">Tech News</span>
                    <span class="text-gray-400 w-52 mt-2">Homepage de um portal de notícias sobra a área de tecnologia</span>
                    <div class="mt-6">
                        <span class="bg-violet-400 px-3 py-1 rounded-full text-xs font-bold">PHP</span>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-xs font-bold">CSS</span>
                        <span class="bg-red-400 px-3 py-1 rounded-full text-xs font-bold">HTML</span>
                        <span class="bg-yellow-400 px-3 py-1 rounded-full text-xs font-bold">JavaScript</span>
                    </div>
                </div>
            </div>
            <div class="flex bg-gray-800 h-44 w-full rounded-xl gap-x-3">
                <img src="/images/post4.png" alt="" class="h-40 w-1/2 mt-2 ml-2 rounded-xl object-cover">
                <div class="flex flex-col mt-2">
                    <span class="text-white font-bold">Refund</span>
                    <span class="text-gray-400 w-52 mt-2">Um sistema para pedido e acompanhamento de reembolso</span>
                    <div class="mt-6">
                        <span class="bg-violet-400 px-3 py-1 rounded-full text-xs font-bold">PHP</span>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-xs font-bold">CSS</span>
                        <span class="bg-red-400 px-3 py-1 rounded-full text-xs font-bold">HTML</span>
                        <span class="bg-yellow-400 px-3 py-1 rounded-full text-xs font-bold">JavaScript</span>
                    </div>
                </div>
            </div>
            <div class="flex bg-gray-800 h-44 w-full rounded-xl gap-x-3">
                <img src="/images/post5.png" alt="" class="h-40 w-1/2 mt-2 ml-2 rounded-xl object-cover">
                <div class="flex flex-col mt-2">
                    <span class="text-white font-bold">Página de turismo</span>
                    <span class="text-gray-400 w-52 mt-2">Página com as principais informações para quem quer viajar para Busan</span>
                    <div class="mt-6">
                        <span class="bg-violet-400 px-3 py-1 rounded-full text-xs font-bold">PHP</span>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-xs font-bold">CSS</span>
                        <span class="bg-red-400 px-3 py-1 rounded-full text-xs font-bold">HTML</span>
                        <span class="bg-yellow-400 px-3 py-1 rounded-full text-xs font-bold">JavaScript</span>
                    </div>
                </div>
            </div>
            <div class="flex bg-gray-800 h-44 w-full rounded-xl gap-x-3">
                <img src="/images/post6.png" alt="" class="h-40 w-1/2 mt-2 ml-2 rounded-xl object-cover">
                <div class="flex flex-col mt-2">
                    <span class="text-white font-bold">Zingen</span>
                    <span class="text-gray-400 w-52 mt-2">Landing Page completa e responsiva de um aplicativo de Karaokê</span>
                    <div class="mt-6">
                        <span class="bg-violet-400 px-3 py-1 rounded-full text-xs font-bold">PHP</span>
                        <span class="bg-blue-400 px-3 py-1 rounded-full text-xs font-bold">CSS</span>
                        <span class="bg-red-400 px-3 py-1 rounded-full text-xs font-bold">HTML</span>
                        <span class="bg-yellow-400 px-3 py-1 rounded-full text-xs font-bold">JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="flex flex-col items-center mt-16" >
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
                    <span class="text-gray-400 ml-2" >LinkedIn</span>
                </div>
                <img src="/images/arrow-up-right.png" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
            <div class="flex bg-gray-800 w-96 h-12 items-center justify-between rounded-xl">
                <div class="flex ml-4">
                    <img src="/images/github-logo.png" alt="" class="h-7 w-7">
                    <span class="text-gray-400 ml-2" >LinkedIn</span>
                </div>
                <img src="/images/arrow-up-right.png" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
            <div class="flex bg-gray-800 w-96 h-12 items-center justify-between rounded-xl">
                <div class="flex ml-4">
                    <img src="/images/envelope-simple.png" alt="" class="h-7 w-7">
                    <span class="text-gray-400 ml-2" >LinkedIn</span>
                </div>
                <img src="/images/arrow-up-right.png" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
        </div>
    </footer>
</body>

</html>