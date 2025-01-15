<?php 
    $posts = [
        [
            "img"=> "/images/post1.png",
            "projeto" => "Travelgram",
            "sobre" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
            "linguagens" => [
                ['texto' => 'PHP'],
                ['texto' => 'CSS'],
                ['texto' => 'HTML'],
                ['texto' => 'JavaScript']
            ]
        ],
        [
            "img"=> "/images/post2.png",
            "projeto" => "Página de receita",
            "sobre" => "Página com o passo a passo de uma receita para cupcakes",
            "linguagens" => [
                ['texto' => 'PHP'],
                ['texto' => 'CSS'],
                ['texto' => 'HTML'],
                ['texto' => 'JavaScript']
            ]
        ],
        [
            "img"=> "/images/post3.png",
            "projeto" => "Tech News",
            "sobre" => "Homepage de um portal de notícias sobra a área de tecnologia",
            "linguagens" => [
                ['texto' => 'PHP'],
                ['texto' => 'CSS'],
                ['texto' => 'HTML'],
                ['texto' => 'JavaScript']
            ]
        ],
        [
            "img"=> "/images/post4.png",
            "projeto" => "Refund",
            "sobre" => "Página com as principais informações para quem quer viajar para Busan",
            "linguagens" => [
                ['texto' => 'PHP'],
                ['texto' => 'CSS'],
                ['texto' => 'HTML'],
                ['texto' => 'JavaScript']
            ]
        ],
        [
            "img"=> "/images/post5.png",
            "projeto" => "Página de turismo",
            "sobre" => "Página com as principais informações para quem quer viajar para Busan",
            "linguagens" => [
                ['texto' => 'PHP'],
                ['texto' => 'CSS'],
                ['texto' => 'HTML'],
                ['texto' => 'JavaScript']
            ]
        ],
        [
            "img"=> "/images/post6.png",
            "projeto" => "Travelgram",
            "sobre" => "Landing Page completa e responsiva de um aplicativo de Karaokê",
            "linguagens" => [
                ['texto' => 'PHP'],
                ['texto' => 'CSS'],
                ['texto' => 'HTML'],
                ['texto' => 'JavaScript']
            ]
        ],
    ]
?>

<section class="bg-zinc-900 bg-cover h-screen w-full flex flex-col items-center">
        <div class="flex flex-col items-center mb-10">
            <span class="text-red-400">Meu trabalho</span>
            <span class="text-white text-2xl">Veja os projetos em destaque</span>
        </div>
        <div class="flex grid grid-cols-2 gap-x-5 gap-y-5 w-5/6">
            <?php
                foreach($posts as  $post): ?>
                <div class="flex bg-gray-800 h-44 w-full rounded-xl gap-x-3">
                    <img src="<?=$post['img'] ?>" alt="" class="h-40 w-1/2 mt-2 ml-2 rounded-xl object-cover">
                    <div class="flex flex-col mt-2">
                        <span class="text-white font-bold"><?=$post['projeto'] ?></span>
                        <span class="text-gray-400 w-52 mt-2"><?=$post['sobre'] ?></span>
                        <div class="mt-6">
                        <?php 
                        $colors = ['violet', 'blue', 'red', 'yellow'];
                        foreach($post['linguagens'] as $posicao => $linguagem): ?>
                            <span class="bg-<?=$colors[$posicao] ?>-400 px-3 py-1 rounded-full text-xs font-bold"><?=$linguagem['texto'] ?></span>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>            
            <?php endforeach ?>
        </div>
    </section> 