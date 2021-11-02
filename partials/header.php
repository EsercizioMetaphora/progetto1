 <!--========  header area =========-->
 <header class="header header-three">

     <div class="header-bottom-area">
         <div class="container">
             <div class="header-style-center">
                 <div class="logo">
                     <a href="index.html">
                         <img src="assets/images/logo/logo-3.png" alt="" />
                     </a>
                 </div>

                 <div class="main-menu-area text-center">
                     <nav class="navigation-menu">
                         <ul>
                             <?php foreach (WEBSITE_MENU as $menu_item) : ?>
                                 <li><a href="<?php echo $menu_item['url'] ?>" alt="<?php echo $menu_item['alt'] ?>"><?php echo $menu_item['title'] ?></a></li>
                             <?php endforeach ?>
                         </ul>
                     </nav>
                 </div>

                 <div class="header-three-right-side">

                     <a href="action.html" class="sign-up-action-button btn-medium btn">
                         Call To Action
                     </a>
                     <!-- mobile menu -->
                     <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                         <i></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     
 </header>
 <!--======== End of header area  =========-->