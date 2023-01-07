<div class="flex flex-col my-20 items-center">
        <img src="/images/logo.png" alt="logo-waw">
        <h1 class="text-4xl font-bold text-black mb-10">Inscription</h1>
        <form action="" method="POST" class="w-4/5 sm:w-3/6 lg:w-2/6">
            <div class="md:items-center mb-10">
                <label class="block text-black font-bold mb-1 md:mb-0 pr-4 w-full" for="email">Adresse Email</label>
                <input class="bg-white appearance-none rounded-none border border-black w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-amber-500" type="email" id="email" name="email" placeholder="Adresse Email" required>
            </div>

            <div class="md:items-center mb-10">
                <label class="block text-black font-bold mb-1 md:mb-0 pr-4 w-full" for="password">Mot de passe</label>
                <input class="bg-white appearance-none rounded-none border border-black w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-amber-500" type="password" id="password" name="password" minlength="8" placeholder="Mot de passe" required>
            </div>

            <div class="md:items-center mb-10">
                <label class="block text-black font-bold mb-1 md:mb-0 pr-4 w-full" for="passwordVerif">Confirmation du mot de passe</label>
                <input class="bg-white appearance-none rounded-none border border-black w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-amber-500" type="password" id="passwordVerif" name="passwordVerif" minlength="8" placeholder="Confirmation du mot de passe" required>
            </div>

            <div class="text-center">
                <button class="shadow btn bg-amber-300 hover:bg-amber-400 focus:shadow-outline focus:outline-none text-black font-bold px-4 rounded border-none" type="submit">
                    S'inscrire
                </button>
            </div>
        </form>
        <a href="index.php?page=login" class="text-center text-blue-500 hover:text-blue-600 underline my-10">Vous avez déjà un compte ? <br> Cliquez ici pour vous connecter !</a>
    </div>
