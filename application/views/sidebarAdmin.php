<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background:#191c24;">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background:#191c24;">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="<?php echo site_url("assets/bootstrap/images/logo2.png") ?>" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html">A</a>
        </div>
        <ul class="nav" style="background:#191c24;">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">

                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal" style="color:#fff;"><?=$user['nom']?></h5>
                  <span>Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                
                  
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </li>
          <li>Liste utilisateur</li>
          <li>Liste echange</li>
          <li>Deconnexion</li>
        </ul>
      </nav>