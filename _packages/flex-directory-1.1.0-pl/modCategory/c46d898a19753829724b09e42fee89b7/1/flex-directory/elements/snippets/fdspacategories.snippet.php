<?php
/**
 * fdspaCategories
 *
 * DESCRIPTION
 *
 * This Snippet loops through the supplied resource parents
 * for TV values set on "fdspa-category".
 * Then makes a LI element via chunk "fdspa_categories_list"
 *
 *
 * USAGE:
 *
 * [[fdspaCategories? &parents=`[[++flex-directory.parents]]`]]
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
$includeFields = $modx->getOption('includeFields', $scriptProperties, 'id'); // comma separated list including the primary key "id"
$c->select($includeFields); // only fetch the columns you need

$resources = $modx->getCollection('modResource', $c);

$output = "";
$cateArray = array();
foreach ($resources as $res) {

    $category = $res->getTVValue('fdspa-category');
    if(!in_array($category,$cateArray)){
        $cateArray[] = $category;
    }
}

$r = array();
foreach ($cateArray as $c){
    $r['cname'] = $c;
    $output .= $modx->parseChunk('fdspa_categories_list', $r);
}

return $output;