<!-- Latest font-awesome include-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

    .taboola-container {
        padding: 20px;
        padding-left: 0;
        font-size: 14px;
        background-color: #FAF9F6;
        font-family: Roboto,Lato,Hind -apple-system,Helvetica Neue,sans-serif;
    }

    .settings_block {
        background-color: #fff;
        border: 1px solid #d4d9df;
        border-radius: 8px;
        margin-top: 10px;
        width: 50%;
    }

    .settings_block.widget_settings_block { /* Give the widget settings block some extra space at the end */
        padding-bottom: 15px;
    }

    .settings_block input {
        border-color: #ccc; /* Most of the inputs are styled via jQuery. This is for any others - e.g. #publisher-id */
    }

    .publisher_welcome_massage{
        float: right;
        width: 36%;
        padding: 20px 10px 10px 0px;
        margin: 40px 6% 0 0;
        background: #FFFACD;
        border: 1px solid #d4d9df;
        border-radius: 20px;
    }

    .switch_style{
        margin : 10px 10px 20px 10px;
    }

    .style_box1, .pub_id{
        padding: 10px 10px 0px 20px;
    }

    .statement{
        padding: 10px 10px 10px 20px;
    }

    .widget_below, .widget_below_mid, .widget_below_mid_selector, .widget_below_home, .widget_below_home_selector{
        width: 50%;
        float: left;
        padding: 5px 0px 0px 20px;
    }
    
    .mode_style, .mode_style_mid, .mode_style_home, .mode_style_home_selector{
        width: 50%;
        padding: 0px 0px 3px 20px;
        float:left;
    }

    .placement_style, .placement_style_mid, .placement_style_home_occurrence,.placement_style_home {
        padding: 0px 0px 8px 0px;
        width: 50%;
        float: right;
    }

    .widget_below_mid_selector{
        padding: 8px 0px 0px 0px;
    }

    .placement_below_mid_occurrence,.mode_style_mid_selector {
        padding: 0px 0px 8px 20px;
    }

    .heading_mid_home{
        padding: 20px 0px 8px 20px;
    }

    #mid_occurrence_div, #mid_css_selector_div {
        width: 50%;
        float: left;
        margin: 19px 0px 0px 0px;
    }

    /* slider button CSS */

    .switch {
        position: relative;
        display: inline-block;
        width: 45px;
        height: 20px;
        float: right;
    }

    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: -1px;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        left: 1px;
        bottom: 1px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #0f4c81;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #0f4c81;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    /* slider button CSS */

    .request_link {
        float: right;
        margin-right: 10px;
        line-height: 26px;
    }

/* hide and position tooltip */

    .tooltip div{ 
        visibility: hidden;
        width: auto;
        display: inline-block;
        background: #0f4c81;
        color: #ffffff;
        font-weight: normal;
        font-size: 12px;
        border-radius: 6px;
        padding: 5px;
        margin-left: 5px;
        max-width: 350px;
        position: absolute;
        z-index: 999;
        transition-delay: 0.25s;
    }

    .tooltip div a:hover{
        text-decoration: underline;
    }

    .tooltip{
        opacity: 1 !important;
        font-size: 13px !important;
        display: contents !important;
    }

    .tooltip:hover div{
        visibility: visible;
        transition-delay: 0.5s;
    }

    .tooltip div a{
        text-decoration: none;
        font-weight: bold;
        color: #fff;
    }

    .label-success {
        background: #a4fba6 !important;
        border: 1px solid #d2f2d4;
        border-radius: 10px;
        padding: 10px 30px 20px 10px;
        font-size: 14px;
        display: block;
        margin-top: 10px;
        color: green;
        width: 50%;
    }
    .label-error {
        background: #ffbaba;
        border: 1px solid #ffbaba;
        border-radius: 10px;
        padding: 10px 30px 20px 10px;
        font-size: 14px;
        display: block;
        margin-top: 10px;
        color: red;
        width: 50%;
    }

    .label-error ul {
        list-style-position: inside;
        list-style-type: disc;
        text-indent: 2em;
    }

    .label-error p {
        font-size: 14px;
    }

    .change_button{
        float: right;
    }

    .apply_button{
        /* margin-top: 20px; */
        background-color: #0f4c81;
        color: #fff;
        padding: 0.8rem 1rem;
        border-radius: 7px;
        border: transparent;
        float: right;
    }

    .apply_button:hover {
        background-color: #1261A0;
        cursor: pointer;
    }

    .helpTooltip__icon___1XWGN,
    .helpTooltip__icon___1XWGN_read{
        color: #b8c1ca;
        width: 1em;
        height: 1em;
        margin: 4px;
    }

    .helpTooltip__icon___1XWGN_read{
        margin-top: 4px;
    }

    .helpTooltip__icon___1XWGN_first{
        color: #b8c1ca;
        width: 1em;
        height: 1em;
    }

    .checkbox_read{
        padding: 0px 0px 5px 20px;
        float: left;
    }

    label:hover{
        cursor: default;
    }

    ::placeholder{
        color: #DEDEDE;
    }

    .widget_h2,.general_h2{
        font-size: 18px;
        font-weight: 500;
    }

    .list_l1{
        border-top: 1px solid #DEDEDE;
        margin: 30px 20px 0px 0px;
        margin-left: 14%;
    }

    .theme_image{
        width: 50%;
    }

    .welcome_heading{
        margin-left: 8%;
        font-size: 1.5em;
    }

    .first_p,
    .second_p{
        margin-left: 14%;
        font-size: 14px;
    }

    .list_l1 p{
        font-size: 13px;
    }

    input#publisher-id,
    input#first_bc_placement,
    input#mid_placement,
    input#home_placement{
        width: 36%;
    }

    input#first_bc_widget_id,
    input#mid_widget_id,
    input#mid_location_string,
    input#home_widget_id,
    input#home_location_string{
        width: 77%;
    }
    
    label{
        font-weight: normal !important;
    }

    label#pub_id{
        color: #000000;
    }

    input#out_of_content_enabled {
        height: 16px;
        width: 16px;
    }

    input[type=checkbox]:checked::before {
        width: 1.8rem !important;
    }

    input[type=checkbox]:focus {
        outline: none !important;
        outline-offset: 0px !important;
    }

    input[type=checkbox]{
        margin: -5px 0 0;
    }

    #homepage{
        display: none;
    }

    #show-advanced-settings{
        text-decoration: none;
        color: #666666;
        margin-top: 5px;
        cursor: pointer;
        float: left;
        width: 50%;
        font-family: Roboto, Lato, "Hind -apple-system", "Helvetica Neue", sans-serif;
        font-style: italic;
    }

    #advanced-settings-main{
        margin: 10px 0px 0px 10px;
        width: 49%;
    }

    div#mid_article {
        padding-bottom: 100px;
    }

    #mid_css_selector_div{
        display: none;
    }

    input.highlight {
        border: 1px solid orange !important;
    }

    #rightrail-banner{
        border: 1px solid #d4d9df;
        border-radius: 10px;
        background: #FFFACD;
        padding: 10px;
        margin: 0px 100px 0px 10px;
        color: #0f4c81;
    }

    #right-rail{
        padding-top: 10px;
    }

</style>

<?php

// $short_version =strlen(TABOOLA_PLUGIN_VERSION) == 5 ? substr(TABOOLA_PLUGIN_VERSION,0,3) : ""; // E.g. '2.1.0' => '2.1' (else '')

?>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->


<div class="taboola-container">
    <div class="theme_image">
        <img src='<?php echo $this->plugin_url.'img/taboola.png' ?>' style='width:150px;'/>
    </div>

    <h2 style="font-size:1.7em;">Taboola WordPress Plugin 2</h2>

<!-- errors/success message -->

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

<script>
    function setEnabledDisabled(divID, chkToggle) {
        /*
            JS function for form.
            Enables/disables fields for the given section ('divID'), depending on whether 'chkToggle' is checked.
        */

        var applyColor = (chkToggle.checked ? "#000" : "#666");

        // Set all labels in that section ('divID') to the relevant color.
        $(divID).find("label").css("color", applyColor);

        // Disable (/enable) all input fields in that section ('divID'), except for 'chkToggle'.
        // Once done, apply a gray border color.
        $(divID).find("input").not("#" + chkToggle.id).prop("disabled", !chkToggle.checked).css("borderColor", "#ccc");
        $(divID).find("select").not("#" + chkToggle.id).prop("disabled", !chkToggle.checked).css("borderColor", "#ccc");

    }
</script>

<script> 
$(document).ready(function(){
    // On page load:
    if ($('#mid_paragraph_ui_mode').val() == 'Other') {
        $("#mid_css_selector_div").show();
    }

    if ($('#home_enabled').prop("checked") === true) {
        $("#homepage").show();
        var ad = $('#show-advanced-settings');
        ad.text("<< Hide advanced settings");
    }       
});
</script>

<script> 
$(document).ready(function(){
 // On clicking 'Advanced settings'
    $("#show-advanced-settings").click(function() {
        $("#homepage").slideToggle("fast");
        var ad = $('#show-advanced-settings');
        ad.text() == "Show advanced settings >>" ? ad.text("<< Hide advanced settings") : ad.text("Show advanced settings >>");
    });
});
</script>


<script>
$(document).ready(function(){

    // On selecting an item in the dropdown:
    $('#mid_paragraph_ui_mode').on('change', function(e){
        e.preventDefault();
        if ( this.value == 'Other')
        {
            $("#mid_css_selector_div").show();

            // Highlight relevant fields:
            $("#mid_location_string, #mid_occurrence").addClass('highlight');
            setTimeout(() => $("#mid_occurrence, #mid_location_string").removeClass('highlight'), 1500);
            
        }
        else
        {
            $("#mid_location_string").val("p"); // Set it back to the default value of 'p'
            $("#mid_css_selector_div").hide();

            // Highlight the 'occurrence' field:
            $("#mid_occurrence").addClass('highlight');
            setTimeout(() => $("#mid_occurrence").removeClass('highlight'), 1000);            
        }
    });

});
</script> 



<!-- Welcome Massage -->

    <div class="publisher_welcome_massage">
        <h2 class="welcome_heading">Welcome to Taboola WordPress Plugin 2!</h2>
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
            <div class="pub_id">
                <input id="publisher-id" type="text" name="publisher_id" placeholder="publisher" value="<?php echo !empty($settings->publisher_id) ? htmlspecialchars($settings->publisher_id) : '' ?>"/>
            </div>
            <div class="statement">
                <label style="color: #000000;">Don't have an account with taboola?</label>
                <a style='float: inherit;' class='request_link' href='http://taboola.com/contact' target='_blank'>Contact us</a>
                <label style="margin-left: -9px; color: #000000;">to get started.</label>
            </div>
        </div>


<!-- Below Article Widget -->
    <h2 class="widget_h2">Taboola Units</h2>
    <div id="below_article" class="settings_block widget_settings_block">
          <div class="switch_style">
            <label class="switch">
              <input id="first_bc_enabled" type="checkbox" <?php echo !empty($settings->first_bc_enabled) ? "checked='checked'" : "" ?> onclick="setEnabledDisabled('#below_article', this)" name="first_bc_enabled" />
              <span class="slider round"></span>
            </label>
            <b style="font-size:15px;">Below-article</b>
          </div>
          <div class="label_below">
            <div class="mode_style">
              <label id="first_bc_widget_id_label" style="float:left;">Mode (Widget ID):</label>
              <div class="tooltip">
                <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                  <g fill="none" fill-rule="evenodd">
                    <path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                  </g>
                </svg>
                <div>Your <i>below-article</i> Mode (Widget ID), as provided by Taboola. </div>
              </div>
            </div>
            <div class="placement_style">
              <label id="first_bc_placement_label" style="float:left;">Placement Name:</label>
              <div class='tooltip'>
                <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                  <g fill="none" fill-rule="evenodd">
                    <path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                  </g>
                </svg>
                <div>Your <i>below-article</i> Placement Name, as provided by Taboola. <br>
                  <br> When upgrading from v1, fill in 'below-article'. <br>
                  <br> For more information, reach out via our <a href="https://developers.taboola.com/web-integrations/discuss" target='_blank'>Online Community</a>, or contact Taboola Support.
                </div>
              </div>
            </div>
          </div>
          <div class="input_below">
            <div class="widget_below">
              <input id="first_bc_widget_id" type="text" value="<?php echo !empty($settings->first_bc_widget_id) ? htmlspecialchars($settings->first_bc_widget_id) : "" ?>" name="first_bc_widget_id" placeholder="Widget ID" />
            </div>
            <div class="placement_below">
              <input type="text" id="first_bc_placement" value="<?php echo !empty($settings->first_bc_placement) ? htmlspecialchars($settings->first_bc_placement) : "" ?>" name="first_bc_placement" placeholder="Placement Name" />
            </div>
          </div>

          <!-- Below Article Widget -->
          <!-- Advanced Settings -->
          <br />
          <div class='location_section'>
            <div class='checkbox_read'>
              <input id="out_of_content_enabled" type="checkbox" <?php echo !empty($settings->out_of_content_enabled) ? "checked='checked'" : "" ?> name="out_of_content_enabled" />
              <label id="out_of_content_enabled_label">Place the feed/widget just after the article container (required for <b>Read More</b>)</label>
            </div>
            <div class='tooltip'>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN_read">
                <g fill="none" fill-rule="evenodd">
                  <path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                </g>
              </svg>
              <div>
                Required in order for Taboola to activate <i>Read More</i>.<br><br>
                Read More buttons can boost audience engagement significantly, especially on mobile devices.<br><br>
                For more information, see the <a href="https://developers.taboola.com/web-integrations/docs/wordpress-plugin-managing-placements#below-article-widget" target='_blank'>Taboola Dev Center</a>.</div>
            </div>
          </div>
        </div>
<!-- Advanced Settings -->

<!-- Mid Article Widget -->

<div id="mid_article" class="settings_block widget_settings_block">
            <div class="switch_style">
                <label class="switch">
                <input id="mid_enabled" type="checkbox" <?php echo !empty($settings->mid_enabled) ? "checked='checked'" : "" ?> onclick="setEnabledDisabled('#mid_article', this)" name="mid_enabled"/>
                    <span class="slider round"></span>
                </label>
                <b style="font-size:15px;">Mid-article</b>
            </div>

            <div>
                <div class="mode_style_mid"><label id="mid_widget_id_label" style="float:left;">Mode (Widget ID):</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                             </g>
                         </svg>
                        <div>Your <i>mid-article</i> Mode (Widget ID), as provided by Taboola.</div>
                    </div>
                </div>
                <div class="placement_style_mid"><label id="mid_placement_label" style="float:left;">Placement Name:</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                             </g>
                         </svg>
                        <div>Your <i>mid-article</i> Placement Name, as provided by Taboola.</div>            
                    </div>
                </div>
            </div>
            <div>
                <div class="widget_below_mid">
                    <input id="mid_widget_id" type="text" value="<?php echo !empty($settings->mid_widget_id) ? htmlspecialchars($settings->mid_widget_id) : "" ?>" name="mid_widget_id" placeholder="Widget ID" />
                </div>
                <div class="placement_below_mid">
                    <input id = "mid_placement" type="text" value="<?php echo !empty($settings->mid_placement) ? htmlspecialchars($settings->mid_placement) : "" ?>" name="mid_placement" placeholder="Placement Name" />
                </div>
            </div>

            <div id="mid_occurrence_div">
                <div class="mode_style_mid_selector"><label id="mid_location_string_label" style="float:left;">Position the widget below:</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                         <div>
                            Enter the paragraph number to target. <br>
                            E.g. To target the <b>5th</b> paragraph, fill in <i>5</i>.<br><br>
                            ----<br>
                            <i>Advanced</i> - to use a <b>custom</b> selector:<br><br>
                            1) Choose 'Other'. <br>
                            2) Fill in a selector (<i>right</i>), and an occurrence (<i>left</i>).
                        </div>
                    </div>
                </div>
                <div class="placement_below_mid_occurrence">
                    <select name="mid_paragraph_ui_mode" id="mid_paragraph_ui_mode">
                        <option value="Paragraph" <?php echo (!empty($settings->mid_paragraph_ui_mode) && $settings->mid_paragraph_ui_mode == "Paragraph") ? "selected" : ""?> >Paragraph</option>
                        <option value="Other" <?php echo (!empty($settings->mid_paragraph_ui_mode) && $settings->mid_paragraph_ui_mode == "Other") ? "selected" : ""?>>Other</option>
                    </select>&nbsp;
                    <input type="number" id="mid_occurrence" value="<?php echo !empty($settings->mid_location_string_occurrence) ? $settings->mid_location_string_occurrence : "1" ?>" name="mid_location_string_occurrence" placeholder="" style="width:65px;">
                </div>

            </div>
            <div id="mid_css_selector_div">

                <div class="placement_style_mid_occurrence"><label id="mid_occurrence_label" style="float:left;">CSS selector :</label>
                    <div class='tooltip'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                         <div>
                            <i>Advanced</i> - fill in a selector to target - e.g.:<br><br>
                            <i>#my-id</i> - to target an <i>ID</i> of "my-id".<br>
                            <i>.my-class</i> - to target a <i>class</i> of "my-class".
                        </div>
                    </div>
                </div>
                <div class="widget_below_mid_selector">
                    <input id = "mid_location_string" type="text" value="<?php echo !empty($settings->mid_location_string) ? htmlspecialchars($settings->mid_location_string) : "p" ?>" name="mid_location_string" placeholder="E.g. p for paragraph" />
                </div>
            </div>
    </div>
<!-- Mid Article Widget -->

<!-- Right Rail Article Widget -->

<div id="right-rail" class="settings_block widget_settings_block">
    <label id="right-rail-label"><b style="font-size:15px;margin-left: 10px;">Right Rail (sidebar)</b> </label>
    <div style="font-size:14px;margin: 5px 10px 10px 10px;">You can insert a <b>Taboola</b> unit in your website <b>sidebar</b> (if your <b>WordPress</b> theme provides one):</div>

    <div id="rightrail-banner">
        1. In the sidebar menu (left) select <b>Appearance > Widgets</b> - or click <a href="widgets.php" target="_blank" style="text-decoration:underline;color: #0176D3">here</a> </br>
        2. Click on the + icon (top, left) and type in <b>"Taboola".</b></br>   
        3. Drag the <b>Taboola</b> widget to the desired position in the sidebar (right).</br>  
        4. Enter the <b>Widget ID (Mode)</b>, as provided by Taboola.</br> 
        5. Click on <b>Update</b> (top, right) to save your changes.</br>
        6. Browse to your website and verify that the <b>right-rail (sidebar)</b> unit displays correctly.</br>
    </div>
</div>

<!-- Right Rail Article Widget -->

<!-- Homepage mid widget -->


<div id="homepage" class="settings_block widget_settings_block">
        <div class="switch_style">
                <label class="switch">
                <input id="home_enabled" type="checkbox" <?php echo !empty($settings->home_enabled) ? "checked='checked'" : "" ?> onclick="setEnabledDisabled('#homepage', this)" name="home_enabled"/>
                <span class="slider round"></span>
                </label>
                <div>
                    <b style="font-size:15px;float: left;">Homepage (front page)</b>
                    <div class='tooltip'>
                            <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                    <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                    </g>
                            </svg>
                            <div>Settings will be applied to the page that you marked as your 'front page'.</div>
                        </div>
                    </div>
                </div>

            <div>
                <div class="mode_style_home"><label id="home_widget_id_label" style="float:left;">Mode (Widget ID):</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                        <div>Your <i>homepage</i> Mode (Widget ID), as provided by Taboola.</div>
                    </div>
                </div>
                <div class="placement_style_home"><label id="home_placement_label" style="float:left;">Placement Name:</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                        <div>Your <i>homepage</i> Placement Name, as provided by Taboola.</div>            
                    </div>
                </div>
            </div>
            <div>
                <div class="widget_below_home">
                    <input id="home_widget_id" type="text" value="<?php echo !empty($settings->home_widget_id) ? htmlspecialchars($settings->home_widget_id) : "" ?>" name="home_widget_id" placeholder="Widget ID" />
                </div>
                <div class="placement_below_home">
                    <input id = "home_placement" type="text" value="<?php echo !empty($settings->home_placement) ? htmlspecialchars($settings->home_placement) : "" ?>" name="home_placement" placeholder="Placement Name" />
                </div>
            </div>

            <div class='heading_mid_home'><label style="float:left;">Position the widget immediately below the element:</label>
            <div class='tooltip'>
                    <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                            <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                            </g>
                    </svg>
                    <div>The widget will be placed <i>just beneath</i> this element.<br><br>
                            To target an element, 2 pieces of information are needed:<br><br>
                            i) A CSS selector - e.g. <i>p</i> (for paragraph).<br>
                            ii) An occurrence - e.g. 1st, 2nd, 3rd, etc.<br><br>
                            For more information, see the <a href="https://developers.taboola.com/web-integrations/docs/wordpress-plugin-managing-placements" target='_blank'>Taboola Dev Center</a>.
                </div>
            </div>
        </div>


        <div class="home_occurrence">
                <div class="mode_style_home_selector"><label id="home_location_string_label" style="float:left;">CSS selector :</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                         <div>
                            The element to target - e.g.:<br><br>
                            <i>section</i> - to target a <i>section</i>.<br>
                            <i>#my-id</i> - to target an <i>ID</i> of "my-id".<br>
                            <i>.my-class</i> - to target a <i>class</i> of "my-class".
                        </div>
                    </div>
                </div>
                <div class="placement_style_home_occurrence"><label id="home_occurrence_label" style="float:left;">Occurrence :</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                         <div>For a <b>non-unique</b> selector - e.g. <i>section</i> - fill in the <b>occurrence</b> to target.<br><br>
                        E.g. To target the <b>2nd</b> section, fill in <i>2</i>. <br><br>
                        For a <b>unique</b> selector - e.g. <i>#my-id</i> - leave the default value of '1'.</div>           
                    </div>
                </div>
            </div>
            <div class="home_placement">
                <div class="widget_below_home_selector">
                    <input id = "home_location_string" type="text" value="<?php echo !empty($settings->home_location_string) ? htmlspecialchars($settings->home_location_string) : "" ?>" name="home_location_string" placeholder="E.g. p for paragraph" /></td>
                </div>
                <div class="placement_below_home_Occurrence">
                    <input type="number" id="home_occurrence" value="<?php echo !empty($settings->home_location_string_occurrence) ? $settings->home_location_string_occurrence : "1" ?>" name="home_location_string_occurrence" placeholder="" style="width:65px;">
                </div>
            </div>
</div>
<div id="advanced-settings-main">
    <a id="show-advanced-settings">Show advanced settings >></a>
    <div class="change_button">
        <input class='apply_button' type="submit" value="Apply Changes"/>
    </div>
</div>

<!-- Homepage mid widget -->

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

    // Set enabled/disabled appearance upon page load
    // (Function is defined earlier on the page.)
    setEnabledDisabled('#below_article', document.getElementById("first_bc_enabled"));
    setEnabledDisabled('#mid_article', document.getElementById("mid_enabled"));
    setEnabledDisabled('#homepage', document.getElementById("home_enabled"));

</script>

<script>

    // Fadeouts for error/success messages
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 5000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 8000);

    // PC
    // window.onload = function(){
    //     document.forms['install_log'].submit()
    // }

</script>