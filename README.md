# FJ Slider

## What is it?
This plugin allows you to add a simple, but elegant, image slider to your WordPress website.


## How to use it?
Download the plugin zip file and upload it to your WordPress installation just like any other plugin. Remember to also active the plugin in the WordPress admin area.
You can find the settings for the plugin under the settings tab (or in the FJ slider menu page, if the menu page is enabled.)

To include the slider in your template, just call the function `fjs_add_slider()` wherever you want the slider to appear.
`fjs_add_slider()` takes no arguments, and returns a `string`.
The slider uses CSS `id` selectors in it's script, so the slider should not be included multiple times on the same page.

### AMP
If you want to include the slider on a template that will be used for AMP pages, you should instead call the function `fjs_add_amp_slider()` to add the slider as an amp-carousel element.
`fjs_add_amp_slider()` takes no arguments, and returns a `string`.

Please be aware that due to the limitations of AMP HTML, the style and functionality of the slider will be very different.
_The amp-carousel element requires the page to load amp-image-slider-0.1.js and amp-fit-text-0.1.js. These scripts must be loaded in the page header._


## Versions and change log:

### v. 1.0
Responsive slider for up to five slides.
Support for AMP.

Tested on WordPress versions 4.9.7 and 4.9.8.


## Contact
You can reach me through [fridrikjuliusson.com](https://fridrikjuliusson.com).