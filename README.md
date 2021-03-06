# FJ Slider

## What is it?
This plugin allows you to add a simple, but elegant, image slider to your WordPress website.


## How to use it?
Download the plugin zip file and upload it to your WordPress installation just like any other plugin. Remember to also active the plugin in the WordPress admin area.
You can find the settings for the plugin under the settings tab (or in the FJ slider menu page, if the menu page is enabled.)

To include the slider in your template, just call the function `fjs_add_slider()` wherever you want the slider to appear.
`fjs_add_slider()` takes no arguments, and returns nothing. The function echoes out the slider.
The slider uses CSS `id` selectors in it's script, so the slider should not be included multiple times on the same page.

### AMP
If you want to include the slider on a template that will be used for AMP pages, you should instead call the function `fjs_add_amp_slider()` to add the slider as an amp-carousel element.
`fjs_add_amp_slider()` takes no arguments, and returns nothing. The function echoes out the slider(amp-carousel).

Please be aware that due to the limitations of AMP HTML, the style and functionality of the slider will be very different.
_The amp-carousel element requires the page to load amp-image-slider-0.1.js and amp-fit-text-0.1.js. These scripts must be loaded in the page header._

## Versions and change log:

### v. 1.0.4
Moved the menu page link to a lower position.

### v. 1.0.3
Fixed an issue that was introduced in 1.0.2 that caused thumbnails to be unclickable on small screens.

Tested on WordPress version 4.9.8.

### v. 1.0.2
Moved the thumbnails from right to bottom to improve usability on smartphones and to give a more uniform feel to the design when less than 5 slides are used.

Made slider images clickable.

Small refactoring of JavaScript.

Small adjustment to slider timing.


Tested on WordPress version 4.9.8.

### v. 1.0.1
Enhanced performance by only ckecking and setting default values at plugin activation.
Edited mistake in README.md

Tested on WordPress version 4.9.8.

### v. 1.0
Responsive slider for up to five slides.
Support for AMP.

Tested on WordPress versions 4.9.7 and 4.9.8.

## Contact
You can reach me through [fridrikjuliusson.com](https://fridrikjuliusson.com).