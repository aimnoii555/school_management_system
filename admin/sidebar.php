
<!-- Navbar -->
  <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-dark">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="" class="nav-link">หน้าหลัก</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">ติดต่อ</a>
              </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
              <!-- Navbar Search -->
              <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                      <i class="fas fa-search"></i>
                  </a>
                  <div class="navbar-search-block">
                      <form class="form-inline">
                          <div class="input-group input-group-sm">
                              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                              <div class="input-group-append">
                                  <button class="btn btn-navbar" type="submit">
                                      <i class="fas fa-search"></i>
                                  </button>
                                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </li>

              <!-- Messages Dropdown Menu -->
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-comments"></i>
                      <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                      <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                              <div class="media-body">
                                  <h3 class="dropdown-item-title">
                                      Brad Diesel
                                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                  </h3>
                                  <p class="text-sm">Call me whenever you can...</p>
                                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                              </div>
                          </div>
                          <!-- Message End -->
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                              <div class="media-body">
                                  <h3 class="dropdown-item-title">
                                      John Pierce
                                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                  </h3>
                                  <p class="text-sm">I got your message bro</p>
                                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                              </div>
                          </div>
                          <!-- Message End -->
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                              <div class="media-body">
                                  <h3 class="dropdown-item-title">
                                      Nora Silvester
                                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                  </h3>
                                  <p class="text-sm">The subject goes here</p>
                                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                              </div>
                          </div>
                          <!-- Message End -->
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                  </div>
              </li>
              <!-- Notifications Dropdown Menu -->
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-bell"></i>
                      <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                      <span class="dropdown-item dropdown-header">15 Notifications</span>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <i class="fas fa-envelope mr-2"></i> 4 new messages
                          <span class="float-right text-muted text-sm">3 mins</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <i class="fas fa-users mr-2"></i> 8 friend requests
                          <span class="float-right text-muted text-sm">12 hours</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <i class="fas fa-file mr-2"></i> 3 new reports
                          <span class="float-right text-muted text-sm">2 days</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                      <i class="fas fa-expand-arrows-alt"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../logout" title="ออกจากระบบ">
                      <i class="fa fa-sign-out-alt"></i>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="<?php $site_url ?>" class="brand-link">
              <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Admin</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-header">Dasboard</li>
                      <li class="nav-item has-treeview">
                          <a href="<?= $site_url ?>dashboard" class="nav-link">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>แผงควบคุม</p>
                          </a>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p> จัดการบัญชีผู้ใช้</p>
                              <i class="fas fa-angle-left right"></i>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>user-account?user=counseller" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ที่ปรึกษา</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>user-account?user=teacher" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>คุณครู</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>user-account?user=student" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>นักศึกษา</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>user-account?user=parents" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ผู้ปกครอง</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>user-account?user=librarian" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ผู้ดูแลห้องสมุด</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการชั้นเรียน</p>
                              <i class="fas fa-angle-left right"></i>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>sections" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ส่วนต่างๆ</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>classes" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ห้อง</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>courses" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>หลักสูตร</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>subjects" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>วิชา</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>lessons" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>บทเรียน</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการกิจกรรมชั้นเรียน</p>
                              <i class="fas fa-angle-left right"></i>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $site_url ?>periods" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ระยะเวลา</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?php $site_url ?>timetable" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ตารางเวลา</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>ผู้ปกครอง</p>
                                  </a>
                              </li>
                              
                          </ul>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการสอบ</p>
                              <i class="fas fa-angle-left right"></i>
                          </a>
                          
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการการเข้าร่วมกิจกรรม</p>
                              <i class="fas fa-angle-left right"></i>
                          </a>
                         
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการบัญชี</p>
                              <i class="fas fa-angle-left right"></i>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fas fa-circle nav-icon"></i>
                                      <p>รายละเอียดค่าธรรมเนียมนักศึกษา</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการกิจกรรม</p>

                          </a>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการอื่นๆ</p>

                          </a>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>จัดการระบบ</p>

                          </a>
                      </li>



                  </ul>


              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">