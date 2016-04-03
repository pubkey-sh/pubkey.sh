<?php
  /**
   * @file      Index.php
   * @copyright Copyright 2016 Clay Freeman. All rights reserved
   * @license   GNU General Public License v3 (GPL-3.0)
   *
   * Defines functionality for the Index page
   */

  namespace Views;

  class Index {
    public static function show($_) {
      $message = is_string($_) ? \Views\Message::render($_) : null;
      // Render the Menu
      $menu = \Views\Menu::render('/');
      // Load and render the Index template
      ob_start();
      require(__PRIVATEROOT__.'/templates/Index.php');
      $contents = ob_get_contents();
      ob_end_clean();
      // Render and show the Page template
      \Views\Page::show('Home', $contents);
    }
  }
