<?php
// Plugin Name: WEBSITE BACKUP👌


if (!defined('ABSPATH')) {
    exit;
}

define('plugin_dir', plugin_dir_url(__FILE__));

function admin_first_menu()
{
    add_menu_page('website backup', 'Website backup', 'manage_options', 'website_backup_page', 'website_backup_fun', 'dashicons-media-code', 25);
    function website_backup_fun()
    {
        include 'buttons.php';
    }
}
add_action('admin_menu', 'admin_first_menu');

function add_css_ourpages()
{
    wp_enqueue_style('handle_style_css', plugin_dir . 'style.css');
}

add_action('admin_enqueue_scripts', 'add_css_ourpages');

add_action('admin_post_download_website', 'download_website_func');
function download_website_func()
{
    if (!isset($_POST['download_website_nonce_field']) || !wp_verify_nonce($_POST['download_website_nonce_field'], 'download_website_nonce')) {
        wp_die('Nonce verification failed.');
    }

    if (!current_user_can('manage_options')) {
        wp_die('Unauthorized access.');
    }

    $zip = new ZipArchive();
    $zip_file = sys_get_temp_dir() . '/website_full_backup_' . time() . '.zip';

    if ($zip->open($zip_file, ZipArchive::CREATE) !== true) {
        wp_die('Failed to create ZIP file.');
    }

    $root_directory = ABSPATH;
    add_files_to_zip($zip, $root_directory, 'website');

    $zip->close();

    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="website_full_backup_' . time() . '.zip"');
    header('Content-Length: ' . filesize($zip_file));
    readfile($zip_file);
    unlink($zip_file);

    exit;
}

function add_files_to_zip($zip, $dir, $dir_name)
{
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($iterator as $file) {
        if (!$file->isDir()) {
            $zip->addFile($file, $dir_name . '/' . $iterator->getSubPathName());
        }
    }
}


add_action('admin_post_download_database', 'download_database_func');


function download_database_func()
{
    echo "hello";
}
