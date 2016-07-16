<?php

// The displayed name of the server
$SERVER_NAME = $_SERVER['SERVER_NAME'];

// The actual URL of the server
$SERVER_URL = $_SERVER['SERVER_NAME'];

// The URL to ping
$PLEX_SERVER = $SERVER_URL.':32400/web';

// PlexRequests URL
$PLEX_REQUESTS = $SERVER_URL.':3000/search';

// Donate URL (leave blank to hide)
$DONATE_URL = '';

// Plex App URL
// $PLEX_URL = 'app.plex.tv/web/app';
$PLEX_URL = $PLEX_SERVER;

// Minimum number of movies in your library
$MOVIE_COUNT = 100;

// Minimum number of TV shows in your library
$TV_COUNT = 100;

?>
