<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>N LNG</title>
    <meta name="description" content="Site portfolio de N LNG">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style_art.css">
</head>

<body>
    <?php include("../divheader.php"); ?>

    <section>
        <h1>Clavier mécanique, ergonomique, disposition Bépo</h1>
        <p class="links">le lien vers mon layout personnel pour l'excellent QMK firmware : <a href="https://github.com/niolang/qmk_firmware/tree/master/keyboards/lily58/keymaps/niolang">ICI</a>
        </p>
        <img class="borderedimg" src="/img/mecboard/lily58_1.png" />
        <p>L'été dernier, à la recherche d'exercices pour améliorer ma vitesse de frappe, je tombe sur des informations sur la disposition Bépo.
            <br />Je vous passe l'histoire, même si je vous invite vivement à aller jeter un oeil là : <a href="https://bepo.fr/">bépo.fr</a>
            <br />Et comme une image vaut mieux qu'un long discours :
        </p>
        <img class="borderedimg" src="https://download.tuxfamily.org/dvorak/wiki/images/thumb/Stats-lignes-mains-flat.png/300px-Stats-lignes-mains-flat.png" />
        <p>L'inconvénient c'est qu'il est très difficile de trouver un clavier en disposition bépo...
            <br />L'avantage c'est qu'on se force à apprendre à taper sans regarder :)
        </p>
        <p>Et puis une fois lancé -dans la douleur très honnêtement après 20ans d'azerty...- j'y prends très vite goût et on se rend très vite compte
            que c'est une hérésie de forcer tout le monde à taper sur azerty.
            <br />Bien sûr les lettres de la rangée du milieu sont très bien placées, mais le é . , ; @ et j'en passe, accessibles directement,
            c'est un aller sans retour!
            <br />Je pense d'ailleurs que je me permets de taper un français bien plus correct désormais (j'avais abandonné le ç sur azerty par exemple)
        </p>
        <p>Mais bien sûr quand on commence à s'intéresser à la frappe au clavier on met aussi très vite le doigt dans un engrenage aussi couteux en
            temps qu'en euros : <strong>Les claviers!</strong>
            <br />Alors je ne vais faire qu'un résumé de mes tergiversations, mais quand, comme pour les imprimantes 3D, suite à une discussion pour sur Leboncoin
            avec un vendeur d'un typematrix2030, j'ai compris qu'il était possible de monter le sien... Un monde de plus s'est ouvert à moi!
            <br />Et me voilà donc en quête de nouveaux composants à choisir et à souder!
            <br />pour monter mon lily58 pro, un clavier mécanique, ergonomique, orthogonal et opensource dont les plans sont <a href="https://github.com/kata0510/Lily58">ICI</a>
        </p>
        <img class="borderedimg" src="/img/mecboard/mecboard_01.jpg" />
        <p></p>
        <img class="borderedimg" src="/img/mecboard/mecboard_03.jpg" />
        <p></p>
        <img class="borderedimg" src="/img/mecboard/mecboard_06.jpg" />
        <p></p>
        <img class="borderedimg" src="/img/mecboard/mecboard_09.jpg" />
        <p></p>
        <p>Le clavier est géré par deux Arduino pro micro, sur lequel on vient flasher l'incroyable QMK Firmware :
            <br />- communauté incroyable
            <br />- manuel très bien expliqué
            <br />- et je n'ai sans doute vu qu'1/10ème des fonctionnalités...
            <br />Mais il faut au moins ça quand on passe de 110 touches à 58!
            <br />Bref, voilà mon petit réglage perso :
        </p>
        <img class="borderedimg" src="/img/mecboard/mecboard_qmk.png" />
        <p></p>

    </section>

    <?php include("../divfooter.php"); ?>

    <!-- commentaire, pour me rappeler du format ce cette balise ^^ -->
</body>


</html>