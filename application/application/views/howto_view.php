<?php
    $get_stats_url = $urlhelper->create_url('main','index');
    $howto_embed_url = $urlhelper->create_url('main','embed');
    $about_plugin_url = $urlhelper->create_url('main','about');    
?>

<?php include('header.php'); ?>

<div class="wrap">
    <?php echo $htmlhelper->title($title,'dashicons-shield-alt'); ?>
    
    <?php 
        echo $htmlhelper->tabs([
                                    ["text"=>"Find statistics", "url"=>$get_stats_url],
                                    ["text"=>"How to embed", "url"=>$howto_embed_url, "selected"=>1],
                                    ["text"=>"About plugin", "url"=>$about_plugin_url]
                               ]);           
    ?>

    <div class="content">
        <h4>How to embed statistics to a website.</h4>
        <ul class="help">
            <li>
                <div class="ball">1.</div> Paste the shortcode you've copied from the <?php echo $title; ?> site, to your content editor.
                <img width="100%" src="<?php echo MISPORT_STATS_PLUGIN_BASE_URL; ?>static/images/Plugin_insert_shortcode.jpg" />
            </li>
            <li>
                <div class="ball">2.</div> Verify statistics are shown in your website.
                <img width="100%" src="<?php echo MISPORT_STATS_PLUGIN_BASE_URL; ?>static/images/Plugin_statistics_published.jpg" />
            </li>
        </ul>
                
    </div>
   
</div>