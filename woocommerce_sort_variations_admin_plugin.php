<?php
/*
Plugin Name: Woocommerce Sort Variations by ID in Admin
Plugin URI: http://www.ibexoft.com
Description: Sorts Variations in Admin by variation ID.
Version: 0.1
Author: Muhammad Jawaid Shamshad | Ibexoft
Author URI: http://www.ibexoft.com
License: GNU Public License
*/

function ibx_woocommerce_sort_variation(){
	if($query->is_admin) {
 
        if ($query->get('post_type') == 'product_variation')
        {
          $query->set('orderby', 'id');
          $query->set('order', 'ASC');
        }
  }
  return $query;
}
add_filter('pre_get_posts','ibx_woocommerce_sort_variation');