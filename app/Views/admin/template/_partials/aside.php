<!-- Sidebar  -->
<div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="<?=base_url()?>/dashboard-admin">
               <img src="<?=base_url()?>/assets_admin/images/logo.png" class="img-fluid" alt="">
               <span style="font-size:unset;">Dashboard Website</span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="line-menu half start"></div>
                     <div class="line-menu"></div>
                     <div class="line-menu half end"></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                     <li>
                        <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="index.html">Dashboard 1</a></li>
                        </ul>
                     </li>
            
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Website</span></li>
                     <li><a href="<?=base_url()?>/admin/coupons"><i class="ri-pages-line"></i>Karir</a></li>
                     <li><a href="<?=base_url()?>/admin/faqs"><i class="ri-pages-line"></i>FAQ</a></li>
                     <li><a href="<?=base_url()?>/admin/press-releases"><i class="ri-pages-line"></i>Press Release</a></li>
                     <li><a href="<?=base_url()?>/admin/coupons"><i class="ri-pages-line"></i>Galeri</a></li>
                     <li><a href="<?=base_url()?>/admin/coupons"><i class="ri-pages-line"></i>Coupon</a></li>

                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Master Data</span></li>
                     <li>
                        <a href="#user" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>User Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html">User</a></li>
                           <li><a href="sign-up.html">Group</a></li>
                           </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>