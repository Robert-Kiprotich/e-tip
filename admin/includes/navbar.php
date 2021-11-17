
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-success">
      <div class="text-center navbar-brand-wrapper align-items-center justify-content-center " class="h7">
        <a class="navbar-brand brand-logo mr-5" href="index.php"> Admin</a>
        <a class="navbar-brand brand-logo-mini" href="index.php">Admin</a>
      </div>
      
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul>
          
          
        </ul>
        <?php  if (isset($_SESSION['username'])) : ?>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
      
            <a class="nav-link count-indicator dropdown-toggle"   id="notificationDropdown" href="../index.php?logout='1'" name="logout" data-toggle="dropdown">
              Logout
            </a>
            <?php endif ?>
        </ul>
      </div>
    </nav>