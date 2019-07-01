<nav class="navbar navbar-default bg-green">

  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " href="#">BR</a>
      
    </div>

   

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
       <span class="sr-only">Toggle navigation</span> SIDENAV
      </a></li>
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
       <?php $this->load->library('session');
        if($this->session->has_userdata('login',true)){?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></a></li>
        <li class="dropdown user user-menu">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
              <img src="<?=base_url()?>assets/images/thumb_img/avatar.PNG" class="user-image img-circle" alt="User Image"> <span> </span><?=$this->session->name?></span> <span class="caret"></span></a>
          <ul class="dropdown-menu ">
              
            <li class="user-header bg-green">
                <img src="<?=base_url()?>/assets/images/thumb_img/<?=$this->session->img?>" class="img-circle" alt="User Image">
                <!--Name of the User-->
                <p class="center"> <?=$this->session->full_name?></p>
                <!-- User Level-->
               
                <p><?=$this->session->usr_type?></p>
                </li>
          
            <li role="separator" class="divider"></li>
            <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="btn btn-default btn-flat pull-right"><a href="<?=base_url('home/logout')?>">Log Out</a></div></li>
          </ul>
        </li>
      </ul><?php }?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- 
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less 
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>/assets/images/thumb_img/<?=$this->session->img?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->full_name?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form 
      <!-- sidebar menu: : style can be found in sidebar.less 
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
       
    </section>
    <!-- /.sidebar 
  </aside> -->





  