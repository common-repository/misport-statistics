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
                                    ["text"=>"Find statistics", "url"=>$get_stats_url, "selected"=>1],
                                    ["text"=>"How to embed", "url"=>$howto_embed_url],
                                    ["text"=>"About plugin", "url"=>$about_plugin_url]
                               ]);           
    ?>
    
    <div class="content">
        
        <ul class="help">
            <li>
                <div class="ball">1.</div> Locate your team(s) statistics from search box.
            </li>
            <li>
                <div class="ball">2.</div> Select style.
            </li>
            <li>
                <div class="ball">3.</div> Register statistics with your email address.
            </li>  
            <li>
                <div class="ball">4.</div> Get statistics shortcode.
            </li>                      
        </ul>
        
        <iframe frameborder="0" width="100%" src="<?php echo MISPORT_STATS_PLUGIN_FRAME_URL; ?>" height="100%"></iframe>
    </div>
   
</div>