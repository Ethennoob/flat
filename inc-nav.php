<div id="upper-menu-container" style="margin-top: 0px;">
        <div id="page-menu-wrapper">
            <ul class="main left no-js">
                <li><a href="index.php" class="top-menu home"><span aria-hidden="true" class="icn_logo"></span></a></li>
                <li class="submenu-item mobile-class">
                    <a href="#" class="top-menu">
                        产品
                    </a>
                    <div class="dropdown-menu categories">
                        <div class="menu-header">
                        <ul id="menu-nav-menu-1" class="menu">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-98952"><a href="picshow.php">设计</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-98952"><a href="buy.php">购买</a></li>
                        </ul>
                        </div>
                    </div>
                </li>
                <li><a href="contact.php" class="top-menu shop">交流</a></li>

                <li class="mobile-class">
                    <div class="top-menu search">
                        <span class="label">搜索<span class="cursor"></span></span>
                        <div class="formsearch">
                            <form id="search" action="search.php" method="get" target="_top">
                                <input type="text" name="q" class="search-input"/>
                                <span class="gobutton"><input type="submit" class="search_icon gobutton" aria-hidden="true" value=""></span>
                            </form>
            
                        </div>
                    </div>
                </li>
            </ul>
            <ul style="float:right; right:-1px; position:relative;" class="main right no-js">
                <li class="submenu-item mobile-class">
                    <a href="#" class="top-menu">关注我们</a>

                    <div class="dropdown-menu follow">
                        <ul class="social">
                            <li>
                                <a href="http://feeds.feedburner.com/designmodo" title="" class="rss" rel="nofollow" target="_blank"><span aria-hidden="true" class="icn_rss"></span>RSS</a>
                            </li>	  
                            <li>
                                <a href="http://www.twitter.com/designmodo" title="" class="twitter" rel="nofollow" target="_blank"><span aria-hidden="true" class="icn_twitter"></span>Twitter</a>
                            </li>
                            <li>
                                <a href="http://www.facebook.com/designmodo" title="" class="facebook" rel="nofollow" target="_blank"><span aria-hidden="true" class="icn_facebook"></span>Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.google.com/+DesignModo" title="" class="googleplus" rel="nofollow" target="_blank"><span aria-hidden="true" class="icn_googleplus"></span>Google+</a>
                            </li>
                            <li>
                                <a href="http://dribbble.com/designmodo" title="" class="dribbble" rel="nofollow" target="_blank"><span aria-hidden="true" class="icn_dribbble"></span>Dribbble</a>
                            </li>
                        </ul>
                        
                    </div>
                </li>
                <li class="submenu-item mobile-class">
                    <?php 
                    if (user_name()==null) {
                     echo "<a href='login.php' class='top-menu profile'>
                     <label>登陆</label>
                 </a>";
             }else{
                echo "<a href='#' class='top-menu'>".user_name();
                echo "</a>
                <div class='dropdown-menu categories'>
                    <div class='menu-header'><ul id='menu-nav-menu-1' class='menu'>
                        <li class='menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18124'><a href='do.php?c=logout'>注销</a>";
                        }

                        ?>
                    </li>

                </ul></div>                    </div>
            </li>
        </ul>
        </div>
    </div>
    