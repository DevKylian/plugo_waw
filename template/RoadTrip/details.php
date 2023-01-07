<div class="relative">
    <img src="<?= $data['roadTrip'][0]->getIllustration() != null ? $data['roadTrip'][0]->getIllustration() : "https://picsum.photos/600/400/?random" ?>" class="w-full lg:h-full h-[50vh] lg:object-fill object-none"
         alt="background-liste-roadtrips"/>
    <div class="absolute text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <h1 class="font-bold text-4xl lg:text-5xl"><?= $data['roadTrip'][0]->getIntitule() ?></h1>
    </div>
</div>
<div class="w-full flex my-20">
    <div class="w-1/2" align="center">
        <h2 class="text-4xl text-bold text-black">Détail du voyage</h2>
        <?php foreach($data['listeCheckPoint'] as $index => $currentCheckpoint){ ?>
            <div class="flex flex-col my-5 border border-black shadow-md w-1/2 bg-amber-300 py-2">
                <?php if(array_key_first($data['listeCheckPoint']) == $index) { ?>
                    <h3 class="text-black font-bold text-2xl text-left mx-5">Départ</h3>
                    <hr class="h-px mt-1 bg-gray-700 border-0 mx-2">
                <?php } else if(array_key_last($data['listeCheckPoint']) == $index) { ?>
                    <h3 class="text-black font-bold text-2xl text-left mx-5">Arrivée</h3>
                    <hr class="h-px mt-1 bg-gray-700 border-0 mx-2">
                <?php } else { ?>
                    <h3 class="text-black font-bold text-2xl text-left mx-5">Étape <?= $index ?></h3>
                    <hr class="h-px mt-1 bg-gray-700 border-0 mx-2">
                <?php } ?>
                <p class="text-black text-xl text-left mx-5"><span class="font-bold">Nom de l'étape : </span><?= $currentCheckpoint->getNom(); ?></p>
                <p class="text-black text-xl text-left mx-5"><span class="font-bold">Coordonnées : </span><?= $currentCheckpoint->getCoordonnee() ?></p>
                <p class="text-black text-xl text-left mx-5"><span class="font-bold">Date de départ : </span><?= $currentCheckpoint->getDateDepart() ?></p>
                <p class="text-black text-xl text-left mx-5"><span class="font-bold">Date d'arrivée : </span><?= $currentCheckpoint->getDateArrive() ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="w-1/2" align="center">
        <h2 class="text-4xl text-bold text-black">Trajet du voyage</h2>
        <iframe src='about:blank' class="border border-black my-5 h-96 w-96"></iframe>
    </div>
</div>