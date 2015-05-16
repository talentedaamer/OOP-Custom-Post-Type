### OOP-Custom-Post-Type.
-----------------------------
Generate Custom Post Types with a single line of code by extending the class.

### Usage.
----------------
Drop the file in your theme inc folder and add it in functions.php
```
require get_template_directory() . '/inc/oop-cpt-generator.php';

```
now initiate the class and register the post types.

```
// features post type
$portfolio_args = array(
	'supports' => array('title', 'editor'),
);
new OOP_CPT_Generator( 'portfolio', $portfolio_args );
```

### Authors and Contributors
----------------------------
OOP Post Type Generator is written by Aamer Shahzad @talentedamer a WordPress theme developer on WordPress.org and OOPthemes.com

### Support or Contact
----------------------
Please visit [OOPThemes](http://oopthemes.com) support forum if you have any issue regarding the use of OOP Post Type Genertator.
