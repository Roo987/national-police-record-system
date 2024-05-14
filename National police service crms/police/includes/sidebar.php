<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/police.jpg" class="img-circle" width="60"></a></p>
                   <?php $query=mysqli_query($bd, "select username from police where username='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
              	  <h5 class="centered"><?php echo htmlentities($row['username']);?></h5>
                  <?php } ?>
              	  	
                  
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Manage Recorded FIR</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="notprocess-complaint.php">Pending crime reports</a></li>
                          <li><a  href="inprocess-complaint.php">Crime reports in progress</a></li>
                          <li><a  href="closed-complaint.php">Closed crime reports</a></li>
                        
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="profile.php" >
                          <i class="fa fa-book"></i>
                          <span>Police profile</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="change-password.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Change password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="logout.php" >
                          <i class="fa fa-dashboard"></i>
                          <span>Logout</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>