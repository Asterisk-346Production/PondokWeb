<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('custom_layout')){

  function custom_layout($data=array()){
    $CI = &get_instance();

    // Redirect to Dashboard if array key body is null or empty or not exist
    if(!array_key_exists('body', $data) || $data['body'] == null || $data['body'] == ""){
      redirect('demo/home_demo');
    }

    // Check array key title to set
    if(array_key_exists('title', $data)){
      $data['title'] == null || $data['title'] == "" ? "Aplikasi Admin Pondok Web" : $data['title'];
    } else {
      $data['title'] = "Aplikasi Admin Pondok Web";
    }
    // Check array key menu to set
    if(array_key_exists('menu', $data)){
      $data['menu'] == null || $data['menu'] == "" ? "Dashboard" : $data['menu'];
    } else {
      $data['menu'] = "Dashboard";
    }
    // Check array key submenu to set
    if(array_key_exists('submenu', $data)){
      $data['submenu'] == null ? "" : $data['submenu'];
    } else {
      $data['submenu'] = "";
    }

    return $CI->load->view('shared/layout', $data);
  }
}
