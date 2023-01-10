<div class="relative">
    <img src="images/home-backgroung.png" class="w-full brightness-50 h-[500px] lg:object-fill object-cover"
         alt="background-home"/>
    <div class="absolute text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <h1 class="font-bold text-4xl lg:text-5xl">Voyagez en toute simplicité</h1>
        <p class="font-light my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a class="btn bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">En savoir plus</a>
    </div>
</div>
<!-- Qui sommes nous -->
<div class="flex flex-col xl:flex-row my-20 items-center">
    <div class="xl:w-1/2 w-4/6" align="center">
        <img src="images/home-picture-1.png" alt="home-picture-1">
    </div>
    <div class="xl:w-1/2 w-4/6 text-center xl:text-left" align="center">
        <h2 class="text-black text-lg font-bold text-2xl mt-3 xl:mt-0">Qui sommes-nous ?</h2>
        <p class="text-black xl:w-2/3 my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et arcu augue.
            In sollicitudin sem nec leo interdum porttitor. Pellentesque dapibus, odio vel molestie tristique, lacus
            nunc porttitor metus, at lacinia nisl nulla eget nulla</p>
    </div>
</div>
<!-- Derniers roadtrips -->
<div class="bg-slate-50">
    <div class="flex flex-col my-20 items-center ">
        <div class="xl:w-1/2 w-4/6" align="center">
            <h2 class="text-black text-lg font-bold text-2xl text-center">Nos derniers roadtrips</h2>
            <p class="text-black xl:w-2/3 my-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et
                arcu augue. In sollicitudin sem nec leo interdum porttitor. Pellentesque dapibus, odio vel molestie
                tristique, lacus nunc porttitor metus, at lacinia nisl nulla eget nulla</p>
        </div>
    </div>
    <div class="flex overflow-x-scroll scrollbar-hide mb-20 px-5 w-full" align="center">
        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <?php foreach ($data['listeRoadTrip'] as $currentRoadTrip) { ?>
                    <!-- Column -->
                    <div class="my-1 px-1 w-full sm:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <!-- Article -->
                        <article class="overflow-hidden border shadow-lg">
                            <a href="/index.php?page=detailsRoadTrip&id=<?= $currentRoadTrip->getId() ?>">
                                <img alt="Placeholder" class="block h-auto w-full" src="<?= $currentRoadTrip->getIllustration() != null ? $currentRoadTrip->getIllustration() : "https://picsum.photos/1920/1080/?random" ?>">
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
                                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
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
    </div>
    <div class="w-full flex mb-10">
        <a href="index.php?page=allRoadTrip" class="btn bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mx-auto">Tout nos road trips</a>
    </div>
</div>
