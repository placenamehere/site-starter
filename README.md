# Site Start Template Boilerplate

## Installation / Usage

1. Download the complete project package
2. Unzip/copy files into the location you will be building your site
3. Configure your development server (anything capable of parsing PHP) to serve files from the `public_html` folder
4. Start building your new site by editing the provided header and footer includes
5. Duplicate `template.php` for each new template type or page you're building
6. Maintain `reference.php` with comment markup patterns used in your project

## Overview

This is a lightweight template framework for quickly starting web site templates or prototypes, with an emphasis on file organization, defining template requirements, and emplying front end development best practics.

These tools can be used to aid rapid front end prototying, or when building out multiple front end tempaltes that are intended to be passed along to other team members or development firms for back end integration or further development.

Every client or development team I work with tends to run things a little differently, so this project attempts to be agnostic to your own development and authoring standards, which JS libraries or CSS frameworks for layout aid, if you have a favorite or whether you use a pre-processor like SASS for CSS or Coffeescript for JS. Go ahead and use this as a starting point and then add other utilites as desired.

### Source Materials

The code in this progress has been massaged and added to based on best practices over the years. It can be traced back to internal development teams and peers at some of my ongoing . Some of the nest practices for markup, css, or js includes were inspired by work on the html5 boilerplate project.

### History

As a Freelance Front End Developer often working with established development teams at interactive agencies, and with help from developers at those agencies, I've developed this boilerplate as a means to help manage HTML, CSS and JS development in parallel or before the code meets the application or CMS code. It is organized in a way to help facilitate the definition and documentation of template logic and page level variables and states, and to eliminate the need to duplicate commen page structure or content when building out 5, 10 or more static pages.

What it is not, is a PHP framework intended for use in a production environment. PHP is used *solely* to facilitate the development of production ready markup, styling and scripting. PHP is used only an "executable psudeo-code" or tempalte logic that can easily be run on many server types or locally with MAMP or similar development tools. Therefore, this framework can be useful even if the web project will ultimately be implemented using other languages or frameworks.

## File Structure

* `public_html/` - document root for templates
  * `.htaccess` - basic config just to insure documents (html5 media formats, etc) are properly served
  * `reference.php` - used to document and review markup patters (classes, etc) used throughout the build
  * `robots.txt` - blocks robots as precaution if tempaltes are shared on a public server
  * `template.php` - used as a blank templates for starting new tempaltes or pages
  * `ajax/` - place mocked up ajax responses here
  * `css/` - place CSS files here
    * `css/img/` - place images used in css / site theming here
  * `img/` - place content based images here
  * `inc/` - place reusable template fragments here
  * `js/` - place JavaScript files here
  * `libs/` - place 3rd party libs/plugins here
  * `media/` - place video or other media here
* `util/` - packaging and miniziation scripts and utilities


## To Do

* Additional inline documentation
* Add licensing info
* Migrate concatination, miniziation, and image optimization scripts into project
* Add basic template utilities for managing project state, cache busting, cookie use, get/post variable inspection
* Provide mock ajax request with success/error logic
* Link to PNHTagTest from `reference.php`

## See Also

* [Modernizr](http://www.modernizr.com/) - included mostly as an HTML5 shim for IE compatiblity & demo code placement in templates
* [jQuery](http://jquery.com/) - included to demo CDN usage w/local fallback & demo code placement in templates
* [PNHTagTest](https://github.com/placenamehere/PNHTagTest) - useful document for reviewing stying of many HTML elements and markup patterns (include it in `reference.php`)
* [HTML5 Boilerplate](https://github.com/paulirish/html5-boilerplate/) - more robust boilerplate for HTML5 site development, if you don't use it, read the source.
* [HTML5 Reset](https://github.com/murtaugh/HTML5-Reset) - more simplified 'static' boilerplate for HTML5 site development