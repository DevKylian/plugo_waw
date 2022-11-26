<div class="grid grid-cols-4 gap-4 mt-5">
    <?php foreach($data['listeRoadTrip'] as $currentRoadTrip) { ?>
        <div class="card w-46 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title"><?= $currentRoadTrip->getIntitule() ?></h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <h3><?= $currentRoadTrip->getUser()->getEmail() ?></h3>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Découvrir</button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>