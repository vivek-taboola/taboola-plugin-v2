<style>
    .taboola-container {
        padding: 20px;
        padding-left: 0;
        font-size: 14px;
    }

    .publisher_id_style, .below_article_style, .mid_article_style, .home_article_style{
        background: #fff;
        border: 1px solid #999;
        border-radius: 8px;
        margin-top: 10px;
        width: 50%;
    }

    .publisher_welcome_massage{
        float: right;
        width: 36%;
        padding: 20px 10px 10px 0px;
        margin: 47px 6% 0 0;
        background: #FFFACD;
        border: 1px solid #999;
        border-radius: 20px;
    }

    .below_article_style, .mid_article_style, .home_article_style{
        padding-bottom: 15px;
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
        padding: 0px 0px 0px 20px;
    }
    
    .mode_style, .mode_style_mid, .mode_style_mid_selector, .mode_style_home, .mode_style_home_selector{
        width: 50%;
        padding: 0px 0px 3px 20px;
        float:left;
    }

    .placement_style, .placement_style_mid, .placement_style_mid_occurrence, .placement_style_home_occurrence,.placement_style_home {
        padding: 0px 0px 8px 20px;
    }

    .heading_mid_home{
        padding: 20px 0px 8px 20px;
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

    .tooltip_placement div, .tooltip div, .tooltip_occurrence div, .tooltip_mid div{ /* hide and position tooltip */
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
    }

    .tooltip,
    .tooltip_placement,
    .tooltip_occurrence,
    .tooltip_mid{
        opacity: 1 !important;
        font-size: 13px !important;
        display: contents !important;
    }

    .tooltip_mid:hover div, .tooltip:hover div, .tooltip_placement:hover div, .tooltip_occurrence:hover div{
        visibility: visible;
        transition-delay: 0.5s;
    }

    .tooltip div a,
    .tooltip_mid div a,
    .tooltip_placement div a{
        text-decoration: none;
        border-bottom:1px solid #fff;
        color: #fff;
    }

    .label-success {
        background: #d2f2d4;
        border: 1px solid #d2f2d4;
        border-radius: 10px;
        padding: 10px 30px 20px 10px;
        font-size: 14px;
        display: block;
        margin-top: 10px;
        color: green;
        width: 48%;
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
        width: 48%;
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
        width: 50%;
        float: left;
    }

    .apply_button{
        margin-top: 20px;
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
        margin: 3px;
    }

    .helpTooltip__icon___1XWGN_read{
        margin-top: 14px;
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
        font-weight: normal;
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
        width: 40%;
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
        color: #666666;
    }

    label#pub_id{
        color: #000000;
    }

    label#first_bc_enabled-unchecked2 {
        padding: 10px 0px 0px 3px;
    }

    input#out_of_content_enabled {
        height: 16px;
        width: 16px;
    }

</style>

<!-- Latest font-awesome include-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="taboola-container">
    <div class="theme_image">
        <img src='<?php echo $this->plugin_url.'img/taboola.png' ?>' style='width:150px;'/>
    </div>

    <h2 style="font-size:1.7em;">Taboola WordPress Plugin 2.0</h2>

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

<!-- errors/success message -->


<!-- Welcome Massage -->

    <div class="publisher_welcome_massage">
        <h2 class="welcome_heading">Welcome to Taboola WordPress Plugin 2.0!</h2>
        <p class="first_p">For detailed instructions, see the <a href="#" target='_blank'>Taboola Dev Center.</a></p>
        <p class="second_p"><b>Stuck? Need a hand?</b> Feel free to reach out via our <a href="https://developers.taboola.com/web-integrations/discuss" target='_blank'>Online Community</a></p>
        <div class="list_l1">
            <p>Usage of this plugin is subject to <b>Taboola's</b> <a href="https://www.taboola.com/policies/platform-terms-of-service" target='_blank'>terms of services.</a></p>
        </div>
    </div>

<!--  Welcome Massage-->

    <form method="POST">
        <h2 class="general_h2">General Settings</h2>
    
        <div class="publisher_id_style">
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
                <label>Don't have an account with taboola?</label>
                <a style='float: inherit;' class='request_link' href='http://taboola.com/contact' target='_blank'>Contact us</a>
                <label style="margin-left: -9px;">to get started</label>
            </div>
        </div>


<!-- Below Article Widget -->
    <h2 class="widget_h2">Widget Settings</h2>
    <div class="below_article_style">
          <div class="switch_style">
            <label class="switch">
              <input id="first_bc_enabled" type="checkbox" <?php echo !empty($settings->first_bc_enabled) ? "checked='checked'" : "" ?> onclick="ChangeCheckboxLabelColor(this)" name="first_bc_enabled" />
              <span class="slider round"></span>
            </label>
            <b style="font-size:15px;">Below-article widget</b>
          </div>
          <div class="label_below">
            <div class="mode_style">
              <label id="first_bc_enabled-unchecked" style="float:left;">Mode (Widget ID):</label>
              <div class='tooltip'>
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
              <label id="first_bc_enabled-checked" style="float:left;">Placement Name:</label>
              <div class='tooltip_placement'>
                <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                  <g fill="none" fill-rule="evenodd">
                    <path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                  </g>
                </svg>
                <div>Your <i>below-article</i> Placement Name, as provided by Taboola. <br>
                  <br> When upgrading from v1, fill in ""below-article"". <br>
                  <br> For more information, reach out via our <a href="https://developers.taboola.com/web-integrations/discuss" target='_blank'>Online Community</a>, or contact Taboola Support.
                </div>
              </div>
            </div>
          </div>
          <div class="input_below">
            <div class="widget_below">
              <input id="first_bc_widget_id" type="text" value="
									<?php echo !empty($settings->first_bc_widget_id) ? htmlspecialchars($settings->first_bc_widget_id) : "" ?>" name="first_bc_widget_id" placeholder="Widget ID" />
            </div>
            <div class="placement_below">
              <input type="text" id="first_bc_placement" value="
										<?php echo !empty($settings->first_bc_placement) ? htmlspecialchars($settings->first_bc_placement) : "" ?>" name="first_bc_placement" placeholder="Placement Name" />
            </div>
          </div>

          <!-- Below Article Widget -->
          <!-- Advanced Settings -->
          <br />
          <div class='location_section'>
            <div class='checkbox_read'>
              <input id="out_of_content_enabled" type="checkbox" <?php echo !empty($settings->out_of_content_enabled) ? "checked='checked'" : "" ?> name="out_of_content_enabled" />
              <label id="first_bc_enabled-unchecked2">Place the widget just after the article (required for Read More)</label>
            </div>
            <div class='tooltip'>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN_read">
                <g fill="none" fill-rule="evenodd">
                  <path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                </g>
              </svg>
              <div>For more information, see the <a href="#" target='_blank'>Taboola Dev Center</a>. </div>
              <!-- or if the widget is not placed correctly. DO NOT disable it if your widget includes "Read More" -->
            </div>
          </div>
        </div>
<!-- Advanced Settings -->

<!-- Mid Article Widget -->

<div class="mid_article_style">
            <div class="switch_style">
                <label class="switch">
                <input id="mid_enabled" type="checkbox" <?php echo !empty($settings->mid_enabled) ? "checked='checked'" : "" ?> onclick="ChangeCheckboxLabelColor(this)" name="mid_enabled"/>
                    <span class="slider round"></span>
                </label>
                <b style="font-size:15px;">Mid-article widget</b>
            </div>

            <div>
                <div class="mode_style_mid"><label id="mid_enabled-checked" style="float:left;">Mode (Widget ID):</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                             </g>
                         </svg>
                        <div>Your <i>mid-article</i> Mode (Widget ID), as provided by Taboola.</div>
                    </div>
                </div>
                <div class="placement_style_mid"><label id="mid_enabled-unchecked" style="float:left;">Placement Name:</label>
                    <div class='tooltip_placement'>
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

            <div class='heading_mid_home'><label id="mid_enabled-unchecked2" style="float:left;">Position the widget immediately below the element:</label>
            <div class='tooltip_mid'>
                    <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                            <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                            </g>
                    </svg>
                    <div>The widget will be placed just beneath the <i>targeted element</i>.<br><br>
                            To target an element, 2 pieces of information are needed:<br><br>
                            i) A CSS selector - e.g. ""p"".<br>
                            ii) An occurrence - e.g. 1st, 2nd, 3rd, etc.<br><br>
                            Example 1 - target the 5th paragraph:<br><br>
                            CSS selector = ""p"", and occurrence = ""5"".<br><br>
                            Example 2 - target the (first) element with an ID of ""my-id"":<br><br>
                            CSS selector = ""#my-id"", and occurrence = ""1"".<br><br>
                            ---- <br>
                            For more information, see the <a href="#" target='_blank'>Taboola Dev Center</a>.
                </div>
            </div>
        </div>

            <div class="mid_occurrence">
                <div class="mode_style_mid_selector"><label id="mid_enabled-checked1" style="float:left;">CSS selector :</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                        <div><i>p</i> to target a paragraph, <i>#my-id</i> to target an ID of "my-id", <i>.my-class</i>, to target a class of "my-class", etc.</div>
                    </div>
                </div>
                <div class="placement_style_mid_occurrence"><label id="mid_enabled-unchecked1" style="float:left;">Occurrence :</label>
                    <div class='tooltip_occurrence'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                        <div><i>5</i> for the 5th occurrence, <i>1</i> for the 1st occurrence, etc.</div>            
                    </div>
                </div>
            </div>
            <div class="mid_placement">
                <div class="widget_below_mid_selector">
                    <input id = "mid_location_string" type="text" value="<?php echo !empty($settings->mid_location_string) ? htmlspecialchars($settings->mid_location_string) : "" ?>" name="mid_location_string" placeholder="E.g. p for paragraph" />
                </div>
                <div class="placement_below_mid_Occurrence">
                    <input type="number" id="para_num" value="<?php echo !empty($settings->mid_location_string_occurrence) ? $settings->mid_location_string_occurrence : "1" ?>" name="mid_location_string_occurrence" placeholder="" style="width:65px;">
                </div>
            </div>
    </div>
<!-- Mid Article Widget -->

<!-- Homepage mid widget -->

<div class="home_article_style">
        <div class="switch_style">
                <label class="switch">
                <input id="home_enabled" type="checkbox" <?php echo !empty($settings->home_enabled) ? "checked='checked'" : "" ?> onclick="ChangeCheckboxLabelColor(this)" name="home_enabled"/>
                <span class="slider round"></span>
                </label>
                <b style="font-size:15px;">Homepage (front page) widget</b>
            </div>

            <div>
                <div class="mode_style_home"><label id="home_enabled-checked" style="float:left;">Mode (Widget ID):</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                        <div>Your <i>homepage</i> Mode (Widget ID), as provided by Taboola.</div>
                    </div>
                </div>
                <div class="placement_style_home"><label id="home_enabled-unchecked" style="float:left;">Placement Name:</label>
                    <div class='tooltip_placement'>
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

            <div class='heading_mid_home'><label id="home_enabled-unchecked2" style="float:left;">Position the widget immediately below the element:</label>
            <div class='tooltip_mid'>
                    <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                            <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                            </g>
                    </svg>
                    <div>"The widget will be placed just beneath the <i>targeted element</i>.<br><br>
                            To target an element, 2 pieces of information are needed:<br><br>
                            i) A CSS selector - e.g. ""p"".<br>
                            ii) An occurrence - e.g. 1st, 2nd, 3rd, etc.<br><br>
                            Example 1 - target the 5th paragraph:<br><br>
                            CSS selector = ""p"", and occurrence = ""5"".<br><br>
                            Example 2 - target the (first) element with an ID of ""my-id"":<br><br>
                            CSS selector = ""#my-id"", and occurrence = ""1"".<br><br>
                            ---- <br>
                            For more information, see the <a href="#" target='_blank'>Taboola Dev Center</a>."
                </div>
            </div>
        </div>


        <div class="home_occurrence">
                <div class="mode_style_home_selector"><label id="home_enabled-checked1" style="float:left;">CSS selector :</label>
                    <div class='tooltip'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                        <div><i>p</i> to target a paragraph, <i>#my-id</i> to target an ID of "my-id", <i>.my-class</i>, to target a class of "my-class", etc..</div>
                    </div>
                </div>
                <div class="placement_style_home_occurrence"><label id="home_enabled-unchecked1" style="float:left;">Occurrence :</label>
                    <div class='tooltip_occurrence'>
                        <!-- <i class="fa fa-question-circle" aria-hidden="true"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="helpTooltip__icon___1XWGN">
                                <g fill="none" fill-rule="evenodd"><path fill="currentColor" d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm-1 15.505v.99c0 .291.226.505.505.505h.99c.291 0 .505-.226.505-.505v-.99a.497.497 0 0 0-.505-.505h-.99a.497.497 0 0 0-.505.505zm4.07-6.255c.57-.57.93-1.37.93-2.25 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2s2 .9 2 2c0 .55-.22 1.05-.59 1.41l-1.24 1.26C11.45 12.4 11 13.4 11 14.5v.5h2c0-1.5.45-2.1 1.17-2.83l.9-.92z"></path>
                                </g>
                         </svg>
                        <div><i>5</i> for the 5th occurrence, <i>1</i> for the 1st occurrence, etc.</div>            
                    </div>
                </div>
            </div>
            <div class="home_placement">
                <div class="widget_below_home_selector">
                    <input id = "home_location_string" type="text" value="<?php echo !empty($settings->home_location_string) ? htmlspecialchars($settings->home_location_string) : "" ?>" name="home_location_string" placeholder="E.g. p for paragraph" /></td>
                </div>
                <div class="placement_below_home_Occurrence">
                    <input type="number" id="para_num_home" value="<?php echo !empty($settings->home_location_string_occurrence) ? $settings->home_location_string_occurrence : "1" ?>" name="home_location_string_occurrence" placeholder="" style="width:65px;">
                </div>
            </div>
</div>
<!-- Homepage mid widget -->

<div class="change_button">
    <input class='apply_button' type="submit" value="Apply Changes"/>
</div>
        
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
function ChangeCheckboxLabelColor(ckbx)
    {
        var d = ckbx.id;
        if( ckbx.checked )
        {
            document.getElementById(d+"-checked").style.color = "#000000";
            document.getElementById(d+"-unchecked").style.color = "#000000";
            document.getElementById(d+"-unchecked2").style.color = "#000000";
            document.getElementById(d+"-checked1").style.color = "#000000";
            document.getElementById(d+"-unchecked1").style.color = "#000000";
        }
        else
        {
            document.getElementById(d+"-checked").style.color = "#666666";
            document.getElementById(d+"-unchecked").style.color = "#666666";
            document.getElementById(d+"-unchecked2").style.color = "#666666";
            document.getElementById(d+"-checked1").style.color = "#666666";
            document.getElementById(d+"-unchecked1").style.color = "#666666";
        }
    }
</script>

<script>
    ChangeCheckboxLabelColor(document.getElementById("first_bc_enabled"));
    ChangeCheckboxLabelColor(document.getElementById("mid_enabled"));
    ChangeCheckboxLabelColor(document.getElementById("home_enabled"));
</script>

<script>

    function sync_checkboxes(){
        if(document.getElementById("first_bc_enabled").checked){
            document.getElementById("first_bc_widget_id").disabled = false;
            document.getElementById("first_bc_placement").disabled = false;
            document.getElementById("out_of_content_enabled").disabled = false;
        }
        else{
            document.getElementById("first_bc_widget_id").disabled = true;
            document.getElementById("first_bc_placement").disabled = true;
            document.getElementById("out_of_content_enabled").disabled = true;
        }
    }

    function sync_checkboxes1(){ 
        if(document.getElementById("mid_enabled").checked){
            document.getElementById("mid_widget_id").disabled = false;
            document.getElementById("mid_placement").disabled = false;
            document.getElementById("mid_location_string").disabled = false;
            document.getElementById("para_num").disabled = false;
        }else{
            document.getElementById("mid_widget_id").disabled = true;
            document.getElementById("mid_placement").disabled = true;
            document.getElementById("mid_location_string").disabled = true;
            document.getElementById("para_num").disabled = true;
        }
    }

    function sync_checkboxes_home(){
        if(document.getElementById("home_enabled").checked){
            document.getElementById("home_widget_id").disabled = false;
            document.getElementById("home_placement").disabled = false;
            document.getElementById("home_location_string").disabled = false;
            document.getElementById("para_num_home").disabled = false;
        }else{
            document.getElementById("home_widget_id").disabled = true;
            document.getElementById("home_placement").disabled = true;
            document.getElementById("home_location_string").disabled = true;
            document.getElementById("para_num_home").disabled = true;
        }
    }


    jQuery('#first_bc_enabled').change(sync_checkboxes);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 5000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 8000);
    sync_checkboxes();

    jQuery('#mid_enabled').change(sync_checkboxes1);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 5000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 8000);
    sync_checkboxes1();

    jQuery('#home_enabled').change(sync_checkboxes_home);
    setTimeout(function(){jQuery('.label-success').fadeOut()}, 5000);
    setTimeout(function(){jQuery('.label-error').fadeOut()}, 8000);
    sync_checkboxes_home();

    window.onload = function(){
        document.forms['install_log'].submit()

    }

</script>