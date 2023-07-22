<?php
/*
Plugin Name:  WooCommerce PopUp Plugin
Plugin URI:   https://the-basics.dk/
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       webriel.ro
Author URI:   https://the-basics.dk/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/


add_action( 'woocommerce_after_variations_table', 'add_custom_link_to_product_page');

function add_custom_link_to_product_page() {
    global $product;
    echo '<a href="" class="custom-link-popup">Størrelsesguide</a>';
    echo '<div id="container">';
    echo '<div id="custom-link-popup-content" style="display:none">';
    echo '<span id="custom-popup-close">x</span>';
    echo '<div id="wrapper-img">';
    echo '<img src="https://the-basics.dk/wp-content/uploads/2022/06/Measuring-around-chest.webp" alt="chest image" id="img-description">';
    echo '<p id="img-title-text">T-Shirts og Undertrøjer</p>';
    echo '<img src="https://the-basics.dk/wp-content/uploads/2022/06/Chest-Measure-Danish.webp" alt="chest image size" id="size-img" >';
    echo '<img src="https://the-basics.dk/wp-content/uploads/2022/06/Measuring-around-waistline.webp" alt="waist image" id="img-description">';
    echo '<p id="img-title-text">Underdele</p>';
    echo '<img src="https://the-basics.dk/wp-content/uploads/2022/06/Waist-Measure-Danish.webp" alt="waist image size" id="size-img">';
    echo '<img src="https://the-basics.dk/wp-content/uploads/2022/06/Measuring-Foot.webp" alt="foot image" id="img-description">';
    echo '<p id="img-title-text">Strømper</p>';
    echo '<img src="https://the-basics.dk/wp-content/uploads/2023/02/measurecopy.webp" alt="foot image size" id="size-img">';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '
<style> #container {
    position:absolute;
    width:100%;
    z-index:99999;}
#custom-link-popup-content {
    position:absolute;
    background-color:#fff;
    height:auto;
    width:700px;
    color:#fff;
    border:5px solid #949494;
    top:0;
    left:0;
    transform:translate(-50%, -50%);}
    #custom-popup-close {
        position:absolute;
		cursor:pointer;
        font-size:30px;
		font-weight:bold;
        padding:2rem;
        height:100px;
        width:100px;
        color:#2b2b2b;
        top:0;
        right:0;
    }
    #size-img { 
        height:auto;
        box-sizing:border-box;
        max-width:100%;
        vertical-align:bottom;
     }
     #img-title-text {
        font-size:16px;
        color:#000000;
        text-align:center;
     }
     #wrapper-img {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding:3rem;
     }

    #img-description {
        height:160px;
        max-width:100%;
    }
    img:nth-of-type(3) {
        margin-top:3rem;}
    @media only screen and (max-width: 720px) {
        #container {
            position:unset;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        #custom-link-popup-content {
            top:unset;
            left:unset;
            right:unset;
            transform:unset;
            height:auto;
            width:auto;
            z-index:99999;
        }
        #size-img { 
            height:3.5rem;
            box-sizing:unset;
            max-width:20rem;
        } 
     }
     </style>

     <script>
        var customLinkPopups = document.querySelectorAll(".custom-link-popup");
        for (var i = 0; i < customLinkPopups.length; i++) {
            customLinkPopups[i].addEventListener("click", function(e) {
                e.preventDefault();
                var popup = document.querySelector("#custom-link-popup-content");
                popup.style.display = popup.style.display === "block" ? "none" : "block";
            });
        }
        document.querySelector("#custom-popup-close").addEventListener("click", function() {
            document.querySelector("#custom-link-popup-content").style.display = "none";
        });
    </script>';}
?>