<?php
function siteUrl($path = '')
{
    global $app;
    $url =  $app['url'];
    echo $url . $path;
}

/**
 * Snippet to redirect to a page
 *
 * @param string $url
 * @return void
 */
function redirectTo($path)
{
    global $app;
    $url =  $app['url'];
    header('Location: ' . $url . $path);
}


/**
 * return date and time in the correct
 * mysqi 'datetime' format
 *
 * @return string
 */
function getFormattedDateTime()
{
    return  date('Y-m-d H:i:s');
}




