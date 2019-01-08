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
?>
<?php if (count($slides) > 0):?>
<?php $width = get_option('fjs-image-width'); $height = get_option('fjs-image-height');?>
<div class="fjs-slider-wrap" id="fjs-slider-wrap">
    <div class="fjs-slider" id="fjs-slider">
        <amp-carousel
        width="<?php echo $width;?>"
        height="<?php echo $height + 100;?>"
        layout="responsive"
        type="slides"
        controls
        loop
        autoplay
        delay="3500">
            <?php foreach ($slides as $index => $slide):?>
            <div class="slide<?php if ($index === 0):?> fjs-active<?php endif;?>">
            <a href="<?php echo $slide['url']?>"><amp-img src="<?php echo $slide['image']?>" alt="<?php echo $slide['text']?>" width="<?php echo $width;?>" height="<?php echo $height;?>" layout="responsive"></amp-img></a>
                <amp-fit-text layout="responsive"
                width="<?php echo $width;?>"
                height="100">
                <?php echo $slide['text']?>
                </amp-fit-text>
            </div>
            <?php endforeach;?>
        </amp-carousel>
    </div>
</div>
<?php endif;?>