  <div class="agileits_w3layouts_menu">
      <div class="shy-menu">
          <a class="shy-menu-hamburger">
              <span class="layer top"></span>
              <span class="layer mid"></span>
              <span class="layer btm"></span>
          </a>
          <div class="shy-menu-panel">
              <nav class="menu menu--horatio link-effect-8" id="link-effect-8">
                  <ul class="w3layouts_menu__list">
                      <li class=" {{ Request::is('/') ? 'active' : '' }}"><a href="/">الرئيسية</a>
                      </li>
                      <li
                          class=" {{ Route::current()->getName() == 'products' || Route::current()->getName() == 'product.detail' ? 'active' : '' }}">
                          <a href="/products">منتجاتنا</a>
                      </li>
                      <li class=" {{ Route::current()->getName() == 'contact' ? 'active' : '' }}"><a
                              href="/contact">اتصل
                              بنا</a></li>
                  </ul>
              </nav>
          </div>
          <div class="clearfix"> </div>
      </div>
  </div>
