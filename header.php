<?php
// Main header
?>
<!doctype html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale = 1">
    <title><?php wp_title();?></title>

    <meta name="robots" content="index, follow">
    <meta name="author" content="Anwar Choukah, Jamie Griffin">

    <link href='http://fonts.googleapis.com/css?family=Work+Sans:100,200,400,600,800|Source+Code+Pro:300' rel='stylesheet' type='text/css'>

    <link href="<?php bloginfo(‘atom_url’);?>" rel="alternate" type="application/rss+xml" title="RSS Feed - Jamie Griffin's Griff Monkey">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];
a.async=1;
a.src=g;
m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-67991270-1', 'auto');
      ga('send', 'pageview');

    </script>

<?php wp_head();?>
  </head>
  <body>
    <header class="main-header">
      <div class="logo">
        <a href="<?php echo esc_url(home_url('/'));?>"></a>
      </div>

      <h1><a href="<?php echo esc_url(home_url('/'));?>">Griff<strong>monkey</strong></a></h1>



      <form action="<?php echo esc_url(home_url('/'));?>" method="get" class="search search-header">
        <fieldset>
          <label for="search">Search</label>
          <input type="text" name="s" id="search" value="<?php the_search_query();?>" placeholder="Search">
          <input type="submit" name="submit" value="Search">
        </fieldset>
      </form>

    </header>




<!-- NEW NAV MENU  -->

<button class="hamburger">
  <span>toggle menu</span>
</button>

<nav role="navigation" id="main-menu">

  <div class="menu-main-menu-container">
    <ul class="nav">
      <li <?php if (is_home()) {?> class="current-cat"<?php }?>><a href="<?php bloginfo('home');?>">Home</a></li>

<?php wp_list_categories('orderby=name&use_desc_for_title=1&title_li=&number=5');?>
<!-- TEST MENU FROM MENU BUILDER -->

<!-- <?php wp_nav_menu(array('theme_location' => 'Primary'));?> -->


    </ul>
  </div>
</nav>

<script type="text/javascript">
  (function() {

  "use strict";

  var toggles = document.querySelectorAll(".hamburger");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();

</script>