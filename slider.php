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
    font-family: "メイリオ",Meiryo,"Hiragino Kaku Gothic Pro","ヒラギノ角ゴ Pro W3","ＭＳ Ｐゴシック","Lucida Grande","Lucida Sans Unicode",Arial,Verdana,sans-serif;
}


/* SLIDER WRAP & SLIDES */

#fjs-slider-wrap {
    position: relative;
    margin: 0;
    display: block;
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
    opacity: 0;
    display: block;
    max-width: 100%;
    z-index:-1;
}
#fjs-slider-wrap #fjs-slider li.fjs-active {
    z-index: 2;
    opacity: 1;
    position: relative;
    transition: opacity 2s;
}
#fjs-slider-wrap #fjs-slider li.fjs-active a{
    z-index: 4;
}


#fjs-slider-wrap #fjs-slider li p {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    color: white;
    position: absolute;
    bottom: 5%;
    padding: 0px 20px;
    box-sizing: border-box;
    margin: 0;
    font-size: 1.4em;
    font-weight: bold;
    text-shadow: 0px 0px 40px rgba(255,255,255,0.5), 2px 2px 3px rgba(0,0,0,0.6), 1px 3px 5px rgba(0,0,0,0.3);
    line-height: 140%;
}

#fjs-slider-wrap #fjs-slider li a {
    min-width: 300px;
    text-align: center;
    background: linear-gradient(45deg, #ffa4a2, #e57373 10%, #af4448 90%);
    border-radius: 25px;
    text-decoration: none;
    font-size: 1.2em;
    color: white;
    box-shadow: 1px 3px 15px rgba(0,0,0,0.35);
    display: inline-block;
    max-width: 100%;
    font-weight: normal;
    text-shadow: none;
    padding: 30px 10px;
    margin-left: 20px;
}

#fjs-slider-wrap #fjs-slider img {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    display: block;
    position: relative;
    max-width: 100%;
}

/* fjs-slider-counter */

#fjs-slider-counter.fjs-slider-counter {
    width: 100%;
    display: flex;
    flex-direction: row;
    background: #37474f;
    z-index: 4;
    position: relative;
}
#fjs-slider-counter.fjs-slider-counter span {
    display: block;
    flex-grow: 1;
    width: 100%;
    padding: 10px 7px;
    text-align: center;
    box-sizing: border-box;
    cursor: pointer;
    transition: all 1.2s;
}
#fjs-slider-counter.fjs-slider-counter img {
    display: block;
    flex-grow: 1;
    max-width: 100%;
    margin: 0 auto;
    border-radius: 5px;
}
#fjs-slider-counter.fjs-slider-counter span.fjs-active {
    background: #e57373;
}

@media all and (max-width: 767px){
    #fjs-slider-wrap #fjs-slider li p {
        padding: 0px 10px;
    }

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
    #fjs-slider-counter.fjs-slider-counter span {
        padding: 8px 4px;
    }
}
</style>
<?php endif;?>

<?php if (count($slides) > 0):?>
<div class="fjs-slider-wrap" id="fjs-slider-wrap">
    <div class="fjs-slider" id="fjs-slider">
        <ul>
            <?php foreach ($slides as $index => $slide):?>
            <li <?php if ($index === 0):?>class="fjs-active" <?php endif;?> data-link="<?php echo $slide['url']?>">
                <img src="<?php echo $slide['image']?>" alt="<?php echo $slide['text']?>">
                <p><span><?php echo $slide['text']?></span><a href="<?php echo $slide['url']?>"><?php echo $slide['button']?></a></p>
                
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<?php if (count($slides) > 1):?>
<div class="fjs-slider-counter" id="fjs-slider-counter">
    <?php foreach ($slides as $index => $slide):?>
    <span id="fjs-slider-counter-<?php echo $index + 1;?>"<?php if ($index === 0):?>class="fjs-active"<?php endif;?> data-slide="<?php echo $index + 1;?>">
        <img src="<?php echo $slide['image']?>" alt="<?php echo $slide['text']?>">
    </span>
    <?php endforeach;?>
</div>
<?php endif;?>
<?php endif;?>