<?php
/**
 * fdspaApi
 *
 * DESCRIPTION
 *
 * This Snippet gets more content from the supplied resource
 * given in the "data-id" on click.
 * 
 *
 *
 * USAGE:
 *
 * [[!fdspaApi]]
 *
 */
$get = modX::sanitize($_GET, $modx->sanitizePatterns);
$res_id= urldecode($get['fdspaid']);

if( !empty($res_id) && is_numeric($res_id) ){
    //$output = "id given";
    $output = array();
    $page = $modx->getObject('modResource', $res_id);

    $title   = array( "pagetitle" => $page->get('pagetitle') );
    $thumb = $page->getTVValue('fdspa-thumb');
    $tArray = array("image" => $thumb);
    $content = array( "content" => $page->get('content') );

    $output["result"] = array_merge($title, $content,$tArray);
    return $modx->toJSON($output);

} else {
    $output = "There is was no ID given.";
    return $output;
}