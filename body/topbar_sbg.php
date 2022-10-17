<nav class="navigation white">
            <div class="nav-wrapper ">
                <a href="index.php?page=home" class="button-collapse sidenav-trigger show-on-large menu_link" data-target="mobile_menu">
                    <i class="material-icons black-text">
                        menu
                    </i>
                </a>
                <a href="#" class="brand-logo black-text"><b>Logo</b></a>
                <ul id="nav-mobile " class="navi_tab hide-on-med-and-down">
                  <li><a href="index.php?page=home" class="black-text">Accueil</a></li>
                  <li><a href="index.php?page=mediatheque" class="black-text valign-wrapper dropdown-trigger" data-target="media_drop" >Mediathèque <span class="material-icons">expand_more</span></a></li>
                  <li class="active"><a href="index.php?page=blog" class="black-text">Blog</a></li>
                  <li><a href="index.php?page=contact" class="black-text">Contacts</a></li>
                </ul>
                <!--dropdown part-->
                <ul id='media_drop' class='dropdown-content'>
                  <li><a href="#!">one</a></li>
                  <li><a href="#!">two</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li><a href="#!">three</a></li>
                  <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                  <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
              </ul>
                <ul class="log_sign nav-mobile right hide-on-small-only">
                    <li><a class="black-text">Login</a></li>
                    <li><button class="red sign white-text">Sign Up</button></li>

                </ul>
                <form class="search_form">
                    <div class="input-field">
                      <input id="search" type="search" placeholder="rechercher..." validate>
                      <label class="label-icon" for="search"><i class="material-icons grey-text">search</i></label>
                      <i class="material-icons">close</i>
                    </div>
                </form>
               
                <ul id="mobile_menu" class="sidenav">
                    <li class="li_user_view valign-wrapper"><div class="user-view">
                        
                          <img src="./image/welcome.jpg" class="responsive-img">
                        
                        <!--a href="#user"><img class="circle" src="images/yuna.jpg"></!--a-->
                        <!--a href="#"><span class="white-text name">Bienvenue</span></!--a-->
                        <!--a href="#email"><span class="white-text email">jdandturk@gmail.com</span></!--a-->
                      </div></li>
                      <li><a href="index.php?page=home"  class="waves-effect"><i class="material-icons">home</i>Accueil</a></li>
                      <li><a href="index.php?page=mediatheque"  class="waves-effect"><i class="material-icons">video_library</i>Mediathèque</a></li>
                      <li class="active"><a href="index.php?page=blog"  class="waves-effect"><i class="material-icons">local_library </i>Blog</a></li>
                      <li><a href="index.php?page=contact"  class="waves-effect"><i class="material-icons">support_agent</i>First Link With Icon</a></li>
                      <li><div class="divider"></div></li>
                      <li><a class="subheader">Partie Connection</a></li>
                      <li><div class="divider"></div></li>
                      <li><a href="index.php?page=signup" class="waves-effect"><i class="material-icons">person</i>Sign in</a></li>
                      <li><a href="index.php?page=login" class="waves-effect"><i class="material-icons">login</i>Login</a></li>
                </ul>
            </div>
            
        </nav>