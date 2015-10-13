﻿<?php if ($_SESSION['isv_user_id'] !== $m_info['m_user_id']){?>
<!-- do nothing -->
<?php } else { ?>
<!-- box -->
<div class="box box-widget" style="margin-top:-20px">
	<div class="box-header with-border">
   		<h3 class="box-title">Settings</h3>
   	</div><!-- /.box-header -->
    
    <!-- box-body -->
    <div class='box-body'>
    	<div class="box box-primary ">
    	<div class="box-header with-border">
       	<h3 class="box-title">Privacy Settings</h3>
       		<div class="box-tools pull-right">
           	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
           	</div><!-- /.box-tools -->
       	</div><!-- /.box-header -->
      	<div class="box-body">
        	<div class="row">
                <div class="col-md-12">
                	<form>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Show my timeline feeds to friends only
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Show my phone number in my profile
                      </label>
                    </div>
                    <div class="box-tools pull-left">
                        <button type="submit" class="btn btn-success btn-flat">Save</button>
                    </div><!-- /.box-tools -->
                    </form>
                </div>
            </div><!-- /.row -->
      	</div><!-- /.box-body -->
  	</div><!-- /.box -->
    
    
        <!-- box-body -->
    <div class='box-body'>
    	<div class="box box-primary collapsed-box">
    	<div class="box-header with-border">
       	<h3 class="box-title">Security Settings</h3>
       		<div class="box-tools pull-right">
           	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
           	</div><!-- /.box-tools -->
       	</div><!-- /.box-header -->
      	<div class="box-body">
        <h4>Change Password</h4>
        <hr />
        	<div class="row">
            	<form action="<?php echo ISVIPI_URL .'p/member' ?>" method="post">
                <div class="col-md-12">
                    <label for="full name">Current Password</label>
                    <input type="password" class="form-control" name="c_pwd" required="required">
                </div><!-- /.col-lg-6 -->
                
                <div class="col-md-6">
                	<label for="date of birth">New Password</label>
                    <input type="password" class="form-control" name="n_pwd" required="required">
                </div>
                <div class="col-md-6">
                	<label for="phone number">Repeat New Password</label>
                    <input type="password" class="form-control" name="rn_pwd" required="required">
                </div>
                <div class="box-tools pull-left col-md-6"><br />
                	<input type="hidden" name="isv_op" value="c_pwd" />
                	<button type="submit" class="btn btn-success btn-flat">Change Password</button>
                </div><!-- /.box-tools -->
                
              </form>
            </div><!-- /.row -->
      	</div><!-- /.box-body -->
  	</div><!-- /.box -->

    
    
    </div>
	
</div>
<!-- end::box -->
</div>
<!-- end::box-body -->
<?php } ?>