<div class="relative">
    <div class="w-full lg:h-full object-none bg-blue-900 py-20">
        <div class="text-white">
            <h1 class="font-bold text-4xl lg:text-5xl text-center">Modification du checkpoint : <?= $data['checkPoint']->getNom() ?></h1>
        </div>
    </div>
</div>
<div class="flex flex-col my-20 items-center">
    <form action="" method="POST" class="flex flex-col w-full justify-center items-center">
        <div class="flex justify-center w-3/5">
            <div class="block p-6 rounded-lg shadow-lg bg-white w-full">
                <p class="text-gray-700 text-base mb-4">
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Intitulé <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="Nom du checkpoint" name="nom" value="<?= $data['checkPoint']->getNom() ?>" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>

                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Adresse <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="displayAddr" value="<?=  json_decode($data['checkPoint']->getCoordonnee())->displayName ?>" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white mb-2" readonly>
                    <label for="my-modal-4" type="button" class="btn-open-modal inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Modifier l'adresse</label >
                    <input type="text" id="coordonnes-depart" placeholder="Coordonnees" name="coordonnees" value="<?php  echo htmlspecialchars($data['checkPoint']->getCoordonnee()) ?>" class="opacity-0 h-1 input shadow appearance-none border rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white hover:cursor-default" required>

                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Date de départ <span class="text-red-500">*</span>
                    </label>
                    <input type="date" placeholder="Date depart" name="date_depart" value="<?= $data['checkPoint']->getDateDepart() ?>" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>

                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Date d'arrivée <span class="text-red-500">*</span>
                    </label>
                    <input type="date" placeholder="Date arrive" name="date_arrive" value="<?= $data['checkPoint']->getDateArrive() ?>" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                    <input type="hidden" name="id"  value="<?= $data['checkPoint']->getId() ?>">
                </p>
            </div>
        </div>
        <div class="my-10">
            <a type="button" href="/plugo_waw/public/index.php?page=detailsRoadTrip&id=<?= $data['id_roadtrip'] ?>" class="inline-block px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out" type="submit">
                Annuler
            </a>
            <button id="btn-update" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" type="submit">
                Modifier
            </button>
        </div>
    </form>
</div>
<input type="checkbox" id="my-modal-4" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
    <label class="modal-box w-11/12 max-w-5xl bg-white" for="">
        <h3 class="text-2xl text-gray-900 font-bold text-center">Ajouter une adresse</h3>
        <label class="block text-gray-700 text-xl font-bold mb-2">Adresse de la destination</label>
        <div class="form-control my-2">
            <label class="input-group">
                <input type="text" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" id="search" placeholder="221B Baker Street, Baker Street, Marylebone, Londres,">
                <button type="button" class="btn bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" id="search-button">Chercher</button>
            </label>
        </div>
        <div class="w-full flex flex-col lg:flex-row gap-4">
            <div class="lg:w-1/2 w-full">
                <div id="map-container" style="height: 50vh;">

                </div>
            </div>
            <div class="lg:w-1/2 w-full" align="center">
                <ul id="result-list" class="col-4 max-h-[50vh] overflow-y-scroll bg-white rounded-lg border border-gray-200 w-full text-gray-900 list-group text-left">

                </ul>
            </div>
        </div>
        <div class="float-right">
            <label for="my-modal-4" id="modal-cancel" type="button" class=" inline-block my-5 px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">Annuler</label >
            <label for="my-modal-4" id="modal-validate" type="button" class=" inline-block my-5 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Valider</label >
        </div>
    </label>
</label>

<script>

    $(".btn-open-modal").on('click', function(){
        $("#my-modal-4").attr('value', $(this).next('input').attr('id'));
    });

    $(document).on('click', "#modal-cancel" ,function(){
        $("result-list").empty();
        $("#search").val('');
        $("#my-modal-4").attr('value', '');
    });

    $(document).on('click', "#modal-validate" , function(){
        let value = $('.active').attr('value');
        let valueParsed = JSON.parse(value);
        $("result-list").empty();
        $("#search").val('');
        $("#" + $("#my-modal-4").attr('value')).attr('value', value);
        $("#displayAddr").attr('value', valueParsed.displayName);
        $("#my-modal-4").attr('value', '');
    });
    const searchInput = document.getElementById('search');
    const resultList = document.getElementById('result-list');
    const mapContainer = document.getElementById('map-container');
    const currentMarkers = [];

    const map = L.map(mapContainer).setView([20.13847, 1.40625], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    document.getElementById('search-button').addEventListener('click', () => {
        const query = searchInput.value;
        fetch('https://nominatim.openstreetmap.org/search?format=json&polygon=1&addressdetails=1&q=' + query)
            .then(result => result.json())
            .then(parsedResult => {
                setResultList(parsedResult);
            });
    });

    function setResultList(parsedResult) {
        resultList.innerHTML = "";
        for (const marker of currentMarkers) {
            map.removeLayer(marker);
        }
        map.flyTo(new L.LatLng(20.13847, 1.40625), 2);
        for (const result of parsedResult) {
            const li = document.createElement('li');
            li.classList.add('list-group-item', 'list-group-item-action', 'px-6', 'py-2', 'border-b', 'border-gray-200', 'w-full');
            items = JSON.stringify({
                displayName: result.display_name,
                lat: result.lat,
                lon: result.lon
            }, undefined, 2);
            name = result.display_name;
            li.innerHTML = name;
            li.setAttribute('value', items);
            li.addEventListener('click', (event) => {
                for(const child of resultList.children) {
                    child.classList.remove('active');
                }
                event.target.classList.add('active');
                const clickedData = JSON.parse(event.target.getAttribute('value'));
                const position = new L.LatLng(clickedData.lat, clickedData.lon);
                map.flyTo(position, 10);
            })
            const position = new L.LatLng(result.lat, result.lon);
            currentMarkers.push(new L.marker(position).addTo(map));
            resultList.appendChild(li);
        }
    }

</script>