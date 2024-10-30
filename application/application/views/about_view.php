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
                                    ["text"=>"How to embed", "url"=>$howto_embed_url],
                                    ["text"=>"About plugin", "url"=>$about_plugin_url, "selected"=>1]
                               ]);           
    ?>

    <div class="content">
        <h4><?php echo $title; ?> by Milinka Global</h4>
        <ul class="help">
        <li>
            <p>
                MiSport Statistics provides the best grassroots football league statistics throughout the country.
                Our unique site allows access to your teams stats, gathered from your relevant league tables.
            </p>
            <p>
                You simply have to type in your club name and select your team. Copy and paste into the
                backend of your website the shortcode that was provided to you earlier. Your team will
                then have access to the latest visual data aid provided by MiSport Statistics.
            </p>
            <p>
                <h3>Milinka Global Ltd.</h3>
                <div><a href="https://www.milinka.co.uk" target="_blank">www.milinka.co.uk</a></div>
                <div>info@milinka.co.uk</div>
                <div>Progressive IT Solutions For Your Business</div>
            </p>
        </li>
        </ul>
    </div>
       
</div>