<!DOCTYPE html>
<html lang="en">
<head>
<base href="[[!++site_url]]">
    <meta charset="UTF-8">
    <title>[[++site_name]]</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Roboto|Open+Sans:400,400italic,600" rel="stylesheet">
    <link rel="stylesheet" href="assets/components/flex-directory/css/app.css" />

</head>
<body>
<header class="bg-primary">
    <div class="measure-wide wrap">
        <h1 class="white py1 h2">[[++site_name]]</h1>
    </div>
</header>
<section class="bg-white border-bottom border-mid-gray">
    <div class="measure-wide wrap clearfix">
        <!--<nav>
            <ul>
              <li><a href="">Categories</a></li>
              <li><a href="">Featured</a></li>
              <li><a href="">Clearance</a></li>
          </ul>
      </nav>-->
    </div>
</section>

<main class="py2">
    <div class="measure-wide wrap clearfix">
        [[++flex-directory.subheading:notempty=`<h2 class="dark-gray fw1">[[++flex-directory.subheading]]</h2>`]]

        <div class="flex--container flex--dir-row mt2 mb2">
            <aside class="flex--col-2">

    		  	<div class="default--box">
                    <ul class="default--box-list category_list">
                        <li class="active"><a class="all" href="javascript:void(0);">All</a></li>
                        <li class="bg-light-gray phalf"><em>[[++flex-directory.sidetitle1]]</em></li>
                        [[fdspaCategories? &parents=`[[++flex-directory.parents]]`]]
                        <li class="bg-light-gray phalf"><em>[[++flex-directory.sidetitle2]]</em></li>
                        [[fdspaPages? &pages=`[[++flex-directory.parents]]`]]
                    </ul>
                </div>

            </aside>

            <article class="grid--container grid--ads[[++flex-directory.style:is=`grid`:then=`-no`]]">
                 <div id="infinite_list"></div>
                 <div class="center"><a href="javascript:void(0)" id="loadMoreInstaGrid" class="button button-primary">Load More</a></div>
                 <div id="odDetails" class="center py1"></div>
            </article>

            [[++flex-directory.style:is=`grid`:then=``:else=`
            <div class="skyscraper flex--col-2 center">
    		  	<div class="default--box">
                    [[++flex-directory.ad]]
                </div>
            </div>`]]

        </div> <!-- flex container -->
    </div><!-- wrap -->
</main>
<script>var instaGridArray = [[fdspaContent? &parents=`[[++flex-directory.parents]]`]];</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="assets/components/flex-directory/js/fdspa.js" defer></script>
</body>
</html>
