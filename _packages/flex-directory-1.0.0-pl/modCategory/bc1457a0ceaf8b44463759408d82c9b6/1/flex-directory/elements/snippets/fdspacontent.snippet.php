<?php
/**
 * fdspaContent
 *
 * DESCRIPTION
 *
 * This Snippet loops through the supplied resource parents
 * for specific values.
 * Then makes a Json Object.
 *
 *
 * USAGE:
 *
 * var array_name = [[fdspaContent? &parents=`[[++flex-directory.parents]]`]];
 *
 */

$input = $modx->getOption('parents', $scriptProperties);
$parents = explode(",", $input);

$limit=0;
$offset=0;
$c = $modx->newQuery('modResource');
$c->where(array(
    'parent:IN' => $parents, // whatever where conditions you want
));
$c->limit($limit, $offset); // whatever limit you want. This makes it compatible with getPage
$includeFields = $modx->getOption('includeFields', $scriptProperties, 'id,pagetitle,introtext'); // comma separated list including the primary key "id"
$c->select($includeFields); // only fetch the columns you need

$resources = $modx->getCollection('modResource', $c);

$output = array();
$idx = 1;
foreach ($resources as $res) {
    //$res->get('id')

    //get parent name
    $pid = $res->get('parent');
    $parentObj = $modx->getObject('modResource', $pid);
    $pArray = array("parentslug" => $parentObj->get('pagetitle'));

    //get category
    $category = $res->getTVValue('fdspa-category');
    $cArray = array("category" => $category);

    //get thumbnail
    $thumb = $res->getTVValue('fdspa-thumb');
    $tArray = array("thumbnail" => $thumb);

    $r = $res->toArray('', false, true); // you want that 3rd argument to prevent loading all columns
    $output[$idx] = array_merge($r, $pArray, $tArray, $cArray);
    $idx++;
}
return $modx->toJSON($output);