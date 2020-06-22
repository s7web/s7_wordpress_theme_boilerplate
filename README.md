# S7 design wordpress theme boilerplate 

### HOW TO USE S7 boilerplate

#### folder sturcture : 
```bash 
   |- assets/
   |  |- images/
   |  |- js/
   |  |- sass/
   |- dist/
   |- functions/
   |  |- admin/
   |     |- admin-scripts.php
   |     |- admin-setup.php
   |     |- admin-style.php
   |  |- themes/
   |     |- theme-scripts.php
   |     |- theme-setup.php
   |     |- theme-style.php
   |  |- helpers/
   |- inc/
   |- includes/
   |- template-parts/
   |- function.php


``` 
### How to start:
*  this theme use webpack to compile JS and SASS, and you have to install node_modules in root of theme 
  
      ``` npm install ```
 *  Run theme: 
  
      ``` npm run dev ```
      
      this command will  compile  all js and sass file directly into the folder dist
  
  *  Prepare for production: 
   
     ``` npm run build ```

     this command wil bind and minify all files js and sass files



### STYLES: 
  * in the file  ```/assets/sass/app.scss``` include other scss files that you want to be compailed on fronted.
  * for customize dashboard style include scss files in ```/ assets/sass/dashboard.scss``` file
  
  * if you want to register new css library for ***frontend***, you have to register it in file ``` /functions/themes/theme-style.php```

  * if You want to add new library style in ***dashboard***, register new file in file:
  ``` /functions/admin/admin-style.php```

### SCRIPTS: 
 * import all your frontend scripts into ```/assets/js/theme/indes.js``` and , scripts for dashboard import  into  ```/assets/js/admin/indes.js``` file

    All those scripts will be compiled into ```/dist/js/admin-bind.js```  and ```/dist/js/frontend-bind.js``` 

   ***REGISTER NEW LIBRARIES:***
  *  Frontend:  ``` /functions/admin/admin-script.php```
  *  Dashboard:  ``` /functions/admin/admin-script.php```

##################################################

Bootstrap 4.4.1
Popper.js 1.16.0

#Nav Walekr menu

wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'bs-example-navbar-collapse-1',
    'menu_class'      => 'navbar-nav mr-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) ); -->

Enabled theme support for features Menu, Title tag, Post thumbnails, 