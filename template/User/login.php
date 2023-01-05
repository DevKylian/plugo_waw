<div class="flex flex-col my-20 items-center">
        <img src="C:\\Documents\\logo.png" alt="logo-waw">
        <h1 class="text-4xl font-bold text-black mb-10">Connexion</h1>
        <form action="" method="POST" class="w-4/5 sm:w-3/6 lg:w-2/6">
            <div class="md:items-center mb-10">
                <label class="block text-black font-bold mb-1 md:mb-0 pr-4 w-full" for="email">Adresse Email</label>
                <input class="bg-white appearance-none rounded-none border border-black w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-amber-500" type="email" id="email" name="email" placeholder="Adresse Email" required>
            </div>
            <div class="md:items-center mb-10">
                <label class="block text-black font-bold mb-1 md:mb-0 pr-4 w-full" for="password">Mot de passe</label>
                <input class="bg-white appearance-none border border-black w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-amber-500" type="password" id="password" name="password" placeholder="Mot de passe" minlength="8" required>
            </div>
            <div class="text-center">
                <button class="shadow btn bg-amber-300 hover:bg-amber-400 focus:shadow-outline focus:outline-none text-black font-bold px-4 rounded border-none" type="submit">
                    Se connecter
                </button>
            </div>
        </form>
        <a href="index.php?page=inscription" class="text-center text-blue-500 hover:text-blue-600 underline my-10">Vous n’avez pas encore de compte ? <br> Cliquez ici pour vous inscrire !</a>
    </div>
</div>
