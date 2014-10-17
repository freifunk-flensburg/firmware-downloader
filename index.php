<?php 
    include('config.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freifunk Flensburg - Firmware <?php echo $versionNumber; ?> herunterladen</title>

        <link rel="stylesheet" href="assets/stylesheets/reset.css">
        <link rel="stylesheet" href="assets/stylesheets/style.css">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-precomposed.png"/>
        <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon" />
    </head>
    <body>
        <header>
            <img src="assets/images/logo_freifunknet.png" alt="Freifunk Flensburg Firmware">
            <h1>Freifunk Flensburg</h1>
            <h2>Firmware <?php echo $versionNumber; ?> herunterladen</h2>
        </header>

        <form class="download-form" id="download-form">
            <select id="download-form-type">
                <option value="0">Neuinstallation der Freifunk Firmware</option>
                <option value="1">Update der Freifunk Firmware</option>
            </select>
            <select id="download-form-router">
                <option value="-1">Bitte wähle einen Router aus</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-d-link-dir-615-rev-e1">D-Link 615</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-d-link-dir-825-rev-b1">D-Link 825</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-linksys-wrt160nl">Linksys WRT 160 NL</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3020-v1">Tp-Link TL MR 3020 v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3040-v1">Tp-Link TL MR 3040 v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3220-v1">Tp-Link TL MR 3220 v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3420-v1">Tp-Link TL MR 3420 v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-mr3420-v2">Tp-Link TL MR 3420 v2</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wa901n-nd-v2">Tp-Link TL WA 901n-nd v2</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wdr3500-v1">Tp-Link TL WDR 3500 v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wdr3600-v1">Tp-Link TL WDR 3600 v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wdr4300-v1">Tp-Link TL WDR 4300 v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr740n-nd-v1">Tp-Link TL WR 740n-nd v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr740n-nd-v3">Tp-Link TL WR 740n-nd v3</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr740n-nd-v4">Tp-Link TL WR 740n-nd v4</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr741n-nd-v1">Tp-Link TL WR 741n-nd v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr741n-nd-v2">Tp-Link TL WR 741n-nd v2</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr741n-nd-v4">Tp-Link TL WR 741n-nd v4</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v3">Tp-Link TL WR 841n-nd v3</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v5">Tp-Link TL WR 841n-nd v5</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v7">Tp-Link TL WR 841n-nd v7</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v8">Tp-Link TL WR 841n-nd v8</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr841n-nd-v9">Tp-Link TL WR 841n-nd v9</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr842n-nd-v1">Tp-Link TL WR 842n-nd v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr842n-nd-v2">Tp-Link TL WR 842n-nd v2</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr941n-nd-v2">Tp-Link TL WR 941n-nd v2</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr941n-nd-v3">Tp-Link TL WR 941n-nd v3</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr941n-nd-v4">Tp-Link TL WR 941n-nd v4</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-tp-link-tl-wr1043n-nd-v1">Tp-Link TL WR 1043n-nd v1</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-bullet-m">Ubiquiti Bullet M</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-nanostation-m">Ubiquiti Nanostation M</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-unifi">Ubiquiti Unifi</option>
                <option value="gluon-fffl-<?php echo $versionNumber; ?>-ubiquiti-unifiap-outdoor">Ubiquiti Unifiap-Outdoor</option>
            </select>
            <button class="button">Herunterladen</button>
            <a class="button" href="files/all_images.zip">Alle als ZIP herunterladen</a>
        </form>
        
        <p>Software unter <a href="http://de.wikipedia.org/wiki/GNU_General_Public_License">GPL Lizenz</a></p>
        <br>
        <br>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="assets/javascripts/main.js" type="text/javascript"></script>
    </body>
</html>