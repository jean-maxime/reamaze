<?php
/**
 * Reamaze Admin Dashboard.
 *
 * @author      Reamaze
 * @category    Admin
 * @package     Reamaze/Admin
 * @version     1.0.1
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

if (!class_exists('Reamaze_Admin_Dashboard')) :

/**
 * Reamaze_Admin_Dashboard
 */
class Reamaze_Admin_Dashboard {
  /**
   * Dashboard page.
   *
   * Displays Reamaze Dashboard Page
   */
  public static function output() {
    include 'views/admin-dashboard.php';
  }
}

endif;
