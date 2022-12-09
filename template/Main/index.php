<div class="relative">
    <img src="images/home-backgroung.png" class="lg:w-full lg:h-full h-[50vh] lg:object-fill object-none" alt="background-home" />
    <div class="absolute text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <h1 class="font-black text-xl lg:text-5xl">Voyagez en toute simplicité</h1>
        <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a class="btn btn-xs sm:btn-sm md:btn-md bg-amber-300 text-black border-none">En savoir plus</a>
    </div >
</div>
<!-- Qui sommes nous -->
<div class="flex flex-col xl:flex-row my-20 items-center">
    <div class="xl:w-1/2 w-4/6" align="center">
        <img src="images/home-picture-1.png" alt="home-picture-1">
    </div>
    <div class="xl:w-1/2 w-4/6 text-left" align="center">
        <h2 class="text-black text-lg font-bold text-2xl">Qui sommes-nous ?</h2>
        <p class="text-black xl:w-2/3 my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et arcu augue. In sollicitudin sem nec leo interdum porttitor. Pellentesque dapibus, odio vel molestie tristique, lacus nunc porttitor metus, at lacinia nisl nulla eget nulla</p>
        <a class="btn btn-xs sm:btn-sm md:btn-md bg-amber-300 text-black border-none">Voir les roadtrips</a>
    </div>
</div>
<!-- Derniers roadtrips -->
<div class="bg-slate-50 text-center my-50">
    <h2 class="text-black text-lg font-bold text-2xl">Nos derniers roadtrips</h2>
    <p class="text-black my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <div class="flex overflow-x-scroll no-scrollbar">
        <div class="flex flex-row space-x-10 m-auto">
            <?php foreach($data['listeRoadTrip'] as $currentRoadTrip) { ?>
                <div class="card w-96 bg-base-100 shadow-xl image-full rounded-none m-auto">
                    <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                    <div class="card-body">
                        <div class="card-actions justify-start">
                            <h2 class="">Shoes!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>