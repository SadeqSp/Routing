<?php

function home_url($path = null) {
    if(!$path || $path == '/') {
        return SITE_URL;
    }
    return SITE_URL . $path;
}

function get_module_name() {
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $req = str_replace(SITE_URL, '', $url);
    
    $question_mark_pos = strpos($req, '?');
    if($question_mark_pos !== false) {
        $req = substr($req, 0, $question_mark_pos);
    }
    
    return $req;
}

function render_page() {    
    include_once('templates/header.php');
    get_content();
    include_once('templates/footer.php');
}

function load_module() {
    
    $module = get_module_name();
    if(empty($module)) {
        $module = 'home';
    } 
    
    $module_file = "pages/$module.php";
    if(file_exists($module_file)) {
        require_once("pages/$module.php");
        //check_for_authentication_requirement();
    } else {
        //add_message('آدرس وارد شده، صحیح نیست.', 'error');
        require_once("pages/home.php");
    }
    render_page();
    
    
    
    
    /* new version - not tested here
    global $page;
    $page = get_module_name();
    $page_file = "pages/$page.php";
    
    if(!file_exists($page_file)) {
        $page = 'home';
    }
    require_once("pages/$page.php");
    render_page();
    */ 
}
