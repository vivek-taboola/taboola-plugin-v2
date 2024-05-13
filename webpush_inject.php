<style>
    <?php include 'css/webpush.css'; ?>
</style>

<div class="taboola-container">
    <div class="theme_image">
        <img src='<?php echo $this->plugin_url.'img/taboola.png' ?>' style='width:150px;'/>
    </div>

    <h2 style="font-size:1.7em;">Taboola WordPress Plugin</h2>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && count($taboola_errors) == 0){
        echo "<div class='label-success'>";
        echo "<h3 style='color:green;'>Changes applied!</h3>";
        echo "<span>Verify the new changes by browsing to your site.</span>";
        echo "</div>";
    }
    
    if(count($taboola_errors) > 0){
        echo "<div class='label-error'>";
            echo "<h3 style='color:red;'>Missing or incorrect values</h3>";
            echo "<p>The following fields contained missing or incorrect values:</p>";
            echo "<ul>";
            for($i = 0; $i < count($taboola_errors); $i++){
                echo "<li>".$taboola_errors[$i]."</li>";
            }
            echo "</ul>";
            echo "<p><b>All values</b> have been reverted to the last successful save.</p>";
        echo "</div>";
    }

    ?>

<!-- Welcome Massage -->

<div class="publisher_welcome_massage">
        <h2 class="welcome_heading">Welcome to Taboola WordPress Plugin</h2>
        <p class="first_p">For detailed instructions, see the <a href="https://developers.taboola.com/web-integrations/docs/wordpress-plugin-managing-placements" target='_blank'>Taboola Dev Center.</a></p>
        <p class="second_p"><b>Stuck? Need a hand?</b> Feel free to reach out via our <a href="https://developers.taboola.com/web-integrations/discuss" target='_blank'>Online Community</a>.</p>
        <div class="list_l1">
            <p>Usage of this plugin is subject to <b>Taboola's</b> <a href="https://www.taboola.com/policies/platform-terms-of-service" target='_blank'>terms of service.</a></p>
        </div>
    </div>

<!--  Welcome Massage-->

<form method="POST">

<?php  
    // Generate a nonce and pass it via a hidden field
    $my_nonce = wp_create_nonce( 'my_plugin_update_field_action' );
  ?>

<input type="hidden" name="my_plugin_nonce" value="<?php echo esc_attr( $my_nonce ); ?>"/>

<h2 class="general_h2">General Settings</h2>

<div class="settings_block">
    <div class="style_box1"><label id="pub_id">Publisher ID :</label>
     <div class="tooltip">
            <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
            <!-- <img class="helpTooltip__icon___1XWGN" src='<?php echo $this->plugin_url.'img/tooltip_image.svg' ?>'/> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN_first">
                    <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                </g>
            </svg>
            <!-- <div id="arrow" ></div> -->
            <div>Your Publisher ID, as provided by Taboola.</div>
        </div>
    </div>
    <div class="web_push_id">
        <input type="number" id="publisher_id_push" value="<?php echo !empty($webpush_inject->publisher_id_push) ? strip_tags($webpush_inject->publisher_id_push) : "" ?>" name="publisher_id_push" placeholder="Publisher ID Web Push" />
    </div>
    <div class="statement">
    <label style="color: #000000; padding-">
        Don't have an account with taboola? <a href='http://taboola.com/contact' target='_blank'>Contact us</a> to get started.
    </label>
    </div>
</div>

    <!-- <div class="web_push"  style="padding-top:10px;">
        <input id="webPush_header" type="checkbox" <?php echo !empty($webpush_inject->webPush_header) ? "checked='checked'" : "" ?> name="webPush_header" />
        Inject web push header script into head
    </div> -->


    <div id="advanced-settings-main">
        <div class="change_button">
            <input class='apply_button' type="submit" value="Apply Changes"/>
        </div>
    </div>

</form>

<div style='clear:both'></div>

<?php
    $logPublisher = empty($settings->publisher_id) ? "wordpressplugin" : $settings->publisher_id;
    $userDetails = wp_get_current_user();
    $detailsString = $userDetails->first_name." ".$userDetails->last_name;
?>
<img src="https://logs-01.loggly.com/inputs/d14862f3-64ad-49ca-b28d-1b5d155414ec.gif?source=wp&type=settings&pub=<?=$logPublisher?>&user=<?=urlencode($detailsString)?>&email=<?=urlencode($userDetails->user_email)?>&url=<?=urlencode("//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}")?>"/>
<!-- <form name="install_log" style="display:none;" method="post" action="http://logs-01.loggly.com/inputs/d14862f3-64ad-49ca-b28d-1b5d155414ec/tag/http/">
    <input name="tim" type="hidden" value="<?=date("H:i:s.000")?>">
    <input name="pub" type="hidden" value="<?=$logPublisher?>">
    <input name="data" type="hideen" value="WORDPRESS_PLUGIN_INSTALL|<?="//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}|{$detailsString}"?>">
</form> -->
</div>

<script>
    // Fadeouts for error/success messages
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 5000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 8000);
</script>
<!-- web-push -->