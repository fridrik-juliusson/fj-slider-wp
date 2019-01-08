<?php
$slides = array();
for ($i = 1; $i < 6; $i++) {
    $show_slide = get_option('fjs-slide-show-' . $i);
    if ($show_slide === 'yes') {
        $slide = array(
            'image' => get_option('fjs-slide-image-' . $i),
            'text' => get_option('fjs-slide-text-' . $i),
            'button' => get_option('fjs-slide-button-' . $i),
            'url' => get_option('fjs-slide-url-' . $i),
        );
        array_push($slides, $slide);
    }
}
echo '<style>';
echo ':root {';
echo '--fjs-menu-height: ' . count($slides) * 20 . '%;';
echo '}';
echo '</style>';
?>


<?php if (get_option('fjs-show-mobile') === 'no'):?>
<style>
    @media only screen and (max-width : 767px) {
        div#fjs-slider-wrap {
            display: none;
        }
    }
  
</style>
<?php endif;?>
<?php if (get_option('fjs-use-custom-css') !== 'yes'): ?>
<style>
#fjs-slider-wrap * {
    margin: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}


/* SLIDER WRAP & SLIDES */


#fjs-slider-wrap {
    width: 900px;
    height: 338px;
    position: relative;
    margin: 0;
    display: inline-block;
    max-width: 100%;
}

#fjs-slider-wrap ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
    position: relative;
    max-width: 100%;
}

#fjs-slider-wrap #fjs-slider {
    position: relative;
    width: 100%;
    height: 100%;
}

#fjs-slider-wrap #fjs-slider li {
    position: absolute;
    transition: all 2.5s;
    opacity: 0;
    display: block;
    max-width: 100%;
}
#fjs-slider-wrap #fjs-slider li.fjs-active {
    z-index: 2;
    opacity: 1;
}
#fjs-slider-wrap #fjs-slider li.fjs-active a{
    z-index: 4;
}


#fjs-slider-wrap #fjs-slider li p {
    display: block;
    width: 80%;
    color: white;
    position: absolute;
    bottom: 10%;
    padding: 20px;
    box-sizing: border-box;
    margin: 0;
    font-size: 1.4em;
    font-weight: bold;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.5);
    line-height: 140%;
}

#fjs-slider-wrap #fjs-slider li a {
    min-width: 220px;
    height: 60px;
    text-align: center;
    line-height: 60px;
    background: #af4448;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1.2em;
    position: absolute;
    color: white;
    box-shadow: 1px 3px 15px rgba(0,0,0,0.35);
    top: 40%;
    left: 5%;
    display: inline-block;
    max-width: 100%;
}

#fjs-slider-wrap #fjs-slider img {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    display: block;
    position: relative;
    max-width: 100%;
}



/* fjs-SLIDER MENU */

#fjs-slider-wrap ul#fjs-slider-menu {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 3;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    box-sizing: border-box;
    height: var(--fjs-menu-height);
    border-top-right-radius: 5px;
    padding: 0px;
    margin: 0;
}

#fjs-slider-wrap ul#fjs-slider-menu li{
    position: relative;
    margin: 0px;
    padding: 0px 10px;
    background: #37474f;
    display: inline-block;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    cursor: pointer;
    transition: all 1.4s;
}

#fjs-slider-wrap ul#fjs-slider-menu li:first-child {
    border-top-right-radius: 5px;
}

#fjs-slider-wrap #fjs-slider-menu img {
    height: 50px;
    border-radius: 3px;
}
#fjs-slider-wrap ul#fjs-slider-menu li.fjs-active{
    background: #af4448;
}

@media all and (max-width: 767px){
    #fjs-slider-wrap ul#fjs-slider-menu,
    #fjs-slider-wrap #fjs-slider li a {
        display: none;
    }
    #fjs-slider-wrap #fjs-slider li p {
        width: 100%;
        font-size: 1.2em;
        line-height: 120%;
        text-shadow: 2px 2px 3px rgba(0,0,0,0.7);
    }
}
</style>
<?php endif;?>

<?php if (count($slides) > 0):?>
<div class="fjs-slider-wrap" id="fjs-slider-wrap">
    <div class="fjs-slider" id="fjs-slider">
        <ul>
            <?php foreach ($slides as $index => $slide):?>
            <li <?php if ($index === 0):?>class="fjs-active"<?php endif;?>>
                <img src="<?php echo $slide['image']?>" alt="<?php echo $slide['text']?>">
                <p><?php echo $slide['text']?></p>
                <a href="<?php echo $slide['url']?>"><?php echo $slide['button']?></a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php if (count($slides) > 1):?>
    <ul class="fjs-slider-menu" id="fjs-slider-menu">
        <?php foreach ($slides as $index => $slide):?>
        <li <?php if ($index === 0):?>class="fjs-active"<?php endif;?> data-slide="<?php echo $index + 1;?>">
            <img src="<?php echo $slide['image']?>" alt="<?php echo $slide['text']?>">
        </li>
        <?php endforeach;?>
    </ul>
    <?php endif;?>
</div>
<?php endif;?>