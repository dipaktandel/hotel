<style>
    .all_bk .table>tbody>tr>td{ vertical-align: middle !important;}
    .all_bk .table thead tr th{ font-size:13px; text-align:center;}
    .all_bk .table-bordered>tbody>tr>td{ font-size:12px;}
    .all_bk .md-checkbox label > .box{height: 15px;width: 15px;}
    .all_bk .btn{ font-size:12px;}
    .all_bk .form-control{ font-size:12px;height: auto;padding: 2px;}
    .all_bk .portlet.box > .portlet-title > .caption {
        padding: 18px 0 9px 0;
    }
	.select2-search input {
   
    display: none;
    
}
button, input, select, textarea {
    display: none;
    
}
.select2-dropdown-open .select2-choice {
   
    display: none; 
    
}
#s2id_autogen1{
	display:none;
}

#sample_editable_1_filter.all_bk .form-control {
	
    border-radius: 0px !important;
    font-size: 12px;
    height: auto;
    padding: 2px;
}
.all_bk .form-control {
    border-radius: 0px !important;
	
    font-size: 12px;
    height: auto;
    padding: 2px;
}
td.sorting_1  {
    height: 60px;
    width: 60px;
	text-align: center;
	padding:0;
}
td.sorting_1 img {
    text-align: center;
    margin: 0 auto;
	padding:0;
}
</style>
<!---->
<div class="row all_bk">


    <!--popup-->
    <!--<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Confirm Header</h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                         Body goes here...
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                    <button data-dismiss="modal" class="btn blue">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
    <!--popup end-->

    <div class="form-body">
        <!-- 17.11.2015-->
            <?php if($this->session->flashdata('err_msg')):?>
            <div class="form-group">
                <div class="col-md-12 control-label">
                    <div class="alert alert-danger alert-dismissible text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong><?php echo $this->session->flashdata('err_msg');?></strong>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if($this->session->flashdata('succ_msg')):?>
            <div class="form-group">
                <div class="col-md-12 control-label">
                    <div class="alert alert-success alert-dismissible text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong><?php echo $this->session->flashdata('succ_msg');?></strong>
                    </div>
                </div>
            </div>
            <?php endif;?>
    </div>


    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->




        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i>List of All Guest's
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">

                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="<?php echo base_url();?>dashboard/add_guest">
                                	<button  class="btn green">
                                    	Add New  <i class="fa fa-plus"></i>
                                	</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <table class="table table-striped table-hover table-bordered table-scrollable" id="sample_editable_1">
                        <thead>
                        <tr>
                           <!-- <th scope="col">
                                Select
                            </th>-->
							<th scope="col">
                                Photo
                            </th>
                            <th scope="col">
                                 Name
                            </th>
                            <th scope="col">
                                 Location
                            </th>
                           <!-- <th scope="col">
                                 Address
                            </th>-->
                            <th scope="col">
                                 Contact Number
                            </th>
                            <!--<th scope="col">
                                 Email Id
                            </th>-->
                            <th scope="col">
                                 Gender
                            </th>
                            <th scope="col">
                                Age
                            </th>

                            <th scope="col">
                                Occupation
                            </th>
                            <th scope="col">
                                Marital Status
                            </th>
                            <!--<th scope="col">
                                Id Type
                            </th>-->
                            
                            <!--<th scope="col">
                                Id Proof
                            </th>-->
                            <th scope="col">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(isset($guest) && $guest):
							
                            $i=1;
                            foreach($guest as $gst):
                                $class = ($i%2==0) ? "active" : "success";
                                $g_id=$gst->g_id;
                                ?>
                                <tr>
                                   <!-- <td width="50">
                                        <div class="md-checkbox pull-left">
                                            <input type="checkbox" id="checkbox1" class="md-check">
                                            <label for="checkbox1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                            </label>
                                        </div>
                                    </td>-->
									
									<td>
                                   
                                    <img  width="60px" height="60px" src="<?php echo base_url();?>upload/guest/<?php if( $gst->g_photo_thumb== '') { echo "no_images.png"; } else { echo $gst->g_photo_thumb; }?>" alt=""/>
                                    
                                    
                                    <?php
										/*echo $gst->g_photo ;
										echo $gst->g_photo ."_thumb"; */
									?>
                                    
                                    </td>
									
                                    <td>
                                        <?php echo $gst->g_name ?>
                                    </td>
                                    <td>
									<?php
									if($gst->g_pincode!=""){
									echo $gst->g_city."-".$gst->g_pincode;
									} 
									else{
										echo $gst->g_city;
									}?>
                                    </td>
                                    <!--<td>
                                        <?php echo $gst->g_address ?>
                                    </td>-->
                                    <td>
                                        <?php echo $gst->g_contact_no ?>
                                    </td>
                                    <!--<td>
                                        <?php echo $gst->g_email ?>
                                    </td>-->
                                    <td>
                                        <?php echo $gst->g_gender ?>
                                    </td>
                                    <td>
                                        <?php 
										
										$now = time();
										$date1 = strtotime($gst->g_dob);
										$datediff = $now-$date1;
										$datediff = floor($datediff/(60*60*24*365));
										echo $datediff;
										
											//$var = $gst->g_dob;
											//echo $var;
											/*$var = date_create($gst->g_dob);
											echo $var;
											$d = date("Y/m/d");
											//echo $d;
											$current_date=date_create($d);
											//echo $current_date;
											$diff=date_diff($current_date, $var);
											
											echo $diff;*/
										
										?>
                                    </td>
                                    <td>
                                        <?php echo $gst->g_occupation ?>
                                    </td>
                                    <td>
                                        <?php echo $gst->g_married ?>
                                    </td>
                                   <!-- <td>
                                        <?php $m= $gst->g_id_type;
                                        if($m==1){
                                            echo "Passport";
                                        }
                                        elseif($m==2){ echo "PAN Card";}
                                        elseif($m==3){echo "Voter Card";}
                                        elseif($m==4){echo "Adhar Card";}
                                        elseif($m==5){echo "Driving License";}
                                        elseif($m==6){echo "Others";}


                                        ?>
                                    </td>-->
                                    
                                   
                                        <?php //echo $gst->g_photo ?>
                                   
                                    <!--<td>
                                        <img  width="100%" src="<?php //echo base_url();?>upload/<?php //if( $gst->g_id_proof== '') { echo "no_images.png"; } else { echo $gst->g_id_proof; }?>" alt=""/>
										<?php //echo $gst->g_id_proof ?>
                                    </td>-->


                                    <td>
                                        <!--<button class="btn btn-danger pull-right" data-toggle="confirmation" data-singleton="true">Delete</button>-->
                                        <a href="<?php echo base_url() ?>dashboard/delete_guest?g_id=<?php echo $gst->g_id;?>" class="btn btn-danger pull-right" data-toggle="modal">Delete</a>                             
                                        <a href="<?php echo base_url();?>dashboard/edit_guest?g_id=<?php echo $gst->g_id; ?>" class="btn blue pull-right" data-toggle="modal">Edit</a>
                                    </td>
                                </tr>


                            <?php endforeach; ?>
                        <?php endif; ?>


                        </tbody>
                    </table>
              
            </div>


        </div>

        <!-- END SAMPLE TABLE PORTLET-->


        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <!--
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-eye-slash"></i>All Rooms
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
                        	<?php
        $form = array(
            'class' 			=> 'form-horizontal',
            'method'			=> 'post'
        );

        $dropdown = array(
            '5'  				=> '5',
            '10'    			=> '10',
            '25'   				=> '25',
            '50'				=> '50',
            '100'				=> '100'
        );

        $js = 'class="form-control" onChange="this.form.submit();"';

        $pages = ($this->session->flashdata('pages')) ? $this->session->flashdata('pages') : 5;

        echo form_open('dashboard/all_rooms',$form);
        ?>
                        	<div class="form-group">
                                <label class="col-md-3 control-label">
                                    Rooms Per Page
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <?php echo form_dropdown('pages', $dropdown, $pages, $js);?>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close();?>
                            <?php if($this->session->flashdata('err_msg')):?>

                            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong><?php echo $this->session->flashdata('err_msg');?></strong>
                            </div>

                            <?php endif;?>
                            <?php if($this->session->flashdata('succ_msg')):?>

                            <div class="alert alert-success alert-dismissible text-center" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong><?php echo $this->session->flashdata('succ_msg');?></strong>
                            </div>

                            <?php endif;?>
                            <div id="status_msg">

                             </div>
                            <?php echo form_open('dashboard/room_delete');?>
							<div class="table-scrollable">
								<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>
										 Select
									</th>
									<th>
										 Room No
									</th>
									<th>
										 Number of Beds
									</th>
									<th>
										 Rent
									</th>
									<th>
										 Image
									</th>
                                    <th>
										 Action
									</th>
								</tr>
								</thead>
								<tbody>
								<?php if(isset($rooms) && $rooms):
            $i=1;
            foreach($rooms as $rom):
                if($rom->hotel_id==$this->session->userdata('user_hotel')):
                    $class = ($i%2==0) ? "active" : "success";

                    $room_id=$rom->room_id;
                    ?>

                                    <tr class="<?php echo $class;?>">
                                        <td><input type="checkbox" name="delete[]" value="<?php echo $rom->room_id;?>" class="form-control" onclick="this.form.submit();"/></td>
                                        <td><?php echo $rom->room_no;?></td>
                                        <td><?php echo $rom->room_bed;?></td>
                                        <td>₹ <?php echo $rom->room_rent;?></td>
                                        <td><img src="<?php echo base_url();?>upload/thumb/<?php echo $rom->room_image_thumb;?>" alt=""/></td>
                                        <td>

                                        	<a href="<?php echo base_url();?>dashboard/edit_room/<?php echo base64url_encode($room_id);?>" class="fa fa-edit"></a>
                                        <td>
                                    </tr>
                                <?php $i++;?>
                                <?php endif; ?>
                                <?php endforeach; ?>
                                <?php endif;?>
								</tbody>
								</table>
                                <p class="pull-right" style="padding-top:10px;">
                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger" onclick="javascript:return confirm('Are you sure that you want to delete the selected records?')"/>
                            </p>

                            <?php echo form_close();?>
								<?php if(isset($pagination) && $pagination)
            echo $pagination; ?>
							</div>
						</div>
					</div>
					-->
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->
