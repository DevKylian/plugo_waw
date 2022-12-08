<div class="grid grid-cols-4 gap-4 mt-5">
    <?php foreach($data['listeRoadTrip'] as $currentRoadTrip) { ?>
        <div class="card w-46 bg-base-100 shadow-xl rounded-none">
            <div class="card-body">
                <h2 class="card-title mx-auto"><?= $currentRoadTrip->getIntitule() ?></h2>
                <p>Type de véhicule : <?= $currentRoadTrip->getTypeVehicule() ?></p>
                <h3>Par : <?= $currentRoadTrip->getUser()->getEmail() ?></h3>
                <div class="flex justify-end gap-5">
                    <?php if($_SESSION['user']['id'] == $currentRoadTrip->getUser()->getId()){ ?>
                        <div class="card-actions">
                            <a href="/index.php?page=updateRoadTrip&id=<?= $currentRoadTrip->getId() ?>" class="btn btn-sm btn-warning rounded-none"><i class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                        <div class="card-actions">
                            <a href="/index.php?page=removeRoadTrip&id=<?= $currentRoadTrip->getId() ?>" class="btn btn-sm btn-error rounded-none"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    <?php } ?>
                    <div class="card-actions">
                        <a href="/index.php?page=detailsRoadTrip&id=<?= $currentRoadTrip->getId() ?>" class="btn btn-sm btn-primary rounded-none"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>