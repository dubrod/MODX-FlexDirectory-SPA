<?php
if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;

if (!function_exists('getResourceMap')) {
    function getResourceMap() {
        global $modx;

        $assetsPath = rtrim($modx->getOption('industrix-theme.assets_path',null,$modx->getOption('assets_path').'components/flex-directory/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';

        if (is_readable($rmf)) {
            $map = include $rmf;
        } else {
            $map = array();
        }

        return $map;
    }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:

        break;
    case xPDOTransport::ACTION_UPGRADE:

        $resourceMap = getResourceMap();
        $rssResource = '';

        if (!empty($resourceMap)) {
            $rssResource = '';
        }

        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;
