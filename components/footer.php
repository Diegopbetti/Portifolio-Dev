<?php 
    $contatos = [
        [
            "icon" => "/images/linkedin-logo.png",
            "rede" => "LinkedIn",
            "seta" => "/images/arrow-up-right.png",
        ],
        [
            "icon" => "/images/instagram-logo.png",
            "rede" => "Instagram",
            "seta" => "/images/arrow-up-right.png",
        ],
        [
            "icon" => "/images/github-logo.png",
            "rede" => "Github",
            "seta" => "/images/arrow-up-right.png",
        ],
        [
            "icon" => "/images/envelope-simple.png",
            "rede" => "Email",
            "seta" => "/images/arrow-up-right.png",
        ],
    ]
?>

<footer class="bg-[url('/images/img2.png')] bg-cover h-screen w-full flex flex-col items-center justify-center" >
        <div>
            <h3 class="text-purple-400 text-center">Contato</h3>
            <h2 class="text-white text-2xl text-center" >Gostou do meu trabalho?</h2>
            <span class="text-gray-400 text-center">Entre em contato ou acompanhe as minhas redes sociais!</span>
        </div>
        <div class="mt-10 flex flex-col gap-y-4">
            <?php foreach($contatos as $contato): ?>
            <div class="flex bg-gray-800 w-96 h-12 items-center justify-between rounded-xl">
                <div class="flex ml-4">
                    <img src="<?=$contato['icon'] ?>" alt="" class="h-7 w-7">
                    <span class="text-gray-400 ml-2" ><?=$contato['rede'] ?></span>
                </div>
                <img src="<?=$contato['seta'] ?>" alt="" class="text-gray-400 h-7 w-7 mr-4">
            </div>
            <?php endforeach ?>
        </div>
    </footer>