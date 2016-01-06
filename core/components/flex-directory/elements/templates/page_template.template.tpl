<!DOCTYPE html>
<html lang="en">
<head>
<base href="[[!++site_url]]">
    <meta charset="UTF-8">
    <title>[[++site_name]]</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link href="http://fonts.googleapis.com/css?family=Roboto|Open+Sans:400,400italic,600" rel="stylesheet">
    <link rel="stylesheet" href="assets/components/flex-directory/css/app.css" />

</head>
<body>
<header class="bg-dark-brown"><h1 class="white p1 h2">[[++site_name]]</h1></header>
<section class="bg-brown">
    <form class="form-dark-brown">
        <input type="text" autocomplete="off" class="input tag-field" placeholder="search..."><!--<button class="button button-small button-dark">SEARCH</button>-->
        <ul id="searchResults"></ul>
    </form>
</section>

<main class="flex--container flex--dir-row flex--same-height">

   <aside class="bg-dark-gray">
        <ul class="aside--list">
            <li class="active"><a class="all" href="javascript:void(0);">All</a></li>
            <li class="bg-mid-gray phalf"><em>[[++flex-directory.sidetitle1]]</em></li>
            [[fdspaCategories? &parents=`[[++flex-directory.parents]]`]]
            <li class="bg-mid-gray phalf"><em>[[++flex-directory.sidetitle2]]</em></li>
            [[fdspaPages? &pages=`[[++flex-directory.parents]]`]]
        </ul>
    </aside>

    <article class="grid--container grid--ads[[++flex-directory.style:is=`grid`:then=`-no`]]">
        <div id="infinite_list"></div>
        <div class="center"><a href="javascript:void(0)" id="loadMoreInstaGrid" class="mt1 mb1 button button-primary">Load More</a></div>
        <div id="odDetails" class="center py1 bg-light-gray mid-gray"></div>
    </article>

    [[++flex-directory.style:is=`grid`:then=``:else=`
    <section class="skyscraper flex--col-2 center bg-light-gray">
    	<div class="gutter">[[++flex-directory.ad]]</div>
    </section>`]]

</main>

<section class="modal-bg">

    <div class="modal" id="fdspaModal" tabindex="-1" role="dialog" aria-labelledby="fdspaModalLabel" aria-hidden="true">
      <div class="modal-dialog m2 bg-white">
        <div class="modal-content">
            <div class="modal-header bg-primary">
              <h2 class="modal-title white p1" id="fdspaModalLabel"></h2>
            </div>
            <div class="modal-image center p1"><img id="fdspaModalImage" src=""></div>
            <div class="modal-body p1" id="fdspaModalBody"></div>
            <div class="modal-footer bg-black center">
              <button type="button" class="m1 button button-danger full-width js-close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>

</section>

<script>var instaGridArray = [[fdspaContent? &parents=`[[++flex-directory.parents]]`]];</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="assets/components/flex-directory/js/fdspa.js" defer></script>
</body>
</html>
