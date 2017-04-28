<?php $sess = $this->mauth->getSession(); ?>
<div class="site-menubar">
  <div class="site-menubar-header">
      <div class="cover overlay">
        <img class="cover-image" src="<?php echo base_url('public/img/components/bg-user.jpg')?>" alt="...">
        <div class="overlay-panel vertical-align">
          <div class="vertical-align-middle">
            <span class="avatar avatar-lg" >
              <img src="<?php echo base_url('public/img/admin.png') ?>" alt="" >
            </span>
            <span><p class="site-menubar-user"><?php echo $sess['login_fullname'] ?> <br>NIDN. <?php echo $sess['login_username'] ?></p></span>
          </div>
        </div>
      </div>
    </div>
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">MENU UMUM</li>
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url('dashboard') ?>">
                <i class="site-menu-icon wb-home" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            <li class="site-menu-category">MENU KELOLA</li>
            <li class="site-menu-item">
              <a class="animsition-link  tooltip-primary tooltip-scale" href="<?php echo base_url('buku-ajar') ?>" data-toggle="tooltip" data-placement="top" data-original-title="Buku Ajar">
                <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                <span class="site-menu-title">Buku Ajar</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link tooltip-primary tooltip-scale" href="<?php echo site_url('penelitian-internal') ?>" data-toggle="tooltip" data-placement="top" data-original-title="Penelitian Internal">
                <i class="site-menu-icon wb-arrow-shrink" aria-hidden="true"></i>
                <span class="site-menu-title">Penelitian Internal</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link  tooltip-primary tooltip-scale" href="<?php echo site_url('penelitian-eksternal') ?>" data-toggle="tooltip" data-placement="top" data-original-title="Penelitian Eksternal">
                <i class="site-menu-icon wb-arrow-expand" aria-hidden="true"></i>
                <span class="site-menu-title">Penelitian Eksternal</span>
              </a>
            </li>
            <li class="site-menu-item tooltip-primary tooltip-scale">
              <a class="animsition-link tooltip-primary tooltip-scale" href="<?php echo site_url('luaran-lain') ?>" data-toggle="tooltip" data-placement="top" data-original-title="Luaran Lain">
                <i class="site-menu-icon fa fa-line-chart" aria-hidden="true"></i>
                <span class="site-menu-title">Luaran Lain</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link tooltip-primary tooltip-scale" href="<?php echo site_url('forum-ilmiah') ?>" data-toggle="tooltip" data-placement="top" data-original-title="Pemakalah Forum Ilmiah">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">Pemakalah Forum Ilmiah</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link  tooltip-primary tooltip-scale" href="<?php echo base_url('hki') ?>" data-toggle="tooltip" data-placement="top" data-original-title="Hak Kekayaan Intelektual">
                <i class="site-menu-icon fa fa-tasks" aria-hidden="true"></i>
                <span class="site-menu-title">Hak Kekayaan Intelektual</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>

  
