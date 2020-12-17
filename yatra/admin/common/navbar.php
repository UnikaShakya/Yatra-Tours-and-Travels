<div class="wrapper">
    <!-- Start of logo -->
    <div id="logo" class="logo">
        <div class="toggle-nav">
            <button onclick="navFunc()" title="Toggle Navigation" style="background-color: transparent;outline:none;border: none;cursor: pointer;" id="nav-btn">
                <span style="font-size: 1.2rem;">
                    <i class="fa fa-bars" style="color: white;margin-left: 10px;"></i>
                </span>
            </button>
        </div>
       <a href='../home.php'><img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($logo); ?>" height='60px' width='80px'></a>
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn"><i class="fa fa-user"></i>&nbspAdmin&nbsp<i class="fa fa-caret-down"></i></button>
              <div id="myDropdown" class="dropdown-content">
                <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=changecr&pageName=changecr.php'><i class='fas fa-cog'></i>&nbspSetting</a>" ?>
                <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=logout&pageName=logout.php'><i class='fas fa-power-off'></i>&nbspLog Out</a>" ?>
              </div>
            </div>
    </div>
    <!-- End of logo -->
    <!-- Start of navbar --> 
    <div id="sidebar" class="vertical-menu">
       <!--  <div id="side"> -->
            <?php echo "<a class='active' href='".ROOT_URL."/admin/admin.php?page=home&pageName=index.php'><i class='fa fa-home'></i>&nbspHome</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=slider&pageName=index.php'><i class='fa fa-sliders-h'></i>&nbspSlider</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=about&pageName=index.php&pageName=index.php&pageName=index.php&pageName=index.php'><i class='fas fa-info'></i>&nbsp&nbsp&nbsp&nbspAbout</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=gallery&pageName=index.php&pageName=index.php'><i class='fa fa-film'></i>&nbspGallery</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=packages&pageName=index.php'><i class='fa fa-box'></i>&nbspPackages</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=CustomerInfo&pageName=index.php&pageName=index.php&pageName=index.php'><i class='fas fa-id-badge'></i>&nbspCustomerInfo</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=team&pageName=index.php'><i class='fa fa-users'></i>&nbspTeam</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=feedback&pageName=index.php&pageName=index.php'><i class='fa fa-envelope'></i>&nbspFeedbacks</a>" ?>
            <?php echo "<a href='".ROOT_URL."/admin/admin.php?page=setting&pageName=index.php'><i class='fa fa-cog'></i>&nbspSetting</a>" ?>
            <?php echo "<a href=''</a>" ?>
        <!-- </div> -->
    </div>
    <!-- End of navbar   -->
    <div class="body">
      <div class="">
        <?php 
            $pagepath = 'pages/'.$page.'/'.$pageName;
            if($pagepath!=NULL)
            {
              require_once $pagepath;
            }
        ?>
        </div>
    </div>
</div>