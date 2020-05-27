<?php

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

?>
<form class="tg-search" role="search" method="get" action="<?php echo home_url('/'); ?>">
  <input class="tg-search__input" name="s" maxlength="50" type="text" value="" placeholder=""/>
  <span class="tg-search__open"></span>
</form>