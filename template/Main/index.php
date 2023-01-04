<div class="relative">
    <img src="images/home-backgroung.png" class="w-full lg:h-full h-[50vh] lg:object-fill object-none"
         alt="background-home"/>
    <div class="absolute text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <h1 class="font-bold text-4xl lg:text-5xl">Voyagez en toute simplicité</h1>
        <p class="font-light my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a class="btn btn-sm md:btn-md bg-amber-300 hover:bg-amber-400 text-black border-none">En savoir plus</a>
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
        <a href="index.php?page=allRoadTrip" class="btn btn-sm bg-amber-300 hover:bg-amber-400 text-black border-none text-center">Voir les roadtrips</a>
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
    <div class="flex overflow-x-scroll scrollbar-hide mb-20 px-5 w-full h-96" align="center">
        <div class="flex flex-row space-x-16 m-auto">
            <?php foreach ($data['listeRoadTrip'] as $currentRoadTrip) { ?>
                <a href="index.php?page=detailsRoadTrip&id=<?= $currentRoadTrip->getId(); ?>" class="hover:scale-110 ease-in duration-500">
                    <div class="w-72 xl:w-96 overflow-hidden shadow-lg border">
                        <img class="w-full" src="https://v1.tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="text-left mx-3">
                            <div class="font-bold text-black text-2xl mb-2"><?= $currentRoadTrip->getIntitule(); ?></div>
                        </div>
                        <div class="text-left mx-3 pb-2">
                            <span class="inline-block bg-amber-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#<?= $currentRoadTrip->getTypeVehicule(); ?></span>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
