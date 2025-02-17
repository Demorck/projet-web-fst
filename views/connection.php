<?php
    require_once __DIR__ . "/template/header.php";

    require_once $_SERVER['DOCUMENT_ROOT'] . "/include/Donnees.inc.php";
?>
<!-- 
login mdp nom prénom sexe (homme ou femme), adresse électronique, date de naissance,
adresse postale (décomposée en adresse, code postal et ville) et numéro de téléphone
obligatoires = login + mdp
-->
<body>
    <?php require_once __DIR__ . "/template/navbar.php"; ?>


    <br>
    <div class="wrapper-recettes flex flex-wrap flex-col gap-4 items-center justify-center">
        <label class="inline-flex items-center me-5 cursor-pointer">
            <span class="ms-3 text-sm font-medium">Inscription</span>
            <input onchange=changeConType(this) id="connectionToggle" type="checkbox" class="sr-only peer" checked >
            <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-300 dark:peer-focus:ring-red-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
            <span class="ms-3 text-sm font-medium">Connexion</span>
        </label>

        <div id="connectionDiv" >

            <form id='loginForm' action="/login" method="post" >
                
                <fieldset>
                
                    <legend>Informations personnelles</legend>
                    <br>
                    Login : <br> <input type="text" name="login" required="required" class="w-full focus:scale-105 duration-300 border border-gray-400"><br><br>   
                    Mot de passe : <br><input type="password" name="password" required="required" class="w-full focus:scale-105 duration-300 border border-gray-400"><br><br>
                    
                </fieldset>

                <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Valider" name="submit" >
        
            </form>

            <form id='registerForm' class="hidden" action="/register" method="post">
                
                <fieldset>
                    <legend>Informations personnelles</legend>
                    <br>
                    Login : <input type="text" name="login" required="required" class="w-full focus:scale-105 duration-300 border border-gray-400" require><br><br>   
                    Mot de passe :<input type="password" name="password" required="required" class="w-full focus:scale-105 duration-300 border border-gray-400" require><br><br>
                    Nom :<input type="text" name="last_name" class="w-full focus:scale-105 duration-300 border border-gray-400"><br><br>   
                    Prénom :<input type="text" name="first_name" class="w-full focus:scale-105 hover:scale-105 duration-300 border border-gray-950"><br><br>
                    Genre :
                    <input type="radio" name="gender" value="h"> Homme 	
                    <input type="radio" name="gender" value="f"> Femme
                    <input type="radio" name="gender" value="v"> Autre/ne se prononce pas
                    <br ><br>
                    Email :<input type="email" id="email" name="email" class="w-full focus:scale-105 duration-300 border border-gray-400"> <br><br>
                    Adresse : <input type="text" id="adresse" name="adresse" class="w-full focus:scale-105 duration-300 border border-gray-400"><br>
                    Code postal : <input type="text" id="zipcode" name="zipcode" maxlength="6" class="w-full focus:scale-105 duration-300 border border-gray-400">
                    Ville: <input type="text" id="ville" name="ville" class="w-full focus:scale-105 duration-300 border border-gray-400"> <br>
                    
                </fieldset><br>
    
                <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Valider" name="submit" >
        
            </form>
        </div>

        <?php

        if(isset($error)){
            echo "<div class='error'>$error</div>";
        } else if(isset($success)){
            echo "<div class='success'>$success</div>";
        }

        ?>

    </div>
    <footer>
        <p>&copy; 2024 - Recettes de cuisine</p>
    </footer>

</body>
</html>
