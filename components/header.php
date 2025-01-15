<?php 
    $linguagens = [
        ['texto' => 'Github'],
        ['texto' => 'PHP'],
        ['texto' => 'CSS'],
        ['texto' => 'HTML'],
        ['texto' => 'JavaScript']
    ]
?>

<section class="bg-[url('/images/img1.png')] bg-cover h-screen flex flex-col items-center justify-center h-full w-full text-center gap-y-3">
        <img src="/images/perfil.jpg" alt="" class="object-contain object-cover rounded-full h-24 w-24 border-2 border-rose-500 mb-10">
        <h2 class="text-gray-400">Hello World! Meu nome é <span class="text-red-400">Goldie</span> e sou</h2>
        <h1 class="text-white text-5xl font-bold">Desenvolvedor PHP</h1>
        <p class="text-gray-600 w-3/5 mt-3">
            Transformo necessidades em aplicações reais, envolventes e funcionais. Desenvolvo sistemas através da minha
            paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
        </p>
        <div class="flex gap-x-3 mt-16">
            <?php 
            $colors = ['green', 'violet', 'blue', 'red', 'yellow'];
            foreach($linguagens as $posicao => $linguagem): ?>
                <span class="bg-<?=$colors[$posicao] ?>-400 px-3 py-1 rounded-full font-bold"><?=$linguagem['texto'] ?></span>
            <?php endforeach ?>
        </div>
    </section>