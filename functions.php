function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link js-scroll-trigger"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
