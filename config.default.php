<?php

// The displayed name of the server
$SERVER_NAME = $_SERVER['SERVER_NAME'];

// The actual URL of the server
$SERVER_URL = $_SERVER['SERVER_NAME'];

// The URL to ping
$PLEX_SERVER = $SERVER_URL.':32400';

// PlexRequests URL
$PLEX_REQUESTS = $SERVER_URL.':3000/search';

// PlexEmail URL (leave blank to hide)
$PLEX_EMAIL = '';

// Plex App URL
// $PLEX_URL = 'app.plex.tv/web/app';
$PLEX_URL = $PLEX_SERVER.'/web';

?>
