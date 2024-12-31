<div style="margin-top: 120px;" class="main_div">
    <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">
        <input type="hidden" value="download_website" name="action">
        <?php wp_nonce_field('download_website_nonce', 'download_website_nonce_field'); ?>
        <button class="download-website" type="submit">Download Website</button>
    </form>
    <form action="<?php echo admin_url('admin-post.php') ?>" method="post">
        <input type="hidden" value="download_database" name="action">
        <button class="download-databse">Download Database</button>
    </form>
</div>

<?php
