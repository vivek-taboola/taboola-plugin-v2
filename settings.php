<style>
    .taboola-container {
        padding: 20px;
        padding-left: 0;
        width: 450px;
        font-size: 14px;
    }
    table {
        width: 450px;
        margin-left: 20px;
    }

    table td{
        padding: 10px 0px 10px 0px;
    }

    table td img {
        position: relative;
        top: 3px;
        margin-left: 5px;
    }
        /*    table {
                padding: 12px;
                border: 3px solid #467FD7;
                border-radius: 5px;
                margin-top: 10px;
                width: 100%;
            }*/
    table tr td:first-child {
        width: 220px;
    }
    table input {
        width: 100%;
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
    .checkbox {
        margin-bottom: 10px;
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

    td.heading_mid{
        width: 400px !important;
    }

    td.input_mid {
        width: 375px;
    }

    .label-success {
        font-size: 17px;
        display: block;
        margin-top: 10px;
        color: green;
    }
    .label-error {
        font-size: 17px;
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
    }

</style>

<div class="taboola-container">
    <img src='<?php echo $this->plugin_url.'img/taboola.png' ?>' style='width:200px;'/>
    <hr>

    <form method="POST">
        <table>
            <tr>
                <td><b>Publisher ID</b></td>
                <td>
                    <input type="text" name="publisher_id" placeholder="publisher" value="<?php echo !empty($settings->publisher_id) ? htmlspecialchars($settings->publisher_id) : '' ?>"/>
                </td>
                <td class='tooltip'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>Please contact your Taboola representative to receive the Publisher ID </div>
                </td>
            </tr>
            <tr>
                <td colspan='2' style='line-height: 26px; font-size: 13px;'>
                    Don't have a Publisher ID?
                    <a style='float: inherit; margin-left:5px;' class='request_link' href='http://taboola.com/contact' target='_blank'>Contact Taboola</a>
                </td>
            </tr>
        </table>

<!-- Below Article Widget -->

        <hr style='margin-bottom: 25px; margin-top: 5px;'></hr>

        <div class='checkbox'>
            <input id="first_bc_enabled" type="checkbox" <?php echo !empty($settings->first_bc_enabled) ? "checked='checked'" : "" ?> name="first_bc_enabled"/>
            <b>Below Article Widget</b>
        </div>
        <table>
            <tr>
                <td>Mode (Widget ID)</td>
                <td>
                    <input id ="first_bc_widget_id" type="text" value="<?php echo !empty($settings->first_bc_widget_id) ? htmlspecialchars($settings->first_bc_widget_id) : "" ?>" name="first_bc_widget_id" placeholder="Widget ID" />
                </td>
                <td class='tooltip'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>Please contact your Taboola representative to receive the Widget ID</div>
                </td>
            </tr>
    
            <tr>
                <td>Placement Name</td>
                <td>
                    <input type="text" id="first_bc_widget_placement" value="<?php echo !empty($settings->first_bc_widget_placement) ? htmlspecialchars($settings->first_bc_widget_placement) : "" ?>" name="first_bc_widget_placement" placeholder="Placement Name" />
                </td>
                <td class='tooltip'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>The placement name, <b>as provided by taboola</b><br><br>
                    when upgrading from the old <b>taboola plug-in</b>, use: <br>
                    <b>below-article</b> <br><br>
                    For assistance, consult with <b>Taboola Support</b>.              
                </div>
                </td>
            </tr>

        </table>

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
   
<!-- Advanced Settings -->

<!-- Mid Article Widget -->

<hr style='margin-bottom: 25px; margin-top: 5px;'></hr>
        <div class='checkbox'>
            <input id="second_bc_enabled" type="checkbox" <?php echo !empty($settings->second_bc_enabled) ? "checked='checked'" : "" ?> name="second_bc_enabled"/>
            <b>Mid Article Widget</b>
        </div>

        <table>
            <tr>
                <td>Mode (Widget ID)</td>
                <td>
                    <input id="second_bc_widget_id" type="text" value="<?php echo !empty($settings->second_bc_widget_id) ? htmlspecialchars($settings->second_bc_widget_id) : "" ?>" name="second_bc_widget_id" placeholder="Widget ID" />
                </td>
                <td class='tooltip'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>Please contact your Taboola representative to receive the Widget ID</div>
                </td>
            </tr>
          
            <tr>
                <td>Placement Name</td>
                <td>
                    <input id = "second_bc_widget_placement" type="text" value="<?php echo !empty($settings->second_bc_widget_placement) ? htmlspecialchars($settings->second_bc_widget_placement) : "" ?>" name="second_bc_widget_placement" placeholder="Placement Name" />
                </td>
                <td class='tooltip'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div>Please contact your Taboola representative to receive placement name</div>
                </td>
            </tr>

        </table>

        <table>
            <tr><td class='heading_mid'><b>Position the widget immediately below the element:</b></td>
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

            <tr>
                <td>HTML element / CSS selector: </td>
                <td class='input_mid'><input id = "location_mid_string" type="text" value="<?php echo !empty($settings->location_mid_string) ? htmlspecialchars($settings->location_mid_string) : "" ?>" name="location_mid_string" placeholder="P for paragraph, #my-id for an element with id='my-id, etc.'" /></td>
                <td class='tooltip'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div><b>P</b> for <b>paragraph, #my-id</b> for an element with <b>id="my-id"</b>, etc.</div>
                </td>
            </tr>

            <tr>
            <td>Occurrence: </td>
            <td>
                    <input type="number" id="para_num" value="<?php echo !empty($settings->mid_widget_paragraph) ? $settings->mid_widget_paragraph : "1" ?>" name="mid_widget_paragraph" placeholder="" style="width:65px;">
            </td>
            <td class='tooltip'>
                    <img src='<?php echo $this->plugin_url.'img/question-mark.png' ?>'/>
                    <div><b>5</b> for the <b>5th</b> occurrence, 1 for the 1st occurrence, etc. <br>
                    (if left blank, default = 1)
                </div>
                </td>
            </tr>

        </table>

<!-- Mid Article Widget -->

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

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && count($taboola_errors) == 0){
        echo "<span class='label-success'>Your changes have been made! You can now see them on your site</span>";
    }

    if(count($taboola_errors) > 0){
        for($i = 0; $i < count($taboola_errors); $i++){
            echo "<span class='label-error'>".$taboola_errors[$i]."</span>";
        }
    }
    ?>
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
    

    jQuery('#first_bc_enabled').change(sync_checkboxes);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 6000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 6000);
    sync_checkboxes();

    jQuery('#second_bc_enabled').change(sync_checkboxes1);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 6000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 6000);
    sync_checkboxes1();

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