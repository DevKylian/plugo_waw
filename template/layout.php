<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php if (isset($data['title'])) echo $data['title']; ?> - Plugo</title>
        <?php if (isset($data['description'])) { ?>
        <meta name="description" content="<?= $data['description'] ?>">
        <?php } ?>
        <link rel="stylesheet" href="css/app.css">
        <!--<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">-->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.40.1/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <?php include '_navbar.php' ?>
        <?php if(!empty($_SESSION['FLASH'])) { ?>
            <?php foreach($_SESSION['FLASH'] as $flashMessage) { ?>
                <div class="alert alert-<?= $flashMessage['type'] ?> shadow-lg w-3/5 mx-auto my-2">
                    <div>
                        <?php if($flashMessage['type'] == 'error'){ ?>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <?php } else if($flashMessage['type'] == 'success') { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <?php } ?>
                        <span><?= $flashMessage['message'] ?></span>
                    </div>
                </div>
            <?php } ?>
            <?php $_SESSION['FLASH'] = []; ?>
        <?php } ?>
        <main class="">
            <?php require $templatePath ?>
            <script src="/js/main.js"></script>
        </main>
        <?php include '_footer.php' ?>
    </body>
</html>