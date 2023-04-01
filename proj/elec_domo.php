<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>N LNG</title>
    <meta name="description" content="Site portfolio de N LNG - projet quadcopter">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style_art.css">
</head>

<body>
    <?php include("../divheader.php"); ?>

    <section>
        <h1>Domotique, et ... encore de la soudure</h1>
        <!--  <p class="links">quelques photos sur flickr : <a href="https://flic.kr/s/aHskpLGJmB">ICI</a></p> -->
        <p>J'ai commencé à m'intéresser à la domotisation de mon domicile il y a quelques années, plutôt pour voir ce qui était possible
            que pour le domotiser sérieusement, et surtout sans y consacrer trop d'argent : la domotique est un hobby couteux :)
        </p>
        <p>j’ai commencé par essayer la solution <a href="https://www.domoticz.com/">domoticz</a> pour me faire la main. Et rapidement j'ai suis passé
            à <a href="https://www.home-assistant.io/">homeassistant</a> pour sa communauté grandissante, son interface un peu moins austère,
            et l’appli android aboutie.
        </p>
        <img class="borderedimg" src="/img/domo/rpi_hassio720.png" />
        <p>Je tenais absolument à utiliser une solution opensource pour le superviseur, mais surtout je ne voulais pas la moindre "unité" de domotique
            qui nécessite de passer par un cloud, permettant à la NSA chinoise de faire de la bigdata, et qui peut potentiellement fermer ou devenir payant
            du jour au lendemain...
        </p>
        <p>J'utilise donc pour le moment :
            <br />- des capteurs de températures, qui communiquent avec un dongle usb Zigbee CC2531, qui sert de passerelle pour tous les objets sur ce protocole
            <br />- quelques prises connectées, toutes flashées sous <a href="https://tasmota.github.io/docs/">tasmota</a>
            <br />- j'ai aussi flashée une caméra avec le "hack <a href="https://github.com/EliasKotlyar/Xiaomi-Dafang-Hacks">Dafang</a>"
            <br />- et enfin, j'ai acheté et souder une<a href="https://www.nodo-shop.nl/en/rflink-/193-rflink-43342-gateway-components-somfy-rts.html"> carte rflink</a> pour commander mes volets
        </p>
        <p>Une des vues que j'ai paramétrée :</p>
        <img class="borderedimg" src="/img/domo/hassio_salon.png" />
        <p>Le boulot des différentes communautés qui suivent tout ça sur github est d'ailleurs absolument impressionnant...
        </p>
        <p>Donc globalement, pour l’instant je surveille les températures et hygrométrie de chaque pièce à l’intérieur et devant chez moi.
            avec des petites alertes Telegram dans certains cas, par exemple : température extérieure
            intérieure pour penser à ouvrir lors des chauds été lyonnais
            <br />Je peux programmer ou allumer/éteindre les appareils sur prises commandées : "utile" pour la machine à espresso par exemple (avec msg TG au bout
            de 20min, quand elle est assez chaude donc).
        </p>
        <p>Et depuis peu, j'ai ajouté les volets au système. La carte rflink est très intéressante car elle agit en fait comme un lot de télécommandes virtuelles additionnelles.
            C'est à dire que les télécommandes physiques fonctionnent toujours de la même façon, mais qu'il est possible de commander les volets, en plus, via un téléphone, une tablette
            ou au sein de scénarii personnalisés : fermeture des volets à la tombée de la nuit, ouverture le matin, fermuture des volets sur la façade sud l'été quand le soleil arrive, gestion d'un mode
            "simulation de présence" pendant les vacances, etc...
        </p>
        <p>la fameuse carte rflink et son montage :</p>
        <img class="borderedimg" src="/img/domo/rflink_soudure_loop1.gif" />
        <p>et au passage une vidéo plus qu'intéressante sur les communication RF, le principe des rolling codes (utilisés par somfy pour les volets), et leur hacking.</p>
        <iframe class="borderedimg" width="720" height="480" src="https://www.youtube.com/embed/1RipwqJG50c" frameborder="0" allowfullscreen></iframe>
    </section>

    <?php include("../divfooter.php"); ?>

    <!-- commentaire, pour me rappeler du format ce cette balise ^^ -->
</body>


</html>