<div class="flex flex-col my-20 items-center">
        <img src="./images/logo.png" alt="logo-waw">
        <h1 class="text-4xl font-bold text-black mb-10">Inscription</h1>
        <form action="" method="POST" class="w-4/5 sm:w-3/6 lg:w-2/6">
            <div class="md:items-center mb-10">
                <label class="block text-gray-700 text-xl font-bold mb-2" for="email">Adresse Email</label>
                <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="email" id="email" name="email" placeholder="Adresse Email" required>
            </div>

            <div class="md:items-center mb-10">
                <label class="block text-gray-700 text-xl font-bold mb-2" for="password">Mot de passe</label>
                <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="password" id="password" name="password" minlength="8" placeholder="Mot de passe" required>
            </div>

            <div class="md:items-center mb-10">
                <label class="block text-gray-700 text-xl font-bold mb-2" for="passwordVerif">Confirmation du mot de passe</label>
                <input class="input shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white" type="password" id="passwordVerif" name="passwordVerif" minlength="8" placeholder="Confirmation du mot de passe" required>
            </div>

            <div class="text-center">
                <button class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn" type="submit">
                    S'inscrire
                </button>
            </div>
        </form>
        <a href="index.php?page=login" class="text-center text-blue-500 hover:text-blue-600 underline my-10">Vous avez déjà un compte ? <br> Cliquez ici pour vous connecter !</a>
    </div>
