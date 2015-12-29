<?php
/**
 *
 * Resolve Resources
 *
 * THIS RESOLVER IS AUTOMATICALLY GENERATED, NO CHANGES WILL APPLY
 *
 * @package industrix-theme
 * @subpackage build
 */

if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;

if (!function_exists('getResourceMap')) {
    function getResourceMap() {
        global $modx;

        $assetsPath = rtrim($modx->getOption('industrix-theme.assets_path',null,$modx->getOption('assets_path').'components/industrix-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';

        if (is_readable($rmf)) {
            $map = include $rmf;
        } else {
            $map = array();
        }

        return $map;
    }
}

if (!function_exists('setResourceMap')) {
    function setResourceMap($resourceMap) {
        global $modx;

        $assetsPath = rtrim($modx->getOption('industrix-theme.assets_path',null,$modx->getOption('assets_path').'components/industrix-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';
        file_put_contents($rmf, '<?php return ' . var_export($resourceMap, true) . ';');

    }
}

if (!function_exists('createResource')) {
    function createResource($resource) {
        global $modx;

        if (isset($resource['tvs'])) {
            $tvs = $resource['tvs'];
            unset($resource['tvs']);
        } else {
            $tvs = array();
        }

        $res = $modx->runProcessor('resource/create', $resource);
        $resObject = $res->getObject();

        if ($resObject && isset($resObject['id'])) {
            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', array('id' => $resObject['id']));

            if ($modResource) {
                foreach ($tvs as $tv) {
                    $modResource->setTVValue($tv['name'], $tv['value']);
                }

                return $modResource->id;
            }
        }

        return false;
    }
}

if (!function_exists('updateResource')) {
    function updateResource($resource) {
        global $modx;

        if (isset($resource['tvs'])) {
            $tvs = $resource['tvs'];
            unset($resource['tvs']);
        } else {
            $tvs = array();
        }

        $res = $modx->runProcessor('resource/update', $resource);
        $resObject = $res->getObject();

        if ($resObject && isset($resObject['id'])) {
            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', array('id' => $resObject['id']));

            if ($modResource) {
                foreach ($tvs as $tv) {
                    $modResource->setTVValue($tv['name'], $tv['value']);
                }

                return $modResource->id;
            }
        }

        return false;
    }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
        $resources = array (
  0 => 
  array (
    'pagetitle' => 'Home',
    'alias' => 'index',
    'parent' => 0,
    'content' => '',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Grid Body Listing By ID',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 1,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'grid',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-home',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '2,3,7,12,15',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '2,3,5,6,7,8,12,14,15,17',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  1 => 
  array (
    'pagetitle' => 'Theme Features',
    'alias' => 'theme-features',
    'parent' => 0,
    'content' => '<h2>Social Media Icons</h2><p>Easily show Facebook and Twitter Links in the Top of your site.</p><hr /><h2>Root Navigation</h2><p>The Main Navbar follows the Root Resource Tree exactly as you have it organized down to 2 levels. The Menu is mobile ready and has click dropdown triggers for devices.</p><hr /><h2>MXT Ready</h2><p>The MXT Default Image, Copyright, Slogan, Facebook, and Twitter settings are being used.</p><hr /><h2>Banner</h2><p>If "Show Banner" is checked it will display a full width dark primary section with a centered image.</p><hr /><h2>Sidebar</h2><p>The sidebar for Page Body\'s has the ability to show "Featured Posts", "Listing by Parent", and "Listing by IDs".</p><p><a href="[[~5]]">Example Page</a></p><hr /><h2>6 Color Settings</h2><p class="accent-primary">Accent Primary</p><p class="accent-secondary">Accent Secondary</p><p class="dark-primary">Dark Primary</p><p class="dark-secondary">Dark Secondary</p><p class="neutral-primary">Neutral Primary</p><p class="neutral-secondary">Neutral Secondary</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'All the features of the Industrix Theme',
    'description' => 'A general overview of the features included in this theme. More specific examples can be found on the individual resources.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/hero-badger.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => 'yes',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  2 => 
  array (
    'pagetitle' => 'Style Guide',
    'alias' => 'style-guide',
    'parent' => 'Theme Features',
    'content' => '<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p><p><small>This line of text is meant to be &lt;small&gt; print.</small></p><h2>Heading 2</h2><p>The following snippet of text is <strong>rendered as bold text</strong>.</p><h3>Heading 3</h3><p>The following snippet of text is <em>rendered as italicized text</em>.</p><blockquote>Blockquote: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. nteger posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</blockquote><ul><li>Standard UL</li><li>Standard UL</li><li>Standard UL</li></ul><ol><li>OL with numbers style</li><li>OL with numbers style</li><li>OL with numbers style</li></ol>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Industrix Style Guide',
    'description' => 'Standard HTML elements in the Industrix Theme.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-star',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/hero-mechanic.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => 'yes',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  3 => 
  array (
    'pagetitle' => 'Pages',
    'alias' => 'pages',
    'parent' => 0,
    'content' => '<p>The Page Body, Page Layout is your default looking template. It is a simple centered column with a header, published date, and content. The dark resource listing at the bottom of the container is representative of a "<strong>Featured Post</strong>" setting.</p><p>This template has built-in schema.org markup for a "<a href="http://schema.org/BlogPosting" target="_blank">BlogPosting</a>".</p><blockquote>Below is the "Listing by Parent", or "Listing by ID" feature when you have a Page Body and Page Layout.</blockquote><p>The template has Quantity Queries setup to alter listing width based on whether you have 1, 2, or 3+ listings attached.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Page Body & Page Layout',
    'description' => '',
    'isfolder' => 1,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-home',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '2',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '12,7,5,6',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  4 => 
  array (
    'pagetitle' => 'Page with Sidebar',
    'alias' => 'page-with-sidebar',
    'parent' => 'Pages',
    'content' => '<p>The first box is a "<strong>Featured Post</strong>".</p><p>The second section is a "<strong>Listing by Parent ID</strong>".</p><p>With the last 2 links being "<strong>Listing by ID</strong>".</p><hr /><p>The last area you see in the sidebar is the "<strong>Carousel Post IDs</strong>" section. This theme is going to alter that field to be used as a "Promo" option when in "Page Body &amp; Sidebar Layout".</p><p><img class="fit" src="assets/images/carousel-tv.jpeg" alt="" /></p><blockquote>Resource ID#10 contains a Form that is rendered in the sidebar.</blockquote><p><img class="fit" src="assets/images/quick-contact-screenshot.jpeg" alt="" /></p><hr /><p>Turducken pork chop kevin, salami drumstick doner pig pork meatloaf jerky tenderloin ground round t-bone. Short ribs chicken alcatra swine strip steak, salami corned beef ham hock ham tri-tip fatback pork chop brisket cow short loin. Tenderloin ham capicola, pig pork belly meatball landjaeger tongue beef ribs hamburger shoulder pork chop. Chuck chicken t-bone doner beef ribs, ham hock pork belly tri-tip flank filet mignon pig kielbasa. Biltong spare ribs pancetta drumstick corned beef bacon turducken venison pastrami bresaola landjaeger cow strip steak jerky pork loin.</p><blockquote>Jowl andouille ham corned beef. Short loin ham strip steak, meatloaf venison brisket ham hock pancetta bresaola cow landjaeger tri-tip t-bone jerky shoulder. Leberkas cow pork, bresaola alcatra ground round chuck t-bone pig fatback porchetta shankle short loin. Ham fatback sirloin beef ribs.</blockquote><p>Filet mignon strip steak shankle, pig cow ribeye beef ribs rump kevin alcatra flank. Doner jerky short loin porchetta beef ribs t-bone frankfurter turducken shank beef jowl meatball cow brisket tenderloin. Short ribs bresaola spare ribs doner jowl drumstick.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Page Body & Sidebar Layout',
    'description' => 'This is what a Page Body with a Sidebar would look like.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'sidebar',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-picture-o',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '3',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '10',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '2,3',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '4',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  5 => 
  array (
    'pagetitle' => 'Blank Page',
    'alias' => 'blank-page',
    'parent' => 'Pages',
    'content' => '<p>Blanks Pages allow you full control of content within the &lt;header&gt; and &lt;footer&gt; sections.</p><p>Bresaola beef ribs sirloin, short loin pork belly hamburger fatback tongue. Jowl meatloaf sirloin landjaeger shoulder shankle tri-tip strip steak tenderloin rump short ribs. Tongue spare ribs capicola jerky bacon. Shankle swine fatback shank boudin, sausage short loin ground round alcatra ball tip kielbasa doner sirloin salami. Meatball tail short loin, turkey jerky andouille t-bone. Ball tip andouille pastrami sausage pork loin, shank bresaola doner.</p><p>Turducken pork chop kevin, salami drumstick doner pig pork meatloaf jerky tenderloin ground round t-bone. Short ribs chicken alcatra swine strip steak, salami corned beef ham hock ham tri-tip fatback pork chop brisket cow short loin. Tenderloin ham capicola, pig pork belly meatball landjaeger tongue beef ribs hamburger shoulder pork chop. Chuck chicken t-bone doner beef ribs, ham hock pork belly tri-tip flank filet mignon pig kielbasa. Biltong spare ribs pancetta drumstick corned beef bacon turducken venison pastrami bresaola landjaeger cow strip steak jerky pork loin.</p><blockquote>Jowl andouille ham corned beef. Short loin ham strip steak, meatloaf venison brisket ham hock pancetta bresaola cow landjaeger tri-tip t-bone jerky shoulder. Leberkas cow pork, bresaola alcatra ground round chuck t-bone pig fatback porchetta shankle short loin. Ham fatback sirloin beef ribs.</blockquote><p>Filet mignon strip steak shankle, pig cow ribeye beef ribs rump kevin alcatra flank. Doner jerky short loin porchetta beef ribs t-bone frankfurter turducken shank beef jowl meatball cow brisket tenderloin. Short ribs bresaola spare ribs doner jowl drumstick.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Page Body & Blank Layout',
    'description' => 'This is what a Page Body with a Blank Layout would look like.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'blank',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-search',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  6 => 
  array (
    'pagetitle' => 'Page with Slider',
    'alias' => 'page-with-slider',
    'parent' => 'Pages',
    'content' => '<p><strong>Gallery Demo Values are not installed.</strong></p><p>When a resource is set to <strong>Page</strong>, the <strong>Slider IDs</strong> will accept the Name of a Gallery not IDs of resources.</p><p style="text-align: center;"><img src="assets/components/industrix-theme/images/page-body-slider-setting.jpeg" alt="Slider Setting" /></p><p>Under "Extras -&gt; Gallery" you can create your Slider Gallery</p><p style="text-align: center;"><img src="assets/components/industrix-theme/images/slider-gallery-screenshot.jpeg" alt="Slider Gallery" /></p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Page with Slider Example',
    'description' => 'This is what a Page Body with a Slider would look like.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  7 => 
  array (
    'pagetitle' => 'Contact',
    'alias' => 'contact',
    'parent' => 0,
    'content' => '[[!$mxt.feature_contact_form_[[++mxt.theme]]]]',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
    'richtext' => 0,
  ),
  8 => 
  array (
    'pagetitle' => 'Promos',
    'alias' => 'promos',
    'parent' => 0,
    'content' => '<p>This is a hidden container for promos to be called in the "Carousel Post ID\'s" Template Variable.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 1,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
    'hidemenu' => 1,
  ),
  9 => 
  array (
    'pagetitle' => 'Quick Contact',
    'alias' => 'quick-contact',
    'parent' => 'Promos',
    'content' => '[[!$mxt.feature_contact_quick_aside_industrix]]',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
    'richtext' => 0,
  ),
  10 => 
  array (
    'pagetitle' => 'Thank You',
    'alias' => 'thank-you',
    'parent' => 0,
    'content' => '<p>Thank you for the inquiry, we will respond to you as soon as possible.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
    'hidemenu' => 1,
  ),
  11 => 
  array (
    'pagetitle' => 'Page with Hero Banner',
    'alias' => 'page-with-hero-banner',
    'parent' => 'Pages',
    'content' => '<p>Every "Page" has the ability to show a "Hero" or Banner image.</p><p style="text-align: center;"><img src="assets/components/industrix-theme/images/page-with-hero-banner.jpeg" alt="Page Hero" /></p><p>The markup is an IMG element and will resize accordingly.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Page with Hero Banner Example',
    'description' => 'This is what a Page Body with a Banner would look like.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-camera',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/hero-badger.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => 'yes',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  12 => 
  array (
    'pagetitle' => 'Listings',
    'alias' => 'listings',
    'parent' => 0,
    'content' => '',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Listing Body Page Layout',
    'description' => '',
    'isfolder' => 1,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'listing',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-list-alt',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '2,3,7,12',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '2,3,8',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '4',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  13 => 
  array (
    'pagetitle' => 'Listings Explained',
    'alias' => 'listings-explained',
    'parent' => 'Listings',
    'content' => '<p>The "<strong>Slider</strong>" Feature on "<strong>Listings</strong>" are using Resource IDs not Galleries.</p><p>The "<strong>Listing by ID</strong>" Feature on "<strong>Listings</strong>" is visible in the main section with a thumbnail on the left. It will output an H1 Longtitle/Pagetitle above the list.</p><p>The "<strong>Listing by Parent</strong>" Feature on "<strong>Listings</strong>" is also visible in the main section with a thumbnail on the left. It will also output an H1 element above the list with the text being that of the parent you entered.</p><blockquote>There is no "Sidebar" for Listings</blockquote><blockquote>There is no "Carousel" for Listings</blockquote><blockquote>There is no "Featured Posts" for Listings</blockquote>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-list-alt',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  14 => 
  array (
    'pagetitle' => 'Grids',
    'alias' => 'grid',
    'parent' => 0,
    'content' => '',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Grid Body Page Layout',
    'description' => '',
    'isfolder' => 1,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'grid',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-gear',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '3,2,16',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '2,3,8,14,16',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '4',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  15 => 
  array (
    'pagetitle' => 'Grid Explained',
    'alias' => 'grid-explained',
    'parent' => 'Grids',
    'content' => '<p>The "<strong>Slider</strong>" Feature on "<strong>Grid</strong>" is using Resource IDs not Galleries.</p><p>"Grid" Body will always render the <em>Longtitle</em> First</p><p>The "<strong>Featured Posts IDs</strong>" section on "<strong>Grid</strong>" is visible above the listings and is in a 3 Column format instead of 4 column.</p><p>The "<strong>Listing by ID</strong>" Feature on "<strong>Grid</strong>" is visible in the main section.</p><p>The "<strong>Listing by Parent</strong>" Feature on "<strong>Grid</strong>" is also visible in the main section. With the same layout</p><blockquote>There is no "Sidebar" for Listings</blockquote><blockquote>There is no "Carousel" for Listings</blockquote>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-tag',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/industrial-wallpaper4.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  16 => 
  array (
    'pagetitle' => 'Gallery',
    'alias' => 'gallery',
    'parent' => 0,
    'content' => '<p><strong>Demo Values not included for Gallery.</strong> <br> When a resource is set to Gallery, the Slider IDs will accept the Name of a Gallery not IDs of resources.</p><p>Paragraphs here are white.</p><p>There are no Sidebar or Blank Layouts.</p><p>No Listings, Featured Posts, Carousels, Hero Banners or Sliders on this Layout.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Gallery Body Page Layout',
    'description' => '',
    'isfolder' => 1,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'gallery',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-camera',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/industrial-wallpaper.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  17 => 
  array (
    'pagetitle' => 'Team',
    'alias' => 'team',
    'parent' => 0,
    'content' => '',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Team Members',
    'description' => '',
    'isfolder' => 1,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'listing',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-user',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '18',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  18 => 
  array (
    'pagetitle' => 'Thomas Edison',
    'alias' => 'thomas-edison',
    'parent' => 'Team',
    'content' => '<p><img style="float: left; margin-right: 10px; margin-left: 10px;" src="assets/components/industrix-theme/images/thomas-edison.jpg" alt="" width="300" height="300" /></p><p><strong>Title:</strong> Master Inventor&nbsp;<br /><strong>Phone:</strong> 123-456-789&nbsp;<br /><strong>Email:</strong>&nbsp;<a href="mailto:tom@tinfoil-cylinder.com">tom@tinfoil-cylinder.com</a>&nbsp;</p><p>The first great invention developed by Edison in Menlo Park was the tin foil phonograph. While working to improve the efficiency of a <a href="http://inventors.about.com/library/inventors/bltelegraph.htm">telegraph</a> transmitter, he noted that the tape of the machine gave off a noise resembling spoken words when played at a high speed. This caused him to wonder if he could record a telephone message. He began experimenting with the diaphragm of a telephone receiver by attaching a needle to it. He reasoned that the needle could prick paper tape to record a message. His experiments led him to try a stylus on a tinfoil cylinder, which, to his great surprise, played back the short message he recorded, "Mary had a little lamb."</p><p>The word phonograph was the trade name for Edison\'s device, which played cylinders rather than discs. The machine had two needles: one for recording and one for playback. When you spoke into the mouthpiece, the sound vibrations of your voice would be indented onto the cylinder by the recording needle. This cylinder phonograph was the first machine that could record and reproduce sound created a sensation and brought Edison international fame.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => 'August 12, 1877, is the date popularly given for Edison\'s completion of the model for the first phonograph.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-user',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/thomas-edison.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  19 => 
  array (
    'pagetitle' => 'Eli Whitney',
    'alias' => 'eli-whitney',
    'parent' => 'Team',
    'content' => '<p><img style="float: left; margin-right: 10px; margin-left: 10px;" src="assets/components/industrix-theme/images/eliwhitneycolor.jpg" alt="" width="300" height="416" /></p><p><strong>Title:</strong>&nbsp;Cotton Gin Inventor&nbsp;<br /><strong>Phone:</strong> 123-456-789&nbsp;<br /><strong>Email:</strong>&nbsp;<a href="mailto:eli@cotton-gin.com">eli@cotton-gin.com</a>&nbsp;</p><p>Whitney was born in Westborough, Massachusetts, on December 8, 1765, the eldest child of Eli Whitney Sr., a prosperous farmer, and his wife Elizabeth Fay, also of Westborough.</p><p>Although the younger Eli, born in 1765, could technically be called a "Junior", history has never known him as such. He was famous during his lifetime and afterward by the name "Eli Whitney". His son, born in 1820, also named Eli, was well known during his lifetime and afterward by the name "Eli Whitney, Jr."</p><p>Whitney\'s mother, Elizabeth Fay, died in 1777, when he was 11.[2] At age 14 he operated a profitable nail manufacturing operation in his father\'s workshop during the Revolutionary War.</p><p>Eli Whitney has often been incorrectly credited with inventing the idea of interchangeable parts, which he championed for years as a maker of muskets; however, the idea predated Whitney, and Whitney\'s role in it was one of promotion and popularizing, not invention. Successful implementation of the idea eluded Whitney until near the end of his life, occurring first in others\' armories.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => 'An American inventor best known for inventing the cotton gin. This was one of the key inventions of the Industrial Revolution and shaped the economy of the Antebellum South.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-user',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/eliwhitneycolor.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  20 => 
  array (
    'pagetitle' => 'NIkola Tesla',
    'alias' => 'nikola-tesla',
    'parent' => 'Team',
    'content' => '<p><img style="float: left; margin-right: 10px; margin-left: 10px;" src="assets/components/industrix-theme/images/220px-NTesla.JPG" alt="" width="220" height="288" /></p><p><strong>Title:</strong>&nbsp;Magnetics Engineer&nbsp;<br /><strong>Phone:</strong> 123-456-789&nbsp;<br /><strong>Email:</strong>&nbsp;<a href="mailto:nick@big-sparks.com">nick@big-sparks.com</a>&nbsp;</p><p>Inventor Nikola Tesla was born in July of 1856, in what is now Croatia. He came to the United States in 1884 and briefly worked with Thomas Edison before the two parted ways. He sold several patent rights, including those to his alternating-current machinery, to George Westinghouse. His 1891 invention, the "Tesla coil," is still used in radio technology today. Tesla died in New York City on January 7, 1943.</p><p>Nikola Tesla was born on July 10, 1856, in what is now Smiljan, Croatia. Tesla\'s interest in electrical invention was spurred by his mother, Djuka Mandic, who invented small household appliances in her spare time while her son was growing up.</p><p>After parting ways with Edison, in 1885 Tesla received funding for the Tesla Electric Light Company and was tasked by his investors to develop improved arc lighting. After successfully doing so, however, Tesla was forced out of the venture and for a time had to work as a manual laborer in order to survive.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => 'Inventor Nikola Tesla contributed to the development of the alternating-current electrical system that\'s widely used today and discovered the rotating magnetic field.',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-user',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => 'assets/components/industrix-theme/images/220px-NTesla.jpg',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
);

        $resourceMap = getResourceMap();
        $toRemove = $resourceMap;
        $siteStart = $modx->getOption('site_start');

        foreach ($resources as $resource) {
            if (is_string($resource['parent'])) {
                if (isset($resourceMap[$resource['parent']])) {
                    $resource['parent'] = $resourceMap[$resource['parent']];
                } else {
                    /** @var modResource $parent */
                    $parent = $modx->getObject('modResource', array('pagetitle' => $resource['parent']));
                    if ($parent) {
                        $resource['parent'] = $parent->id;
                    }
                }
            } else {
                if ($resource['parent'] != 0) {
                    /** @var modResource $parent */
                    $parent = $modx->getObject('modResource', array('id' => $resource['parent']));
                    if ($parent) {
                        $resource['parent'] = $parent->id;
                    }
                } else {
                    $resource['parent'] = 0;
                }
            }

            if ($resource['template'] !== null) {
                if ($resource['template'] !== 0) {
                    $template = $modx->getObject('modTemplate', array('templatename' => $resource['template']));
                    if ($template) {
                        $resource['template'] = $template->id;
                    }
                } else {
                    $resource['template'] = 0;
                }
            }

            if ($resource['content_type'] !== null) {
                $content_type = $modx->getObject('modContentType', array('name' => $resource['content_type']));
                if ($content_type) {
                    $resource['content_type'] = $content_type->id;
                }
            } else {
                $resource['content_type'] = $modx->getOption('default_content_type', null, 1);
            }

            if (isset($resourceMap[$resource['pagetitle']])) {
                unset($toRemove[$resource['pagetitle']]);

                /** @var modResource $exists */
                $exists = $modx->getObject('modResource', array('id' => $resourceMap[$resource['pagetitle']]));
                if ($exists) {
                    $resource['id'] = $exists->id;
                    $resId = updateResource($resource);

                    if ($resId !== false) {
                        $resourceMap[$resource['pagetitle']] = $resId;
                    }
                } else {
                    if ($resource['set_as_home'] == 1) {
                        unset($resource['set_as_home']);
                        $resource['id'] = $siteStart;

                        $resId = updateResource($resource);

                        if ($resId !== false) {
                            $resourceMap[$resource['pagetitle']] = $resId;
                        }
                    } else {
                        $resId = createResource($resource);

                        if ($resId !== false) {
                            $resourceMap[$resource['pagetitle']] = $resId;
                        }
                    }
                }
            } else {
                $resId = createResource($resource);

                if ($resId !== false) {
                    $resourceMap[$resource['pagetitle']] = $resId;
                }
            }
        }

        foreach ($toRemove as $pageTitle => $resource) {
            unset($resourceMap[$pageTitle]);

            if ($resource == $siteStart) continue;

            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', $resource);
            if ($modResource) {
                $modx->updateCollection('modResource', array('parent' => 0), array('parent' => $resource));

                $modResource->remove();
            }
        }

        setResourceMap($resourceMap);

        break;
    case xPDOTransport::ACTION_UNINSTALL:

        break;
}

return true;