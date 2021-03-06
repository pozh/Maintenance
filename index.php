<?php
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 3600');
?><!doctype html>
<html lang="en">

<head>
    <title>Site Maintenance</title>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body { height: 98%; }
        body { font: 16px Helvetica, sans-serif; color: #333; position: relative; }
        article { font-size: calc(1em + .5vw); position: absolute; display: block; width: 650px; max-width: 80%; top: 50%; left: 50%; transform: translate(-50%, -60%); }
        h1 { font-size: calc(1em + 2vw); }
        a { color: #dc8100; text-decoration: none; }
        a:hover { color: #333; text-decoration: none; }
    </style>
</head>

<body>
    <article>
        <h1>We&rsquo;ll be back soon!</h1>
        <div>
            <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
            <p>&mdash; The Team </p>
        </div>
    </article>
</body>

</html>
