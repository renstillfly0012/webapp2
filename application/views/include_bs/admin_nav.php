<div id="mySidenav" class="sidenav">
  <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>/assets/images/thumb_img/<?=$this->session->img?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->full_name?></p>
          <p href="#"><i class="fa fa-circle text-success"></i> Online</p>
        </div>
      </div>
      <hr/> 
      
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?=base_url('home/dashboard')?>"><span class="fa fa-area-chart"></span> Dashboard</a>
  <a href="<?=base_url('item/index')?>"><span class="fa fa-laptop"></span> Products</a>
  <a href="<?=base_url('home/users')?>"><span class="fa fa-users"></span> Users</a>
  <a href="<?=base_url('home/showCalendar')?>"><span class="fa fa-calendar"></span> Calendar</a>
  <a href="#"><span class="fa fa-file-text-o"></span> Report</a>
  <a class="btn-danger" href="<?=base_url('home/logout')?>"><span class="fa fa-arrow-circle-o-left"></span> Log Out</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&nbsp;&#9776;</span>