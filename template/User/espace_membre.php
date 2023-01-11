<div class="relative">
    <div class="w-full lg:h-full object-none bg-blue-900 py-20">
        <div class="text-white">
            <h1 class="font-bold text-4xl lg:text-5xl text-center">MON ESPACE MEMBRE</h1>
        </div>
    </div>
</div>
<div class="flex flex-col my-20 items-center">
    <h2 class="text-4xl font-bold text-black mb-5">MES INFORMATIONS</h2>
    <div class="flex justify-center w-full">
        <div class="flex p-6 rounded-lg shadow-lg bg-white w-4/5 border my-2">
            <div class="w-1/2">
                <p class="text-black">Adresse email : <?= $data['user']->getEmail() ?></p>
                <p class="text-black">Profil créé le : <?= $data['user']->getCreatedAt() ?></p>
                <form method="post" action="" class="flex flex-col w-4/5">
                    <label class="block text-gray-700 font-bold mb-2" for="password">Nouveau mot de passe</label>
                    <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="password" id="password" name="password" placeholder="Adresse Email" required>
                    <label class="block text-gray-700 font-bold mb-2" for="passwordVerif">Confirmation du nouveau mot de passe</label>
                    <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="password" id="passwordVerif" name="passwordVerif" placeholder="Mot de passe" minlength="8" required>
                    <button type="submit" class="btn bg-blue-600 text-white my-2">Valider</button>
                </form>
            </div>
            <div class="w-1/2">
                <img alt="Placeholder" class="block rounded-full h-64 w-64 mx-auto my-auto" src="<?= $data['user']->getPicture() != null ? $data['user']->getPicture() : "images/default-picture.png" ?>">
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="file" name="file" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white my-2">
                    <button type="submit" class="btn bg-blue-600 text-white my-2">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
<h2 class="text-4xl font-bold text-black mb-5 text-center">MES ROAD TRIPS</h2>
<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
        <?php foreach ($data['listeRoadTrip'] as $currentRoadTrip) { ?>
            <!-- Column -->
            <div class="my-1 px-1 w-full sm:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <!-- Article -->
                <article class="overflow-hidden border shadow-lg hover:scale-105 ease-in duration-200">
                    <a href="/index.php?page=detailsRoadTrip&id=<?= $currentRoadTrip->getId() ?>">
                        <img alt="Placeholder" class="block h-[230px] w-full" src="<?= $currentRoadTrip->getIllustration() != null ? $currentRoadTrip->getIllustration() : "https://picsum.photos/1920/1080/?random" ?>">
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="/index.php?page=detailsRoadTrip&id=<?= $currentRoadTrip->getId() ?>">
                                <?= $currentRoadTrip->getIntitule() ?>
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            <span class="">#<?= $currentRoadTrip->getTypeVehicule(); ?></span>
                        </p>
                    </header>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full h-6 w-6" src="<?= $currentRoadTrip->getUser()->getPicture() != null ? $currentRoadTrip->getUser()->getPicture() : "images/default-picture.png" ?>">
                            <p class="ml-2 text-sm">
                                <?= $currentRoadTrip->getUser()->getEmail() ?>
                            </p>
                        </a>
                        <?php if(isset($_SESSION['user']) && $_SESSION['user']['id'] == $currentRoadTrip->getUser()->getId()){ ?>
                            <div>
                                <a href="/index.php?page=updateRoadTrip&id=<?= $currentRoadTrip->getId() ?>" class="btn btn-sm btn-warning rounded-none"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="/index.php?page=removeRoadTrip&id=<?= $currentRoadTrip->getId() ?>" class="btn btn-sm btn-error rounded-none"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        <?php } ?>
                    </footer>
                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->
        <?php } ?>
    </div>
</div>