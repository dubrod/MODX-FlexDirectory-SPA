<?php
/**
 * fdspaPages
 *
 * DESCRIPTION
 *
 * This Snippet loops through the resources given
 * for page titles.
 * Then makes a LI element via chunk "fdspa_categories_list"
 *
 *
 * USAGE:
 *
 * [[fdspaPages? &pages=`[[++flex-directory.parents]]`]]
 *
 */

$input = $modx->getOption('pages', $scriptProperties);
$pages = explode(",", $input);

$limit=0;
$c = $modx->newQuery('modResource');
$c->where(array(
    'id:IN' => $pages,
));
$c->limit($limit, $offset); // whatever limit you want. This makes it compatible with getPage
$includeFields = $modx->getOption('includeFields', $scriptProperties, 'id,pagetitle,hidemenu,published'); // comma separated list including the primary key "id"
$c->select($includeFields); // only fetch the columns you need

$resources = $modx->getCollection('modResource', $c);

$output = "";
$pageArray = array();
foreach ($resources as $res) {
    if(!$res->get('hidemenu') && $res->get('published')){
        $t = $res->get('pagetitle');
        if(!in_array($t,$pageArray)){
            $pageArray[] = $t;
        }
    }
}

$r = array();
foreach ($pageArray as $c){
    $r['cname'] = $c;
    $output .= $modx->parseChunk('fdspa_categories_list', $r);
}

return $output;