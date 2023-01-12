<div class="relative">
    <img src="images/home-backgroung.png" class="w-full brightness-50 h-[500px] lg:object-fill object-cover"
         alt="background-liste-roadtrips"/>
    <div class="absolute text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <h1 class="font-bold text-4xl lg:text-5xl">Créez votre road trip</h1>
    </div>
</div>
<div class="flex flex-col my-20 items-center">
    <h2 class="text-black font-bold text-4xl mb-5">INFORMATION DU ROAD TRIP</h2>
    <form action="" method="POST" class="flex flex-col w-full justify-center items-center" enctype="multipart/form-data">
        <div class="w-4/5 sm:w-3/6 lg:w-2/6">
            <label class="block text-gray-700 text-sm font-bold my-2" for="nomVoyage">Intitulé <span class="text-red-500">*</span></label>
            <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="text" id="nomVoyage" name="nomVoyage" placeholder="Voyage..." required>
        </div>
        <div class="w-4/5 sm:w-3/6 lg:w-2/6 mt-10">
            <label class="block text-gray-700 text-sm font-bold my-2" for="typeVehicule">Véhicule <span class="text-red-500">*</span></label>
            <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="text" id="typeVehicule" name="typeVehicule" placeholder="Voiture, Moto,..." required>
        </div>
        <div class="w-4/5 sm:w-3/6 lg:w-2/6 mt-10">
            <label class="block text-gray-700 text-sm font-bold my-2" for="file">Image d'illustration</label>
            <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="file" id="file" name="file" accept="image/png, image/jpeg">
        </div>
        <h2 class="text-black font-bold text-4xl my-5">VOS ETAPES</h2>
        <div class="bg-orange-50 rounded shadow-lg border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">Attention</p>
            <p>Pour enregistrer ce road trip, vous devez avoir défini au minimum un point de départ et d'arrivée.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4 mt-5 mx-2 w-5/6">
            <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white w-full">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Départ <span class="text-red-500">*</span></h5>
                    <hr>
                    <p class="text-gray-700 text-base mb-4">
                        <label class="block text-gray-700 text-sm font-bold my-2">
                            Intitulé <span class="text-red-500">*</span>
                        </label>
                        <input type="text" placeholder="Nom du checkpoint" name="checkPoint[checkPointDepart][nom]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                        <label class="block text-gray-700 text-sm font-bold my-2">
                            Adresse <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="displayAddr-coordonnes-depart" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white mb-2" placeholder="3 Rue des potiers" readonly>
                        <label for="my-modal-4" type="button" class="btn-open-modal inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajouter une adresse</label >
                        <input type="text" id="coordonnes-depart" placeholder="Coordonnees" name="checkPoint[checkPointDepart][coordonnees]" class="opacity-0 h1 cursor-default shadow appearance-none border rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                        <label class="block text-gray-700 text-sm font-bold my-2">
                            Date de départ <span class="text-red-500">*</span>
                        </label>
                        <input type="date" placeholder="Date depart" name="checkPoint[checkPointDepart][date_depart]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                        <label class="block text-gray-700 text-sm font-bold my-2">
                            Date d'arrivée <span class="text-red-500">*</span>
                        </label>
                        <input type="date" placeholder="Date arrive" name="checkPoint[checkPointDepart][date_arrive]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                    </p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm my-auto">
                    <button type="button" id="add-etape" class="btn-open-modal inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajouter une etape</button>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white w-full">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Arrivée <span class="text-red-500">*</span></h5>
                    <hr>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Intitulé <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="Nom du checkpoint" name="checkPoint[checkPointArrive][nom]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Adresse <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="displayAddr-coordonnes-arrive" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white mb-2" placeholder="3 Rue des potiers" readonly>
                    <label for="my-modal-4" type="button" class="btn-open-modal inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajouter une adresse</label >
                    <input type="text" id="coordonnes-arrive" placeholder="Coordonnees" name="checkPoint[checkPointArrive][coordonnees]" class="opacity-0 h-1 pointer-default shadow appearance-none border rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white input-coordonnees" required>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Date de départ <span class="text-red-500">*</span>
                    </label>
                    <input type="date" placeholder="Date depart" name="checkPoint[checkPointArrive][date_depart]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Date d'arrivée <span class="text-red-500">*</span>
                    </label>
                    <input type="date" placeholder="Date arrive" name="checkPoint[checkPointArrive][date_arrive]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                </div>
            </div>
        </div>
        <div class="my-10">
            <button class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" type="submit">
                Enregistrer
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
            <div class="lg:w-1/2 w-full">
                <ul id="result-list" class="col-4 max-h-[50vh] overflow-y-scroll bg-white rounded-lg border border-gray-200 w-96 text-gray-900 list-group">

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

    $(document).on('click', ".btn-open-modal" , function(){
        $("#my-modal-4").attr('value', $(this).next('input').attr('id'));
    });

    $(document).on('click', "#modal-cancel" ,function(){
        $("result-list").empty();
        $("#search").val('');
        $("#my-modal-4").attr('value', '');
    });

    $(document).on('click', "#modal-validate" , function(){
        let value = $('.active').attr('value');
        console.log(value);
        let valueParsed = JSON.parse(value);
        console.log($("#my-modal-4").attr('value'));
        $("result-list").empty();
        $("#search").val('');
        $("#" + $("#my-modal-4").attr('value')).attr('value', value);
        $("#displayAddr-" + $("#my-modal-4").attr('value')).attr('value', valueParsed.displayName);
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

    $(document).ready(function(){
        let i = 1;

        $(document).on('click', '#add-etape', function () {
            let card = `<div class="flex justify-center">
                <div class="block p-6 rounded-lg shadow-lg bg-white w-full">
                    <div class="flex justify-between">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Etape ${i} <span class="text-red-500">*</span></h5>
                        <button type="button" class="btn btn-sm bg-red-500 delete-checkpoint text-white rounded-0 hover:bg-red-700">X</button>
                    </div>
                    <hr>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Intitulé <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="Nom du checkpoint" name="checkPoint[checkPoint${i}][nom]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Adresse <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="displayAddr-coordonnes-${i}" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white mb-2" placeholder="3 Rue des potiers" readonly>
                    <label for="my-modal-4" type="button" class="btn-open-modal inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajouter une adresse</label >
                    <input type="text" id="coordonnes-${i}" placeholder="Coordonnees" name="checkPoint[checkPoint${i}][coordonnees]" class="opacity-0 h-1 pointer-default shadow appearance-none border rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white input-coordonnees" required>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Date de départ <span class="text-red-500">*</span>
                    </label>
                    <input type="date" placeholder="Date depart" name="checkPoint[checkPoint${i}][date_depart]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                    <label class="block text-gray-700 text-sm font-bold my-2">
                        Date d'arrivée <span class="text-red-500">*</span>
                    </label>
                    <input type="date" placeholder="Date arrive" name="checkPoint[checkPoint${i}][date_arrive]" class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" required>
                </div>
            </div>`;
            $(card).insertBefore($(this).parent().parent());
            i = i + 1;
        });
    });
</script>


