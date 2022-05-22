<?php

/**
 *  Up is a helper to handle Unpoly's header 
 */
class Up
{
  private function get_headers()
  {
    return getallheaders();
  }

  private function get_target()
  {
    return self::get_headers()['X-Up-Target'] ?? 'body';
  }

  /**
   * Verify if selector is include in Unpoly header
   */
  public static function target_includes($selector)
  {
    $target = explode(',', self::get_target());
    $target = array_map('trim', $target);

    return in_array('body', $target) ? true : in_array($selector, $target);
  }
}
