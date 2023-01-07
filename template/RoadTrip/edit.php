<div class="relative">
    <img src="images/home-backgroung.png" class="w-full lg:h-full h-[50vh] lg:object-fill object-none"
         alt="background-liste-roadtrips"/>
    <div class="absolute text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <h1 class="font-bold text-4xl lg:text-5xl">Modification du road trip : <br> <?= $data['roadTrip']->getIntitule() ?></h1>
    </div>
</div>
<div class="flex flex-col my-20 items-center">
    <form action="" method="POST" class="flex flex-col w-full justify-center items-center">
        <div class="w-4/5 sm:w-3/6 lg:w-2/6">
            <label class="block text-black font-bold mb-1 md:mb-0 pr-4 w-full" for="nomVoyage">Intitulé</label>
            <input class="bg-white appearance-none rounded-none border border-black w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-amber-500" type="text" id="nomVoyage" name="nomVoyage" placeholder="Voyage..." value="<?= $data['roadTrip']->getIntitule() ?>" required>
        </div>
        <div class="w-4/5 sm:w-3/6 lg:w-2/6 my-10">
            <label class="block text-black font-bold mb-1 md:mb-0 pr-4 w-full" for="typeVehicule">Véhicule</label>
            <input class="bg-white appearance-none rounded-none border border-black w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-amber-500" type="text" id="typeVehicule" name="typeVehicule" placeholder="Voiture, Moto,..." value="<?= $data['roadTrip']->getTypeVehicule() ?>" required>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-5 mx-2">
            <?php foreach($data['listeCheckPoint'] as $currentCheckPointKey => $currentCheckPointVal) { ?>
                <div class="flex flex-col border border-black shadow-md bg-amber-300 py-2">
                    <h3 class="text-black font-bold text-2xl text-left mx-5">Départ</h3>
                    <hr class="h-px mt-1 bg-gray-700 border-0 mx-2 mb-2">
                    <p class="text-black text-xl text-left mx-5"><span class="font-bold">Nom de l'étape : </span><input type="text" placeholder="Nom du checkpoint" name="checkPoint[checkPoint<?=  $currentCheckPointVal->getId() ?>][nom]" value="<?=  $currentCheckPointVal->getNom() ?>" class="appearance-none bg-transparent border-none text-black py-1 px-2 leading-tight focus:outline-none" required></p>
                    <p class="text-black text-xl text-left mx-5"><span class="font-bold">Coordonnées : </span><input type="text" placeholder="Coordonnees" name="checkPoint[checkPoint<?=  $currentCheckPointVal->getId() ?>][coordonnees]" value="<?=  $currentCheckPointVal->getCoordonnee() ?>" class="appearance-none bg-transparent border-none text-black py-1 px-2 leading-tight focus:outline-none" required></p>
                    <p class="text-black text-xl text-left mx-5"><span class="font-bold">Date de départ : </span><input type="date" placeholder="Date depart" name="checkPoint[checkPoint<?=  $currentCheckPointVal->getId() ?>][date_depart]" value="<?=  $currentCheckPointVal->getDateDepart() ?>" class="appearance-none bg-transparent border-none text-black py-1 px-2 leading-tight focus:outline-none" required></p>
                    <p class="text-black text-xl text-left mx-5"><span class="font-bold">Date d'arrivée : </span><input type="date" placeholder="Date arrive" name="checkPoint[checkPoint<?=  $currentCheckPointVal->getId() ?>][date_arrive]" value="<?=  $currentCheckPointVal->getDateArrive() ?>" class="appearance-none bg-transparent border-none text-black py-1 px-2 leading-tight focus:outline-none" required></p>
                    <input type="hidden" name="checkPoint[checkPoint<?=  $currentCheckPointVal->getId() ?>][id]"  value="<?=  $currentCheckPointVal->getId() ?>">
                </div>
            <?php } ?>
        </div>
        <div class="my-10">
            <button class="shadow bg-amber-300 hover:bg-amber-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="submit">
                Enregistrer
            </button>
        </div>
    </form>
</div>