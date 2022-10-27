<style>
    .taboola-container {
        padding: 20px;
        padding-left: 0;
        width: 50%;
        font-size: 14px;
    }
    table {
        width: 73%;
        margin-left: 10px;
    }

    .table3{
        width: 58%;
    }

    .publisher_id_style, .below_article_style, .mid_article_style, .home_article_style{
        background: #fff;
        border: 1px solid #999;
        border-radius: 8px;
        margin-top: 10px;
    }

    .below_article_style, .mid_article_style, .home_article_style{
        padding-bottom: 15px;
    }

    .switch_style{
        margin : 10px;
    }

    .style_box1{
        padding: 12px 0px 5px 12px;
    }

    .pub_id{
        margin: 10px;
        width: 400px;
    }

    .widget_below, .widget_below_mid, .widget_below_mid_selector, .widget_below_home, .widget_below_home_selector{
        width: 50%;
        float: left;
        padding: 0px 0px 0px 10px;
    }

    .statement{
        margin: 10px;
    }
    
    .mode_style, .mode_style_mid, .mode_style_mid_selector, .mode_style_home, .mode_style_home_selector{
        width: 50%;
        padding: 0px 0px 3px 10px;
        float:left;
    }

    .placement_style, .placement_style_mid, .placement_style_mid_occurrence, .placement_style_home_occurrence,.placement_style_home {
        padding: 0px 0px 8px 10px;
    }

    .mid_occurrence, .mid_placement{
        width: 100%;
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
        right: 0;
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

    table td img {
        position: relative;
        top: 3px;
        margin-left: 5px;
    }

    table input {
        width: 180px;
    }
    input[type='text'] {
        border-radius: 3px;
    }
    hr {
        margin-top: 15px;
        margin-bottom: 15px;
        border-bottom: none;
    }

    input[type='submit']{
        float: right;
    }

    .request_link {
        float: right;
        margin-right: 10px;
        line-height: 26px;
    }

    .tooltip div { /* hide and position tooltip */
        background-color: black;
        color: white;
        border-radius: 5px;
        opacity: 0;
        position: absolute;
        width: 300px;
        padding: 10px;
        margin-left: 30px;
    }

    .tooltip_mid div{
        background-color: black;
        color: white;
        border-radius: 5px;
        opacity: 0;
        position: absolute;
        width: 400px;
        padding: 10px;
        margin-left: 270px;
    }

    .tooltip_mid:hover div{
        visibility: visible;
        opacity: 1;
    }

    .tooltip:hover div { /* display tooltip on hover */
        opacity: 1;
    }

    /* p.heading_mid, p.heading_mid_home{
        width: 440px !important;
    } */

    .label-success {
        background: #d2f2d4;
        border: 1px solid #d2f2d4;
        border-radius: 10px;
        padding: 10px 30px 20px 10px;
        font-size: 14px;
        display: block;
        margin-top: 10px;
        color: green;
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
    }

    .toggle_icon{
        background: url(<?php echo $this->plugin_url.'img/arrow_right_32.png' ?>) no-repeat;
        background-size:contain;
        width:24px;
        height:24px;
        display:inline-block;
        vertical-align: middle;
    }

    .toggle_icon_on{
        -ms-transform: rotate(90deg); /* IE 9 */
        -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
        transform: rotate(90deg);
    }
    .apply_button{
        margin-top: 20px !important;
        background-color: blue !important;
        color: #fff !important;
    }

</style>

<div class="taboola-container">
    <img src='<?php echo $this->plugin_url.'img/taboola.png' ?>' style='width:150px;'/>

<!-- errors/success message -->

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && count($taboola_errors) == 0){
        echo "<div class='label-success'>";
        echo "<span class='label-success'>Your changes have been made! You can now see them on your site</span>";
        echo "</div>";
    }
    
    if(count($taboola_errors) > 0){
        echo "<div class='label-error'>";
            echo "<h3 style='color:red;'>Missing or incorrect information</h3>";
            echo "<p>The following fields are missing information.</p>";
            for($i = 0; $i < count($taboola_errors); $i++){
                echo "<span>".$taboola_errors[$i]."</span>"."<br>";
            }
        echo "</div>";
    }

    ?>

<!-- errors/success message -->

    <h2>General Settings</h2>

    <form method="POST">
        <div class="publisher_id_style">
            <div class="style_box1">
                <div class='tooltip'>Publisher ID : 
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>Please contact your Taboola representative to receive the Publisher ID </div>
                </div>
            </div>
            <div class="pub_id">
                <input type="text" name="publisher_id" placeholder="publisher" value="<?php echo !empty($settings->publisher_id) ? htmlspecialchars($settings->publisher_id) : '' ?>"/>
            </div>
            <div class="statement">
                Don't have an account with taboola?
                <a style='float: inherit; margin-left:5px;' class='request_link' href='http://taboola.com/contact' target='_blank'>Contact us</a>to get started
            </div>
        </div>
<!-- Below Article Widget -->
    <h2>Widget Settings</h2>
        <div class="below_article_style">
            <div class="switch_style">
                <label class="switch">
                    <input id="first_bc_enabled" type="checkbox" <?php echo !empty($settings->first_bc_enabled) ? "checked='checked'" : "" ?> name="first_bc_enabled"/>
                    <span class="slider round"></span>
                </label>
                <b>Below Article Widget</b>
            </div>
            <div class="label_below">
                <div class="mode_style">
                    <div class='tooltip'> Mode (Widget ID):
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div>Please contact your Taboola representative to receive the Widget ID</div>
                    </div>
                </div>

                <div class="placement_style"> 
                    <div class='tooltip'> Placement Name:
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div>The placement name, <b>as provided by taboola</b><br><br>
                            when upgrading from the old <b>taboola plug-in</b>, use: <br>
                            <b>below-article</b> <br><br>
                            For assistance, consult with <b>Taboola Support</b>.  
                        </div>            
                    </div>
                </div>

            </div>

            <div class="input_below">
                <div class="widget_below">
                    <input id ="first_bc_widget_id" type="text" value="<?php echo !empty($settings->first_bc_widget_id) ? htmlspecialchars($settings->first_bc_widget_id) : "" ?>" name="first_bc_widget_id" placeholder="Widget ID" />
                </div>

                <div class="placement_below">
                    <input type="text" id="first_bc_widget_placement" value="<?php echo !empty($settings->first_bc_widget_placement) ? htmlspecialchars($settings->first_bc_widget_placement) : "" ?>" name="first_bc_widget_placement" placeholder="Placement Name" />
                </div>
            </div>

<!-- Below Article Widget -->

<!-- Advanced Settings -->
<br/>

    <table class='location_section'>
        <tr>
            <td colspan="2"> <div class='checkbox'>
                    <input id="out_of_content_enabled" type="checkbox" <?php echo !empty($settings->out_of_content_enabled) ? "checked='checked'" : "" ?> name="out_of_content_enabled"/>
                    Place the widget just after the article (required for Read More)
                </div></td>
            <td class='tooltip'>
                <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                <div>This may be disabled if your website doesn't use Taboola's "Read more" feature, or if the widget is not placed correctly. DO NOT disable it if your widget includes "Read More"</div>
            </td>
        </tr>
    </table>

    </div>
<!-- Advanced Settings -->

<!-- Mid Article Widget -->

<div class="mid_article_style">
            <div class="switch_style">
                <label class="switch">
                <input id="second_bc_enabled" type="checkbox" <?php echo !empty($settings->second_bc_enabled) ? "checked='checked'" : "" ?> name="second_bc_enabled"/>
                    <span class="slider round"></span>
                </label>
                <b>Mid Article Widget</b>
            </div>

            <div>
                <div class="mode_style_mid">
                    <div class='tooltip'> Mode (Widget ID):
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div>Please contact your Taboola representative to receive the Widget ID</div>
                    </div>
                </div>
                <div class="placement_style_mid"> 
                    <div class='tooltip'> Placement Name:
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div>Please contact your Taboola representative to receive placement name e.g. "Mid Article Thumbnails"</div>            
                    </div>
                </div>
            </div>
            <div>
                <div class="widget_below_mid">
                    <input id="second_bc_widget_id" type="text" value="<?php echo !empty($settings->second_bc_widget_id) ? htmlspecialchars($settings->second_bc_widget_id) : "" ?>" name="second_bc_widget_id" placeholder="Widget ID" />
                </div>
                <div class="placement_below_mid">
                    <input id = "second_bc_widget_placement" type="text" value="<?php echo !empty($settings->second_bc_widget_placement) ? htmlspecialchars($settings->second_bc_widget_placement) : "" ?>" name="second_bc_widget_placement" placeholder="Placement Name" />
                </div>
            </div>

            <table class='table3'>
            <tr><td><p class='heading_mid_home'><b>Position the widget immediately below the element:</b></p></td>
            <td class='tooltip_mid'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>The Widget will be placed just beneath the targeted element. To target an element, enter 2 buts of information: <br><br>
                    
                    i) A CSS Selector. <br>
                    ii) An Occurrence (1st, 2nd, 3rd etc) <br><br>
                
                    Example 1: <br><br>

                    To Position the widget beneaththe 5th paragraph: <br>

                    CSS Selector = p, and occurrence = 5 <br><br>

                    Example 2: <br><br>

                    To position the widget beneath the first element with <br>
                    <b>id = "my-id"</b>, enter: <br><br>

                    CSS Selector= <b>#my-id</b>, and occurrnce = <b>1</b> <br>

                    ---- <br>

                    For assistance, reach out via our <a href="https://developers.taboola.com/web-integrations/discuss" target="_blank">Community page.</a>

                </div>
                </td>
            </tr>
        </table>

            <div class="mid_occurrence">
                <div class="mode_style_mid_selector">
                    <div class='tooltip'> CSS selector :
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div><b>P</b> for <b>paragraph, #my-id</b> for an element with <b>id="my-id"</b>, etc.</div>
                    </div>
                </div>
                <div class="placement_style_mid_occurrence"> 
                    <div class='tooltip'> Occurrence :
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div><b>5</b> for the <b>5th</b> occurrence, 1 for the 1st occurrence, etc. <br>
                        (if left blank, default = 1)</div>            
                    </div>
                </div>
            </div>
            <div class="mid_placement">
                <div class="widget_below_mid_selector">
                    <input id = "location_mid_string" type="text" value="<?php echo !empty($settings->location_mid_string) ? htmlspecialchars($settings->location_mid_string) : "" ?>" name="location_mid_string" placeholder="E.g. p for paragraph" />
                </div>
                <div class="placement_below_mid_Occurrence">
                    <input type="number" id="para_num" value="<?php echo !empty($settings->mid_widget_paragraph) ? $settings->mid_widget_paragraph : "1" ?>" name="mid_widget_paragraph" placeholder="" style="width:65px;">
                </div>
            </div>
    </div>
<!-- Mid Article Widget -->

<!-- Homepage mid widget -->

<div class="home_article_style">
        <div class="switch_style">
                <label class="switch">
                <input id="home_widget_enabled" type="checkbox" <?php echo !empty($settings->home_widget_enabled) ? "checked='checked'" : "" ?> name="home_widget_enabled"/>
                <span class="slider round"></span>
                </label>
                <b>Front-page Widget</b>
            </div>

            <div>
                <div class="mode_style_home">
                    <div class='tooltip'> Mode (Widget ID):
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div>Please contact your Taboola representative to receive the Widget ID</div>
                    </div>
                </div>
                <div class="placement_style_home"> 
                    <div class='tooltip'> Placement Name:
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div>Please contact your Taboola representative to receive placement name e.g. "Mid Homepage Thumbnails"</div>            
                    </div>
                </div>
            </div>
            <div>
                <div class="widget_below_home">
                    <input id="home_bc_widget_id" type="text" value="<?php echo !empty($settings->home_bc_widget_id) ? htmlspecialchars($settings->home_bc_widget_id) : "" ?>" name="home_bc_widget_id" placeholder="Widget ID" />
                </div>
                <div class="placement_below_home">
                    <input id = "home_bc_widget_placement" type="text" value="<?php echo !empty($settings->home_bc_widget_placement) ? htmlspecialchars($settings->home_bc_widget_placement) : "" ?>" name="home_bc_widget_placement" placeholder="Placement Name" />
                </div>
            </div>

        <table class='table3'>
            <tr><td><p class='heading_mid_home'><b>Position the widget immediately below the element:</b></p></td>
            <td class='tooltip_mid'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>The Widget will be placed just beneath the targeted element. To target an element, enter 2 buts of information: <br><br>
                    
                    i) A CSS Selector. <br>
                    ii) An Occurrence (1st, 2nd, 3rd etc) <br><br>
                
                    Example 1: <br><br>

                    To Position the widget beneaththe 5th paragraph: <br>

                    CSS Selector = p, and occurrence = 5 <br><br>

                    Example 2: <br><br>

                    To position the widget beneath the first element with <br>
                    <b>id = "my-id"</b>, enter: <br><br>

                    CSS Selector= <b>#my-id</b>, and occurrnce = <b>1</b> <br>

                    ---- <br>

                    For assistance, reach out via our <a href="https://developers.taboola.com/web-integrations/discuss" target="_blank">Community page.</a>

                </div>
                </td>
            </tr>
        </table>


        <div class="home_occurrence">
                <div class="mode_style_home_selector">
                    <div class='tooltip'> CSS selector :
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div><b>P</b> for <b>paragraph, #my-id</b> for an element with <b>id="my-id"</b>, etc.</div>
                    </div>
                </div>
                <div class="placement_style_home_occurrence"> 
                    <div class='tooltip'> Occurrence :
                        <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                        <div><b>5</b> for the <b>5th</b> occurrence, 1 for the 1st occurrence, etc. <br>
                        (if left blank, default = 1)</div>            
                    </div>
                </div>
            </div>
            <div class="home_placement">
                <div class="widget_below_home_selector">
                    <input id = "location_mid_string_home" type="text" value="<?php echo !empty($settings->location_mid_string_home) ? htmlspecialchars($settings->location_mid_string_home) : "" ?>" name="location_mid_string_home" placeholder="E.g. p for paragraph" /></td>
                </div>
                <div class="placement_below_home_Occurrence">
                    <input type="number" id="para_num_home" value="<?php echo !empty($settings->mid_widget_paragraph_home) ? $settings->mid_widget_paragraph_home : "1" ?>" name="mid_widget_paragraph_home" placeholder="" style="width:65px;">
                </div>
            </div>
</div>
<!-- Homepage mid widget -->

        <input class='button-secondary apply_button' type="submit" value="Apply Changes ✔"/>
        <!--         <a class='request_link' href=' http://taboola.com/contact' target='_blank'>Request Widget</a> -->
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

    // function sync_checkboxes(){
    //         if(jQuery('#first_bc_enabled').attr("checked")){
    //             jQuery('#second_bc_enabled').attr('disabled',false)
    //         } else {
    //             jQuery('#second_bc_enabled').attr('checked', false);
    //             jQuery('#second_bc_enabled').attr('disabled',true)
    //         }
    //     }


    function sync_checkboxes(){
        if(document.getElementById("first_bc_enabled").checked){
            document.getElementById("first_bc_widget_id").disabled = false;
            document.getElementById("first_bc_widget_placement").disabled = false;
            document.getElementById("out_of_content_enabled").disabled = false;
        }
        else{
            document.getElementById("first_bc_widget_id").disabled = true;
            document.getElementById("first_bc_widget_placement").disabled = true;
            document.getElementById("out_of_content_enabled").disabled = true;
        }
    }

    function sync_checkboxes1(){ 
        if(document.getElementById("second_bc_enabled").checked){
            document.getElementById("second_bc_widget_id").disabled = false;
            document.getElementById("second_bc_widget_placement").disabled = false;
            document.getElementById("location_mid_string").disabled = false;
            document.getElementById("para_num").disabled = false;
        }else{
            document.getElementById("second_bc_widget_id").disabled = true;
            document.getElementById("second_bc_widget_placement").disabled = true;
            document.getElementById("location_mid_string").disabled = true;
            document.getElementById("para_num").disabled = true;
        }
    }

    function sync_checkboxes_home(){
        if(document.getElementById("home_widget_enabled").checked){
            document.getElementById("home_bc_widget_id").disabled = false;
            document.getElementById("home_bc_widget_placement").disabled = false;
            document.getElementById("location_mid_string_home").disabled = false;
            document.getElementById("para_num_home").disabled = false;
        }else{
            document.getElementById("home_bc_widget_id").disabled = true;
            document.getElementById("home_bc_widget_placement").disabled = true;
            document.getElementById("location_mid_string_home").disabled = true;
            document.getElementById("para_num_home").disabled = true;
        }
    }


    jQuery('#first_bc_enabled').change(sync_checkboxes);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 6000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 6000);
    sync_checkboxes();

    jQuery('#second_bc_enabled').change(sync_checkboxes1);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 6000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 6000);
    sync_checkboxes1();

    jQuery('#home_widget_enabled').change(sync_checkboxes_home);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 6000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 6000);
    sync_checkboxes_home();

    jQuery('.toggle_intercept').click(function(){
        if (jQuery('.location_section').fadeToggle != undefined){
            jQuery('.location_section').fadeToggle('fast');
        }else{
            jQuery('.location_section').toggle();
        }
        jQuery('.toggle_icon').toggleClass('toggle_icon_on');
    });

    window.onload = function(){
        document.forms['install_log'].submit()

    }

</script>