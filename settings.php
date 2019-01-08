<?php
if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }
    if (isset($_POST['submit-slide-1'])){
        update_option('fjs-slide-show-1', $_POST['show']);
        update_option('fjs-slide-button-1', $_POST['button']);
        update_option('fjs-slide-text-1', $_POST['text']);
        update_option('fjs-slide-image-1', $_POST['image']);
        update_option('fjs-slide-url-1', $_POST['url']);
        ?>
        <div class="updated"><p><strong>The changes were saved successfully</strong></p></div>
        <?php
    } elseif (isset($_POST['submit-slide-2'])){
        update_option('fjs-slide-show-2', $_POST['show']);
        update_option('fjs-slide-button-2', $_POST['button']);
        update_option('fjs-slide-text-2', $_POST['text']);
        update_option('fjs-slide-image-2', $_POST['image']);
        update_option('fjs-slide-url-2', $_POST['url']);
        ?>
        <div class="updated"><p><strong>The changes were saved successfully</strong></p></div>
        <?php
    } elseif (isset($_POST['submit-slide-3'])){
        update_option('fjs-slide-show-3', $_POST['show']);
        update_option('fjs-slide-button-3', $_POST['button']);
        update_option('fjs-slide-text-3', $_POST['text']);
        update_option('fjs-slide-image-3', $_POST['image']);
        update_option('fjs-slide-url-3', $_POST['url']);
        ?>
        <div class="updated"><p><strong>The changes were saved successfully</strong></p></div>
        <?php
    } elseif (isset($_POST['submit-slide-4'])){
        update_option('fjs-slide-show-4', $_POST['show']);
        update_option('fjs-slide-button-4', $_POST['button']);
        update_option('fjs-slide-text-4', $_POST['text']);
        update_option('fjs-slide-image-4', $_POST['image']);
        update_option('fjs-slide-url-4', $_POST['url']);
        ?>
        <div class="updated"><p><strong>The changes were saved successfully</strong></p></div>
        <?php
    } elseif (isset($_POST['submit-slide-5'])){
        update_option('fjs-slide-show-5', $_POST['show']);
        update_option('fjs-slide-button-5', $_POST['button']);
        update_option('fjs-slide-text-5', $_POST['text']);
        update_option('fjs-slide-image-5', $_POST['image']);
        update_option('fjs-slide-url-5', $_POST['url']);
        ?>
        <div class="updated"><p><strong>The changes were saved successfully</strong></p></div>
        <?php
    }
    elseif (isset($_POST['submit-options'])){
        update_option('fjs-image-width', $_POST['image-width']);
        update_option('fjs-image-height', $_POST['image-height']);
        update_option('fjs-add-menu-page', $_POST['add-menu-page']);
        update_option('fjs-show-mobile', $_POST['show-mobile']);
        update_option('fjs-use-custom-css', $_POST['custom-css']);
        ?>
        <div class="updated"><p><strong>The changes were saved successfully</strong></p></div>
        <?php
    }
    ?>

    <style>
    
    #wpcontent {
        padding-left: 0px;
        background: white;
    }   
    
    .fjs-settings-wrap {
        padding: 30px;
        background: white;
        height: 100%;
        width: 100%;
    }
    .fjs-settings-header {
        font-size: 3em;
    }
    .fjs-tab-button-holder {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        margin-bottom: 0px;
    }
    .fjs-tab-button-list-item {
        margin: 0 10px 0 0;
    }
    .fjs-tab-button {
        border: none;
        border-radius: 3px;
        color: white;
        background: #e57373;
        padding: 10px 15px;
    }
    .fjs-tab-button.fjs-selected {
        background: #af4448;
    }
    .fjs-settings-tab-header {
        font-size: 150%;
        display: inline-block;
        padding: 5px 40px 10px 0px;
        border-bottom: 1px solid black;
    }
    .fjs-settings-form {
        display: grid;
        grid-template-columns: 1fr;
        width: 80%;
        max-width: 600px;
        grid-row-gap: 20px;
    }
    .fjs-settings-hint {
        font-style: italic;
        font-size: 100%;
    }
    .fjs-settings-form-label {
        font-weight: bold;
        font-size: 110%;
        padding-top: 10px;
        display: inline-block;
        cursor: default;
    }
    .fjs-form-submit {
        width: 100%;
        max-width: 200px;
        border: none;
        border-radius: 3px;
        color: white;
        background: #00756c;
        padding: 10px 15px;
    }

    </style>
    <div class="fjs-settings-wrap">
        <h1 class="fjs-settings-header">Slider Settings</h1>
        <ul class="fjs-tab-button-holder">
            <li class="fjs-tab-button-list-item">
                <button class="fjs-tab-button fjs-selected" data-tab="1">
                    Slide 1
                </button>
            </li>
            <li class="fjs-tab-button-list-item">
                <button class="fjs-tab-button" data-tab="2">
                    Slide 2
                </button>
            </li>
            <li class="fjs-tab-button-list-item">
                <button class="fjs-tab-button" data-tab="3">
                    Slide 3
                </button>
            </li>
            <li class="fjs-tab-button-list-item">
                <button class="fjs-tab-button" data-tab="4">
                    Slide 4
                </button>
            </li>
            <li class="fjs-tab-button-list-item">
                <button class="fjs-tab-button" data-tab="5">
                    Slide 5
                </button>
            </li>
            <li class="fjs-tab-button-list-item">
                <button class="fjs-tab-button" data-tab="6">
                    Options
                </button>
            </li>
        </ul>
        <div class="fjs-settings-tab-holder">

            <div class="fjs-settings-tab" data-tab="1">
                <h3 class="fjs-settings-tab-header">Slide 1</h3>
                <form class="fjs-settings-form" name="fjs-settings-form-1" method="post" action="">
                    <label class="fjs-settings-form-label" for="image">Include this slide in the slider?</label>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="show" value="yes" <?php checked( 'yes', get_option( 'fjs-slide-show-1' ) ); ?> /> Yes　<input type="radio" name="show" value="no" <?php checked( 'no', get_option( 'fjs-slide-show-1' ) ); ?> /> No
                    </div>
                    <label class="fjs-settings-form-label" for="image">Image</label>
                    <span class="fjs-settings-hint">Please use the full URL, including domain. If you're site is served over SSL, make sure to use images served over SSL and include 'https://' in the image url.</span>
                    <span class="fjs-settings-hint">Recommended image size: <?php echo get_option('fjs-image-width');?> x <?php echo get_option('fjs-image-height');?></span>
                    <input class="fjs-form-input-text" name="image" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-image-1"));?>">
                    <label class="fjs-settings-form-label" for="text">Text</label>
                    <textarea class="fjs-form-input-text" name="text" rows="5" cols="104"><?php echo stripslashes(get_option("fjs-slide-text-1"));?></textarea>
                    <label class="fjs-settings-form-label" for="button">Button text</label>
                    <input class="fjs-form-input-text" name="button" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-button-1"));?>">
                    <label class="fjs-settings-form-label" for="url">Button link</label>
                    <input class="fjs-form-input-text" name="url" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-url-1"));?>">
                    <br>
                    <input class="fjs-form-submit" name="submit-slide-1" type="submit" value="Save changes">
                </form>
            </div>

            <div class="fjs-settings-tab" data-tab="2" style="display: none;">
                <h3 class="fjs-settings-tab-header">Slide 2</h3>
                <form class="fjs-settings-form" name="fjs-settings-form-2" method="post" action="">
                    <label class="fjs-settings-form-label" for="image">Include this slide in the slider?</label>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="show" value="yes" <?php checked( 'yes', get_option( 'fjs-slide-show-2' ) ); ?> /> Yes　<input type="radio" name="show" value="no" <?php checked( 'no', get_option( 'fjs-slide-show-2' ) ); ?> /> No
                    </div>
                    <label class="fjs-settings-form-label" for="image">Image</label>
                    <span class="fjs-settings-hint">Please use the full URL, including domain. If you're site is served over SSL, make sure to use images served over SSL and include 'https://' in the image url.</span>
                    <span class="fjs-settings-hint">Recommended image size: <?php echo get_option('fjs-image-width');?> x <?php echo get_option('fjs-image-height');?></span>
                    <input class="fjs-form-input-text" name="image" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-image-2"));?>">
                    <label class="fjs-settings-form-label" for="text">Text</label>
                    <textarea class="fjs-form-input-text" name="text" rows="5" cols="104"><?php echo stripslashes(get_option("fjs-slide-text-2"));?></textarea>
                    <label class="fjs-settings-form-label" for="button">Button text</label>
                    <input class="fjs-form-input-text" name="button" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-button-2"));?>">
                    <label class="fjs-settings-form-label" for="url">Button link</label>
                    <input class="fjs-form-input-text" name="url" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-url-2"));?>">
                    <br>
                    <input class="fjs-form-submit" name="submit-slide-2" type="submit" value="Save changes">
                </form>
            </div>

            <div class="fjs-settings-tab" data-tab="3" style="display: none;">
                <h3 class="fjs-settings-tab-header">Slide 3</h3>
                <form class="fjs-settings-form" name="fjs-settings-form-3" method="post" action="">
                    <label class="fjs-settings-form-label" for="image">Include this slide in the slider?</label>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="show" value="yes" <?php checked( 'yes', get_option( 'fjs-slide-show-3' ) ); ?> /> Yes　<input type="radio" name="show" value="no" <?php checked( 'no', get_option( 'fjs-slide-show-3' ) ); ?> /> No
                    </div>
                    <label class="fjs-settings-form-label" for="image">Image</label>
                    <span class="fjs-settings-hint">Please use the full URL, including domain. If you're site is served over SSL, make sure to use images served over SSL and include 'https://' in the image url.</span>
                    <span class="fjs-settings-hint">Recommended image size: <?php echo get_option('fjs-image-width');?> x <?php echo get_option('fjs-image-height');?></span>
                    <input class="fjs-form-input-text" name="image" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-image-3"));?>">
                    <label class="fjs-settings-form-label" for="text">Text</label>
                    <textarea class="fjs-form-input-text" name="text" rows="5" cols="104"><?php echo stripslashes(get_option("fjs-slide-text-3"));?></textarea>
                    <label class="fjs-settings-form-label" for="button">Button text</label>
                    <input class="fjs-form-input-text" name="button" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-button-3"));?>">
                    <label class="fjs-settings-form-label" for="url">Button link</label>
                    <input class="fjs-form-input-text" name="url" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-url-3"));?>">
                    <br>
                    <input class="fjs-form-submit" name="submit-slide-3" type="submit" value="Save changes">
                </form>
            </div>

            <div class="fjs-settings-tab" data-tab="4" style="display: none;">
                <h3 class="fjs-settings-tab-header">Slide 4</h3>
                <form class="fjs-settings-form" name="fjs-settings-form-4" method="post" action="">
                    <label class="fjs-settings-form-label" for="image">Include this slide in the slider?</label>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="show" value="yes" <?php checked( 'yes', get_option( 'fjs-slide-show-4' ) ); ?> /> Yes　<input type="radio" name="show" value="no" <?php checked( 'no', get_option( 'fjs-slide-show-4' ) ); ?> /> No
                    </div>
                    <label class="fjs-settings-form-label" for="image">Image</label>
                    <span class="fjs-settings-hint">Please use the full URL, including domain. If you're site is served over SSL, make sure to use images served over SSL and include 'https://' in the image url.</span>
                    <span class="fjs-settings-hint">Recommended image size: <?php echo get_option('fjs-image-width');?> x <?php echo get_option('fjs-image-height');?></span>
                    <input class="fjs-form-input-text" name="image" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-image-4"));?>">
                    <label class="fjs-settings-form-label" for="text">Text</label>
                    <textarea class="fjs-form-input-text" name="text" rows="5" cols="104"><?php echo stripslashes(get_option("fjs-slide-text-4"));?></textarea>
                    <label class="fjs-settings-form-label" for="button">Button text</label>
                    <input class="fjs-form-input-text" name="button" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-button-4"));?>">
                    <label class="fjs-settings-form-label" for="url">Button link</label>
                    <input class="fjs-form-input-text" name="url" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-url-4"));?>">
                    <br>
                    <input class="fjs-form-submit" name="submit-slide-4" type="submit" value="Save changes">
                </form>
            </div>

            <div class="fjs-settings-tab" data-tab="5" style="display: none;">
                <h3 class="fjs-settings-tab-header">Slide 5</h3>
                <form class="fjs-settings-form" name="fjs-settings-form-5" method="post" action="">
                    <label class="fjs-settings-form-label" for="image">Include this slide in the slider?</label>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="show" value="yes" <?php checked( 'yes', get_option( 'fjs-slide-show-5' ) ); ?> /> Yes　<input type="radio" name="show" value="no" <?php checked( 'no', get_option( 'fjs-slide-show-5' ) ); ?> /> No
                    </div>
                    <label class="fjs-settings-form-label" for="image">Image</label>
                    <span class="fjs-settings-hint">Please use the full URL, including domain. If you're site is served over SSL, make sure to use images served over SSL and include 'https://' in the image url.</span>
                    <span class="fjs-settings-hint">Recommended image size: <?php echo get_option('fjs-image-width');?> x <?php echo get_option('fjs-image-height');?></span>
                    <input class="fjs-form-input-text" name="image" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-image-5"));?>">
                    <label class="fjs-settings-form-label" for="text">Text</label>
                    <textarea class="fjs-form-input-text" name="text" rows="5" cols="104"><?php echo stripslashes(get_option("fjs-slide-text-5"));?></textarea>
                    <label class="fjs-settings-form-label" for="button">Button text</label>
                    <input class="fjs-form-input-text" name="button" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-button-5"));?>">
                    <label class="fjs-settings-form-label" for="url">Button link</label>
                    <input class="fjs-form-input-text" name="url" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-slide-url-5"));?>">
                    <br>
                    <input class="fjs-form-submit" name="submit-slide-5" type="submit" value="Save changes">
                </form>
            </div>

            <div class="fjs-settings-tab" data-tab="6" style="display: none;">
                <h3 class="fjs-settings-tab-header">Options</h3>
                <form class="fjs-settings-form" name="fjs-settings-form-6" method="post" action="">
                    <label class="fjs-settings-form-label" for="image-width">Image width</label>
                    <span class="fjs-settings-hint">This will be displayed as recommended image size when editing slides.</span>
                    <span class="fjs-settings-hint">Changing this setting does not alter the actual size of uploaded images, but it will effect style settings and amp-image attributes.</span>
                    <input class="fjs-form-input-text" name="image-width" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-image-width"));?>">
                    <label class="fjs-settings-form-label" for="image-height">Image height</label>
                    <span class="fjs-settings-hint">This will be displayed as recommended image size when editing slides.</span>
                    <span class="fjs-settings-hint">Changing this setting does not alter the actual size of uploaded images, but it will effect style settings and amp-image attributes.</span>
                    <input class="fjs-form-input-text" name="image-height" type="text" size="100" value="<?php echo stripslashes(get_option("fjs-image-height"));?>">
                    <label class="fjs-settings-form-label" for="add-menu-page">Add a settings page for FJ slider in the top level menu?</label>
                    <span class="fjs-settings-hint">If set to no, the plugin settings will be available under the standard WordPress settings tab.</span>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="add-menu-page" value="yes" <?php checked( 'yes', get_option( 'fjs-add-menu-page' ) ); ?> /> Yes　<input type="radio" name="add-menu-page" value="no" <?php checked( 'no', get_option( 'fjs-add-menu-page' ) ); ?> /> No
                    </div>
                    <label class="fjs-settings-form-label" for="show-mobile">Show slider on small screen sizes?</label>
                    <span class="fjs-settings-hint">If set to no, the slider will be hidden on screen sizes small than 768 pixels in width.</span>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="show-mobile" value="yes" <?php checked( 'yes', get_option( 'fjs-show-mobile' ) ); ?> /> Yes　<input type="radio" name="show-mobile" value="no" <?php checked( 'no', get_option( 'fjs-show-mobile' ) ); ?> /> No
                    </div>
                    <label class="fjs-settings-form-label" for="custom-css">Use custom CSS for the slider?</label>
                    <span class="fjs-settings-hint">If this is set to yes, the slider will load without any styles at all, allowing you to use your own custom styles.</span>
                    <span class="fjs-settings-hint">You can find the default styles in slider.php. If you don't have access to the plugin files, you can see their content on <a href="https://github.com/fridrik-juliusson/fj-slider-wp">GitHub</a>.</span>
                    <div class="fjs-settings-radio">
                        <input type="radio" name="custom-css" value="yes" <?php checked( 'yes', get_option( 'fjs-use-custom-css' ) ); ?> /> Yes　<input type="radio" name="custom-css" value="no" <?php checked( 'no', get_option( 'fjs-use-custom-css' ) ); ?> /> No
                    </div>
                    <br>
                    <input class="fjs-form-submit" name="submit-options" type="submit" value="Save changes">
                </form>
            </div>

        </div>
    </div>

<script>
    var fjsTabButtons = document.getElementsByClassName("fjs-tab-button");
    var fjsSettingsTabs = document.getElementsByClassName("fjs-settings-tab");
    document.addEventListener("click", (event) => {
        if (event.target.classList.contains("fjs-tab-button")) {
            let tabNumber = event.target.dataset.tab;
            for (let i = 0; i < fjsSettingsTabs.length; i++) {
                if (fjsSettingsTabs[i].dataset.tab == tabNumber) {
                    fjsSettingsTabs[i].style.display = "block";
                } else {
                    fjsSettingsTabs[i].style.display = "none";
                }
            }
            for (let i = 0; i < fjsTabButtons.length; i++) {
                if (fjsTabButtons[i].dataset.tab == tabNumber) {
                    fjsTabButtons[i].classList.add("fjs-selected");
                } else {
                    fjsTabButtons[i].classList.remove("fjs-selected");
                }
            }
        }   
    });
</script>