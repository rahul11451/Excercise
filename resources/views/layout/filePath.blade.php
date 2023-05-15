@if (strpos($_SERVER['HTTP_HOST'], "localhost") !== FALSE) {
    @php
    define('SITE_DIRECTORY', "justDial");
    @endphp
} @else {
    @php
    $_SERVER['DOCUMENT_ROOT'] .=  "nensi";
    define('SITE_DIRECTORY', "nensi/justDial");
    @endphp
}

@php
define('SITE_PROTOCOL', "http://");
define('SITE_URL', SITE_PROTOCOL . $_SERVER['HTTP_HOST'] . "/" . SITE_DIRECTORY);
define('NENSI', SITE_URL.'/img');
@endphp
