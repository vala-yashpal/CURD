<?php 


$pizza_item_menu_array=[

    ['item_id'=>'1','name'=>'Pizza Margerita','image'=>'https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110.jpg', 'price_details'=>['small'=>['sub_item_id'=>'1','type'=>'Small','price'=>'110'],'Medium'=>['sub_item_id'=>'1','type'=>'Medium','price'=>'210'],'Large'=>['sub_item_id'=>'1','type'=>'Large','price'=>'310']]],
    ['item_id'=>'2','name'=>'Pizza Farm House','image'=>'https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110.jpg', 'price_details'=>['small'=>['sub_item_id'=>'2','type'=>'Small','price'=>'200'],'Medium'=>['sub_item_id'=>'2','type'=>'Medium','price'=>'300'],'Large'=>['sub_item_id'=>'2','type'=>'Large','price'=>'400']]],
    ['item_id'=>'3','name'=>'9 cheese pizza','image'=>'https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110.jpg', 'price_details'=>['small'=>['sub_item_id'=>'3','type'=>'Small','price'=>'350'],'Medium'=>['sub_item_id'=>'3','type'=>'Medium','price'=>'450'],'Large'=>['sub_item_id'=>'3','type'=>'Large','price'=>'550']]]
];


// $pizza_item_menu_array = [
//     ['id'=>1,'name'=>]
// ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Pizza Order Form</title>
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.43001&themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.43001" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style type="text/css" id="form-designer-style">
            /* Injected CSS Code */

        .form-all {
        font-family: "Inter", sans-serif;
        }
        /* 2 - FORM WIDTH */
        .form-all {
        max-width: 710px;
        }
        /* 5 - FONT SIZE */
        .form-all {
        font-size: 16px;
        }
        /* 17 - INPUT WIDTHS */
        /*  20 - FORM PADDING */
        .form-section {
        padding: 0px 38px;
        }
        .form-textbox,
        .form-textarea,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
        background-color: #ffffff;
        }
        li[data-type="control_textbox"] div[data-layout="half"],
        li[data-type="control_dropdown"] div[data-layout="half"],
        li[data-type="control_email"] div[data-layout="half"],
        li[data-type="control_number"] div[data-layout="half"],
        li[data-type="control_phone"] div[data-layout="half"],
        li[data-type="control_datetime"] div[data-layout="half"],
        li[data-type="control_signature"] div[data-layout="half"] {
        width: 100% !important;
        max-width: 648px;
        }
        /* 10 - LINE SPACING */
        .form-line {
        margin-top: 12px;
        margin-bottom: 12px;
        padding-top: 0;
        padding-bottom: 0;
        }
        /* 11 - LINE PADDING */
        /* LABEL STYLE */
        [data-type="control_dropdown"] .form-input,
        [data-type="control_birthdate"] .form-input,
        [data-type="control_time"] .form-input,
        [data-type="control_dropdown"] .form-input-wide,
        [data-type="control_birthdate"] .form-input-wide,
        [data-type="control_time"] .form-input-wide {
        width: 100% !important;
        max-width: 648px;
        }
        [data-type="control_dropdown"] .form-dropdown {
        width: 100% !important;
        max-width: 648px;
        }
        /* 12 - ROUNDED INPUTS */
        .supernova .form-all,
        .form-all {
        border-radius: 20px;
        }
        .form-section:first-child {
        border-radius: 20px 20px 0 0;
        }
        .form-section:last-child {
        border-radius: 0 0 20px 20px;
        }
        .form-checkbox-item label,
        .form-checkbox-item span,
        .form-radio-item label,
        .form-radio-item span {
        color: #404a64;
        }
        .form-radio-item,
        .form-checkbox-item {
        padding-bottom: 0px !important;
        }
        .form-radio-item:last-child,
        .form-checkbox-item:last-child {
        padding-bottom: 0;
        }
        .form-single-column .form-checkbox-item,
        .form-single-column .form-radio-item {
        width: 100%;
        }
        .form-checkbox-item .editor-container div,
        .form-radio-item .editor-container div {
        position: relative;
        }
        .form-checkbox-item .editor-container div:before,
        .form-radio-item .editor-container div:before {
        display: inline-block;
        vertical-align: middle;
        left: 0;
        width: 20px;
        height: 20px;
        }
        .form-checkbox-item input,
        .form-radio-item input {
        margin-top: 2px;
        }
        .form-checkbox:checked + label:before,
        .form-checkbox:checked + span:before {
        background-color: #2e69ff;
        border-color: #2e69ff;
        }
        .form-radio:checked + label:before,
        .form-radio:checked + span:before {
        border-color: #2e69ff;
        }
        .form-radio:checked + label:after,
        .form-radio:checked + span:after {
        background-color: #2e69ff;
        }
        .form-checkbox:hover + label:before,
        .form-checkbox:hover + span:before,
        .form-radio:hover + label:before,
        .form-radio:hover + span:before {
        border-color: rgba(46, 105, 255, 0.5);
        box-shadow: 0 0 0 2px rgba(46, 105, 255, 0.25);
        }
        .form-checkbox:focus + label:before,
        .form-checkbox:focus + span:before,
        .form-radio:focus + label:before,
        .form-radio:focus + span:before {
        border-color: #2e69ff;
        box-shadow: 0 0 0 3px rgba(46, 105, 255, 0.25);
        }
        .submit-button {
        font-size: 16px;
        font-weight: normal;
        font-family: inherit;
        }
        .submit-button {
        min-width: 180px;
        }
        .form-all .form-pagebreak-back,
        .form-all .form-pagebreak-next {
        font-family: "Inter", sans-serif;
        font-size: 16px;
        font-weight: normal;
        }
        .form-all .form-pagebreak-back,
        .form-all .form-pagebreak-next {
        min-width: 128px;
        }
        li[data-type="control_image"] div {
        text-align: left;
        }
        li[data-type="control_image"] img {
        border: none;
        border-width: 0px !important;
        border-style: solid !important;
        border-color: false !important;
        }
        .supernova {
        height: 100%;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center top;
        background-attachment: fixed;
        background-size: auto;
        background-size: cover;
        }
        .supernova {
        background-image: none;
        }
        #stage {
        background-image: none;
        }
        /* | */
        .form-all {
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center top;
        background-repeat: repeat;
        }
        .form-header-group {
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center top;
        }
        .header-large h1.form-header {
        font-size: 2em;
        }
        .header-large h2.form-header {
        font-size: 1.5em;
        }
        .header-large h3.form-header {
        font-size: 1.17em;
        }
        .header-large h1 + .form-subHeader {
        font-size: 1em;
        }
        .header-large h2 + .form-subHeader {
        font-size: .875em;
        }
        .header-large h3 + .form-subHeader {
        font-size: .75em;
        }
        .header-default h1.form-header {
        font-size: 2em;
        }
        .header-default h2.form-header {
        font-size: 1.5em;
        }
        .header-default h3.form-header {
        font-size: 1.17em;
        }
        .header-default h1 + .form-subHeader {
        font-size: 1em;
        }
        .header-default h2 + .form-subHeader {
        font-size: .875em;
        }
        .header-default h3 + .form-subHeader {
        font-size: .75em;
        }
        .header-small h1.form-header {
        font-size: 2em;
        }
        .header-small h2.form-header {
        font-size: 1.5em;
        }
        .header-small h3.form-header {
        font-size: 1.17em;
        }
        .header-small h1 + .form-subHeader {
        font-size: 1em;
        }
        .header-small h2 + .form-subHeader {
        font-size: .875em;
        }
        .header-small h3 + .form-subHeader {
        font-size: .75em;
        }
        .form-header-group {
        text-align: center;
        }
        .form-header-group {
        font-family: "false", sans-serif;
        }
        div.form-header-group.header-large,
        div.form-header-group.hasImage {
        margin: 0px -38px;
        }
        div.form-header-group.header-large,
        div.form-header-group.hasImage {
        padding: 0px 0px;
        }
        .form-header-group .form-header,
        .form-header-group .form-subHeader {
        color: 0;
        }
        .form-header-group {
        border-bottom: none;
        }
        .form-line-error {
        overflow: hidden;
        -webkit-transition-property: none;
        -moz-transition-property: none;
        -ms-transition-property: none;
        -o-transition-property: none;
        transition-property: none;
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        -ms-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -ms-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        background-color: #fff4f4;
        }
        .form-line-error .form-error-message {
        background-color: #f23a3c;
        clear: both;
        float: none;
        }
        .form-line-error .form-error-message .form-error-arrow {
        border-bottom-color: #f23a3c;
        }
        .form-line-error input:not(#coupon-input),
        .form-line-error textarea,
        .form-line-error .form-validation-error {
        border: 1px solid #f23a3c;
        box-shadow: 0 0 3px #f23a3c;
        }
        .supernova {
        background-color: #ffffff;
        background-color: #27272a;
        }
        .supernova body {
        background-color: transparent;
        }
        .supernova .form-all,
        .form-all {
        background-color: #ffffff;
        }
        .form-textbox,
        .form-textarea,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
        background-color: #ffffff;
        }
        .form-matrix-table tr {
        border-color: #e6e6e6;
        }
        .form-matrix-table tr:nth-child(2n) {
        background-color: #f2f2f2;
        }
        .form-all {
        color: #2c3345;
        }
        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html {
        color: #2c3345;
        }
        .form-line-error {
        overflow: hidden;
        -webkit-transition-property: none;
        -moz-transition-property: none;
        -ms-transition-property: none;
        -o-transition-property: none;
        transition-property: none;
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        -ms-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -ms-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        background-color: #fff4f4;
        }
        .form-header-group .form-header,
        .form-header-group .form-subHeader {
        color: 0;
        }
        .form-line-active {
        background-color: #ffffe0;
        }
        /* 29 - FORM COLUMNS */


        /*PREFERENCES STYLE*/
            .form-all {
            font-family: Inter, sans-serif;
            }
        
            .form-label.form-label-auto {
            
            display: block;
            float: none;
            text-align: left;
            width: 100%;
        
            }
        
            .form-line {
            margin-top: 12px;
            margin-bottom: 12px;
            padding-top: 0;
            padding-bottom: 0;
            }
        
            .form-all {
            max-width: 710px;
            width: 100%;
            }
        
            .form-label.form-label-left,
            .form-label.form-label-right,
            .form-label.form-label-left.form-label-auto,
            .form-label.form-label-right.form-label-auto {
            width: 230px;
            }
        
            .form-all {
            font-size: 16px
            }
        
            .supernova .form-all, .form-all {
            background-color: #fff;
            }
        
            .form-all {
            color: #2C3345;
            }
            .form-header-group .form-header {
            color: #2C3345;
            }
            .form-header-group .form-subHeader {
            color: #2C3345;
            }
            .form-label-top,
            .form-label-left,
            .form-label-right,
            .form-html,
            .form-checkbox-item label,
            .form-radio-item label,
            span.FITB .qb-checkbox-label,
            span.FITB .qb-radiobox-label,
            span.FITB .form-radio label,
            span.FITB .form-checkbox label,
            [data-blotid][data-type=checkbox] [data-labelid],
            [data-blotid][data-type=radiobox] [data-labelid],
            span.FITB-inptCont[data-type=checkbox] label,
            span.FITB-inptCont[data-type=radiobox] label {
            color: #2C3345;
            }
            .form-sub-label {
            color: #464d5f;
            }
        
        .supernova {
            background-color: #27272a;
        }
        .supernova body {
            background: transparent;
        }
        
            .form-textbox,
            .form-textarea,
            .form-dropdown,
            .form-radio-other-input,
            .form-checkbox-other-input,
            .form-captcha input,
            .form-spinner input {
            background-color: #fff;
            }
        
            .supernova {
            background-image: none;
            }
            #stage {
            background-image: none;
            };
        
            .form-all {
            background-image: none;
            }
        .form-all:before { content: none; } .form-all { margin-top: 72px; }/*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
        .form-all {
            border-radius : 12px;
        }

        .header-logo-top {
            width : 100%;
        }

        .form-header-group.hasImage.header-large {
            padding-bottom : 50px;
            border : 0;
        }

        .form-header-group.hasImage.header-large img {
            border-radius : 12px 12px 0 0;
        }

        .error {
            color: red;
            font-size: 90%;
            padding-top: 10px;
        }

    </style>
</head>
<body>
    <!-- <form class="jotform-form" action="" method="post" name="" id="" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID" value=""/> -->
    <form class="jotform-form" action="" method="post" name="rform" id="order_form" onsubmit="validation_f(); event.preventDefault();" accept-charset="utf-8" >
        <div role="main" class="form-all">
            <ul class="form-section page-section">
            <li id="cid_1" class="form-input-wide" data-type="control_head">
                <div style="display:table;width:100%">
                <div class="form-header-group hasImage header-large" data-imagealign="Top">
                    <div class="header-logo"><img src="https://www.jotform.com/uploads/ugurg/form_files/Pizza-min-2.6437c1bf7574a2.71416330.png" alt="Pizza Order Form" width="319" class="header-logo-top" /></div>
                    <div class="header-text httac htvam">
                    <h1 id="header_1" class="form-header" data-component="header">Pizza Order Form</h1>
                    </div>
                </div>
                </div>
            </li>
            <li class="form-line" data-type="control_fullname" id="id_3"><label class="form-label form-label-top" id="label_3" for="first_3"> Name </label>
                <div id="cid_3" class="form-input-wide" data-layout="full">
                <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                <input type="text" id="q3_name[first]" name="user_name" class="form-textbox" data-defaultvalue=""  size="10" value="" placeholder="Your Name" onchange="validation_f()"/>
                <div class="error" id="nameErr"></div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_email" id="id_12"><label class="form-label form-label-top" id="label_12" for="input_12"> Email </label>
                <div id="cid_12" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">
                <input type="email" id="email" name="email" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Your Email " onchange="validation_f()"  />
                <div class="error" id="emailErr"></div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_11"><label class="form-label form-label-top" id="label_11" for="input_11_full"> Phone Number </label>
                <div id="cid_11" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" id="contact_number" name="contact_number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" style="width:310px"  value="" placeholder="Your phone_no" onchange="validation_f()"/></span> </div>
                <div class="error" id="mobileErr"></div>
            </li>
            <li class="form-line" data-type="control_textarea" id="id_8">
                <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Address</label>
                <div id="cid_8" class="form-input-wide" data-layout="full"> 
                    <textarea id="addre" class="form-textarea" onchange="validation_f()" name="addre" style="width:648px;height:163px" ></textarea> </div>
                <div class="error" id="addErr"></div>
            </li>
            <li class="form-line" data-type="control_paypalSPB" id="id_7" data-payment="true"><label class="form-label form-label-top" id="label_7" for="input_7"> Menu </label>
                <div id="cid_7" class="form-input-wide" data-layout="full">
                    <div>
                    <div data-wrapper-react="true" class="product-container-wrapper">
                    <div class="filter-container"></div>
                    <div id="image-overlay" class="overlay-content" style="display:none"><img id="current-image" /><span class="lb-prev-button">prev</span><span class="lb-next-button">next</span><span class="lb-close-button">( X )</span><span class="image-overlay-product-container">
                        </span></div>
                    <div data-wrapper-react="true"><span class="form-product-item hover-product-item  show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1001" aria-labelledby="label_7">
                        
                        <?php

                        
                            foreach ($pizza_item_menu_array as $key => $value)
                            {?>

                                        <div class="p_item_separator ">
                                <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                                    <div class="p_col">
                                    <div class="p_checkbox"><input type="checkbox" class="form-checkbox  form-product-input" value='<?php echo $value['item_id']; ?>' id="pizza" name="pizza"/>
                                        <div class="checked"></div>
                                        <div class="select_border"></div>
                                    </div>
                                    </div>
                                    <div class="p_image">
                                        <div class="image_area form-product-image-with-options">
                                            <div style="position:absolute;width:100%;height:100%">
                                            <img role="img" style="width:100%;height:100%;object-fit:cover" src="<?php echo $value['image']; ?>" loading="lazy" /></div>
                                        </div>
                                    </div>
                                    
                                    <div for="input_7_1001" class="form-product-container">
                                        <span data-wrapper-react="true">
                                            <div class="title_description">
                                                <span class="form-product-name" id="Pizza_name"><?php echo $value['name']; ?></span>
                                                <!-- <span class="form-product-description" id="product-name-description-input_7_1001">Ingredients will be written here.</span> -->
                                            </div>
                                            <span class="form-product-details"><b>
                                                
                                            </span></b>
                                        </span>
                                
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <label class="form-sub-label" for="input_7_quantity_1001_0" style="min-height:13px" aria-hidden="false">Quantity</label>
                                            <span class="select_cont">
                                                <select class="form-dropdown" name="pizza_quntity_<?php echo $key; ?>" id="pizza_quntity_<?php echo $key; ?>" onchange="item_total(<?php echo $key; ?>);">
                                                    <option value="0">quntity select</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <label class="form-sub-label" for="input_7_custom_1001_1" style="min-height:13px" aria-hidden="false">Size</label>
                                            <span class="select_cont">
                                                <select class="form-dropdown" name="pizza_size_<?php echo $key; ?>" id="pizza_size_<?php echo $key; ?>" onchange="item_total(<?php echo $key; ?>);">
                                                    <!-- <option value="0">Size</option> -->
                                                    <option value="0">size select</option>
                                                    <?php foreach ($value['price_details'] as $key_one => $value_one) 
                                                    {?>
                                                        
                                                        <option value="<?php echo $value_one['price'];?>"><?php echo $value_one['type'];?> (₹<?php echo $value_one['price'];?>)</option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select></span>
                                            </span><br />
                                            <span class="form-special-subtotal">
                                                <span class="form-item-subtotal">Item subtotal:</span>
                                                    <span data-wrapper-react="true">₹
                                                        <span id="item_subtotal_<?php echo $key; ?>">0.00</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        </span>
                        <div class="p_item_separator "></div><span class="form-product-item hover-product-item  show_image show_desc show_option new_ui" categories="non-categorized" pid="1006" aria-labelledby="label_7">
                            <label class="form-label form-label-top" id="label_7" for="input_7"> Delivery Options </label>
                            <select class="form-dropdown" name="Delivery" id="Delivery" onchange="total();">
                                <option value="0">Picup</option>
                                <option value="120">Home_Delivery (₹120)</option>
                            </select>
                        </div>
                        
                        <div class="payment_footer new_ui ">
                        <div class="total_area">
                            <div class="form-payment-total">
                            <div id="total-text">Total</div>
                            <div class="form-payment-price"><span data-wrapper-react="true">$<span id="payment_total">0.00</span></span></div>
                            </div>
                        </div>
                        </div>
                    </div> 
                </div>
                </div>
            </li>
            <li class="form-line" data-type="control_button" id="id_2">
                <div id="cid_2" class="form-input-wide" data-layout="full">
                <div data-align="center" class="form-buttons-wrapper form-buttons-center paypal-submit-container  jsTest-button-wrapperField">
                    <div class="paypal-submit-button-wrapper"></div>
                    <div class="paypal-paylater-messages" style="order:2;width:100%;display:block">
                    <div class="message-area"></div>
                </div>
                    <button  type="submit"  id="ordrt" name="order"  class="form-submit-button submit-button jf-form-buttons jsTest-submitField">Order</button>
                </div>
                </div>
            </li>
            </ul>
        </div>
    </form>
    <script>

        function printError(elemId, hintMsg) {
            document.getElementById(elemId).innerHTML = hintMsg;
        }

        // Defining a function to validate form 
        function validation_f() {

            // console.log("caled");
            // Retrieving the values of form elements 
            var user_name = document.rform.user_name.value;
            var email = document.rform.email.value;
            var contact_number = document.rform.contact_number.value;
            var addre = document.rform.addre.value;

            // console.log(user_name);
            // console.log(email);
            // console.log(contact_number);
            // console.log(addre);
            // return false;
            // Defining error variables with a default value
            var nameErr = emailErr = mobileErr = addErr  = true;
            
            // Validate name
            if(user_name == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;    
                if(regex.test(user_name) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }
            
            // Validate email address
            if(email == "") {
                printError("emailErr", "Please enter your email address");
            } else {
                // Regular expression for basic email validation
                var regex = /^\S+@\S+\.\S+$/;
                if(regex.test(email) === false) {
                    printError("emailErr", "Please enter a valid email address");
                } else{
                    printError("emailErr", "");
                    emailErr = false;
                }
            }
            
            // Validate mobile number
            if(contact_number == "") {
                printError("mobileErr", "Please enter your mobile number");
            } else {
                var regex = /^[1-9]\d{9}$/;
                if(regex.test(contact_number) === false) {
                    printError("mobileErr", "Please enter a valid 10 digit mobile number");
                } else{
                    printError("mobileErr", "");
                    mobileErr = false;
                }
            }

            if(addre == "") {
                printError("addErr", "Please enter your Address");
            } else {
                var regex = /^[a-zA-Z1-9\s]/;    
                if(regex.test(addre) === false) {
                    printError("addErr", "Please enter a valid Address");
                } else {
                    printError("addErr", "");
                    addErr = false;
                }
            }
          
            // Prevent the form from being submitted if there are any errors

            if((nameErr || emailErr || mobileErr  || addErr  ) == true) {
                return false;
            } else {
                return false;
                alert("validate_data");
            }
        };

        var get_sub_total=0;

        function item_total(id)
        {


            var pizza_quntity =$('#pizza_quntity_'+id).val();
            var pizza_size =$('#pizza_size_'+id).val();

          
            let Item_subtotal = pizza_quntity * pizza_size;

             get_sub_total=get_sub_total+Item_subtotal;

            console.log(Item_subtotal);

            document.getElementById("item_subtotal_"+id).innerHTML=Item_subtotal;
            document.getElementById("payment_total").innerHTML=get_sub_total;
            return false;
        }


        function total()
        {
            // console.log("total");

            var Delivery =$('#Delivery').val();

            get_sub_total = parseInt(get_sub_total) + parseInt(Delivery);
          
            document.getElementById("payment_total").innerHTML=get_sub_total;
        }

        

        $(document).on('submit','#order_form',function(){ 
            var result = {};
            $.each($('#order_form').serializeArray(), function () {
                            result[this.name] = this.value;
                        });
            // result = $('#order_form').serializeArray();
            console.log(result);
            fetch("http://127.0.0.1:8000/api/order",{
                    method: 'POST',
                    headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(result)
                    }).then((response)=>response.json()).then((return_result)=> {
                        console.log(return_result);
                    })
            return false;
        });

    </script>
</body>
</html>