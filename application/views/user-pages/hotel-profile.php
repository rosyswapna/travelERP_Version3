<div class="page-outer">
<fieldset class="body-border">
<legend class="body-head">Hotel</legend>
<div class="nav-tabs-custom">
  <!--  <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Profile</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab">Owner</a></li>
        <li class=""><a href="#tab_3" data-toggle="tab">Rooms</a></li>
	<li class=""><a href="#tab_4" data-toggle="tab">Tariff</a></li>
	<li class=""><a href="#tab_5" data-toggle="tab">Payment</a></li>
	<li class=""><a href="#tab_6" data-toggle="tab">Accounts</a></li>
      
    </ul>-->
    <ul class="nav nav-tabs">
 		<?php 
		foreach($tabs as $tab=>$attr){
		echo '<li class="'.$attr['class'].'">
			<a href="#'.$attr['tab_id'].'" data-toggle="tab">'.$attr['text'].'</a>
		      </li>';
		}
		?>
    		</ul>
    
    <div class="tab-content">
    <?php if (array_key_exists('h_tab', $tabs)) {?>
         	<div class="<?php echo $tabs['h_tab']['content_class'];?>" id="<?php echo $tabs['h_tab']['tab_id'];?>">
        <!--<div class="tab-pane active" id="tab_1">-->
          <div class="hotel-profile-body">
	  
	  <div class="width-30-percent-with-margin-left-20-Hotel-Profile-View">

		<fieldset class="body-border-Driver-View border-style-Driver-view" >
		<legend class="body-head">Profile</legend>
		    <div class="form-group">
				<?php echo form_label('Name'); ?>
				<?php echo form_input(array('name'=>'hotel_name','class'=>'form-control','id'=>'hotel_name','value'=>'')); ?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('Address'); ?>
				<?php echo form_textarea(array('name'=>'hotel_address','rows'=>'4','class'=>'form-control','id'=>'hotel_address','value'=>'')); ?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('City'); ?>
				<?php echo form_input(array('name'=>'city','class'=>'form-control','id'=>'city','value'=>'')); ?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('State'); ?>
				<?php echo form_input(array('name'=>'state','class'=>'form-control','id'=>'state','value'=>'')); ?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('Category'); ?>
				<?php $class="form-control";
				$msg="-Select-";
				$name="category";
			echo $this->form_functions->populate_dropdown($name,$category='',$category_id='',$class,$id='category',$msg); ?>
		   </div>
		    <div class="form-group">
				<?php echo form_label('No.of Rooms'); ?>
				<?php echo form_input(array('name'=>'no','class'=>'form-control','id'=>'no','value'=>'')); ?>
		    </div>
		</fieldset>
		
		</div>
		 <div class="width-30-percent-with-margin-left-20-Hotel-Profile-View" style="margin-top:60px">
		
		<fieldset class="body-border-Driver-View border-style-Driver-view" >
		<legend class="body-head"></legend>
		    <div class="form-group">
				<?php echo form_label('Destination'); ?>
				<?php $class="form-control";
				$msg="-Select-";
				$name="destination";
			echo $this->form_functions->populate_dropdown($name,$destinations='',$destination='',$class,$id='',$msg); ?>
		   </div>
		   <div class="form-group">
			<?php  echo form_open(base_url()."controller/action");
			echo form_label('Season');
			$class="form-control";
			$msg="-Select Season-";
			$name="seasons[]";
			$seasons=array('1'=>'Season','2'=>'Mid-season','3'=>'Off-season');
			
			echo $this->form_functions->populate_multiselect($name,$seasons,$season_ids=-1,$class,$id='seasons',$msg)?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('Contact Person'); ?>
				<?php echo form_input(array('name'=>'contact_person','class'=>'form-control','id'=>'contact_person','value'=>'')); ?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('Mobile'); ?>
				<?php echo form_input(array('name'=>'mobile','class'=>'form-control','id'=>'mobile','value'=>'')); ?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('Phone'); ?>
				<?php echo form_input(array('name'=>'phone','class'=>'form-control','id'=>'phone','value'=>'')); ?>
		    </div>
		    <div class="form-group">
				<?php echo form_label('Rating'); ?>
				<?php echo form_input(array('name'=>'rating','class'=>'form-control','id'=>'rating','value'=>'')); ?>
		    </div>
		    <div class="form-group">
			<?php $save_update_button='SAVE';$class_save_update_button="class='btn btn-success'";
			echo form_submit("h-profile-add-update",$save_update_button,$class_save_update_button).nbs(7).form_reset("customer_reset","RESET","class='btn btn-danger'");
			echo form_close();
			?>
		</div>
		</fieldset>
	  </div>
	  
	  </div>
	</div>
	<?php } ?>
	
	<?php if (array_key_exists('o_tab', $tabs)) {?>
         	<div class="<?php echo $tabs['o_tab']['content_class'];?>" id="<?php echo $tabs['o_tab']['tab_id'];?>">
       <!-- <div class="tab-pane" id="tab_2">-->
            <div class="width-30-percent-with-margin-left-20-Hotel-Profile-View">
	<fieldset class="body-border-Driver-View border-style-Driver-view" >
	<legend class="body-head">Owner Details</legend>
	<table>
	<tr>
	<td><div class="form-group">
				<?php echo form_label('Name'); ?>
				<?php echo form_input(array('name'=>'owner-name','class'=>'form-control','id'=>'owner-name','value'=>'')); ?>
		    </div></td>
	</tr>
	<td><div class="form-group">
				<?php echo form_label('Mobile'); ?>
				<?php echo form_input(array('name'=>'mob-no','class'=>'form-control','id'=>'mob-no','value'=>'')); ?>
		    </div></td>
	</tr>	    
	<td><div class="form-group">
				<?php echo form_label('Email'); ?>
				<?php echo form_input(array('name'=>'mail-id','class'=>'form-control','id'=>'mail-id','value'=>'')); ?>
		    </div></td>
	</tr>	    
	<td><div class="form-group">
				<?php echo form_label('Username'); ?>
				<?php echo form_input(array('name'=>'owner-uname','class'=>'form-control','id'=>'owner-uname','value'=>'')); ?>
		    </div></td>
	</tr>	    
	<td><div class="form-group">
				<?php echo form_label('Password'); ?>
				<?php echo form_input(array('name'=>'owner-pwd','class'=>'form-control','id'=>'owner-pwd','value'=>'')); ?>
		    </div></td>
	</tr>	    
	<td><div class="form-group">
				<?php echo form_label('Confirm Password'); ?>
				<?php echo form_input(array('name'=>'owner-cpwd','class'=>'form-control','id'=>'owner-cpwd','value'=>'')); ?>
		    </div></td>
	</tr>	    
	<td><div class="form-group">
			<?php $save_update_button='SAVE';$class_save_update_button="class='btn btn-success'";
			echo form_submit("h-owner-add-update",$save_update_button,$class_save_update_button).nbs(7).form_reset("customer_reset","RESET","class='btn btn-danger'");
			echo form_close();
			?>
		</div></td>
	</tr>	
	
	</table>
	</fieldset>
		</div>
        </div>
	<?php } ?>
	
	<?php if (array_key_exists('r_tab', $tabs)) {?>
         	<div class="<?php echo $tabs['r_tab']['content_class'];?>" id="<?php echo $tabs['r_tab']['tab_id'];?>">
       <!-- <div class="tab-pane" id="tab_3">-->
           <div class="hotel-profile-body">
		<fieldset class="body-border border-style" >
		<legend class="body-head">Add Room Availability</legend>
		
		<table>
		<tr>
		<td><?php echo form_label('Room Type').nbs(5); ?></td>
		<td><?php $class="form-control";
		$msg="-Select-";
		$name="room_type";
		echo $this->form_functions->populate_dropdown($name,$room_types='',$room_type_id='',$class,$id='room_type',$msg);?></td>
		<td><?php echo nbs(10);?></td>
		<td><?php echo form_label('No:of Rooms').nbs(5); ?></td>
		<td><?php echo form_input(array('name'=>'no_room','class'=>'form-control','id'=>'no_room','value'=>'','style'=>'margin-top:20px')).nbs(5); ?></td>
		<td><div  class="tarrif-add" ><?php echo nbs(5);?><i class="fa fa-plus-circle cursor-pointer"></i><?php echo nbs(5);?></div><div class="hide-me"><?php echo form_submit("add","Add","id=tarrif-add-id","class=btn");?></td>
		</tr>
		</table>
		</fieldset>
		
		<fieldset class="body-border border-style" >
		<legend class="body-head">Manage Room Availability</legend>
		<?php echo br(1);?>
		
		<table>
		<tr style="text-align: center;">
			
			<td><?php echo form_label('Room Type '); ?></td>
			<td><?php echo nbs(10);?></td>
			<td><?php echo form_label('No:of Rooms '); ?></td>
			<td><?php echo nbs(10);?></td>
			<td colspan="2"><?php echo form_label('Action','action'); ?></td>
		</tr>
		<tr>
			<td><?php $class="form-control";
				$msg="-Select-";
				$name="m_room_type";
				echo $this->form_functions->populate_dropdown($name,$room_types='',$room_type_id='',$class,$id='m_room_type',$msg);?>
				</td>
			<td><?php echo nbs(10);?></td>
			<td><?php echo form_input(array('name'=>'m_no_room','class'=>'form-control' ,'id'=>'m_no_room','value'=>''));?></td>
			<td><?php echo nbs(10);?></td>
			<td><div  class="tarrif-edit" ><?php echo nbs(5);?><i class="fa fa-edit cursor-pointer"></i><?php echo nbs(5);?></div><div class="hide-me xx"><?php echo form_submit("edit","Edit","id=tarrif-edit-id","class=btn");?></div></td>
			<td><div  class="tarrif-delete" ><?php echo nbs(5);?><i class="fa fa-trash-o cursor-pointer"></i><?php echo nbs(5);?></div><div class="hide-me"><?php echo form_submit("delete","Delete","id=tarrif-delete-id","class=btn");?></div></td>
		</tr>
		</table>
		</fieldset>
	   </div>
        </div>
	<?php } ?>
	
	<?php if (array_key_exists('t_tab', $tabs)) {?>
         	<div class="<?php echo $tabs['t_tab']['content_class'];?>" id="<?php echo $tabs['t_tab']['tab_id'];?>">
       <!-- <div class="tab-pane" id="tab_4">-->
          <div class="hotel-profile-body">
		<fieldset class="body-border border-style" >
		<legend class="body-head">Add Tariff</legend>
		<table>
		<tbody>
		<tr><?php $attributes = array(
			'style' => 'margin-top: 15px;',
);		    ?>
		<td><?php echo form_label('Room Type ','room_type',$attributes).nbs(5); ?></td><td><?php $class="form-control";
				$msg="-Select-";
				$name="t_room_type";
				echo $this->form_functions->populate_dropdown($name,$room_types='',$room_type_id='',$class,$id='t_room_type',$msg);?></td><td>
		</td>
		<td><?php echo nbs(10);?></td>
		<td><?php echo form_label('Season ','season',$attributes).nbs(5); ?></td><td><?php $class="form-control";
				$msg="-Select-";
				$name="t_season";
				echo $this->form_functions->populate_dropdown($name,$season='',$season_id='',$class,$id='t_season',$msg);?></td>
				<td><?php echo nbs(10);?></td>
		<td><?php echo form_label('Amount ','amount',$attributes).nbs(5); ?></td><td><?php echo form_input(array('name'=>'t_amount','class'=>'form-control' ,'id'=>'t_amount','value'=>''));?></td>

		<td><div  class="tarrif-add" style="margin-top: 15px;" ><?php echo nbs(5);?><i class="fa fa-plus-circle cursor-pointer"></i><?php echo nbs(5);?></div><div class="hide-me"><?php echo form_submit("add","Add","id=tarrif-add-id","class=btn");?></td>
		</tr>
		
		</tbody>
		</table>
		</fieldset>
		
		<fieldset class="body-border border-style" >
		<legend class="body-head">Manage Tariff</legend>
		<table>
		<tr style="text-align: center;">
			<td><?php echo form_label('Tariff Types  ','attributes'); ?></td>
			<td><?php echo nbs(10);?></td>
			<td><?php echo form_label('Season ','season'); ?></td>
			<td><?php echo nbs(10);?></td>
			<td><?php echo form_label('Amount','amount'); ?></td>
			<td><?php echo nbs(10);?></td>
			<td colspan="2"><?php echo form_label('Action','action'); ?></td>
		</tr>
		<tr>
			<td><?php $class="form-control";
				$msg="-Select-";
				$name="t_attributes";
				echo $this->form_functions->populate_dropdown($name,$season='',$season_id='',$class,$id='t_attributes',$msg);?></td>
			<td><?php echo nbs(10);?></td>
			<td><?php $class="form-control";
				$msg="-Select-";
				$name="mt_season";
				echo $this->form_functions->populate_dropdown($name,$season='',$season_id='',$class,$id='mt_season',$msg);?></td>
			<td><?php echo nbs(10);?></td>
			<td><?php echo form_input(array('name'=>'mt_amount','class'=>'form-control' ,'id'=>'mt_amount','value'=>''));?></td>
			<td><?php echo nbs(10);?></td>
			<td><div  class="tarrif-edit" ><?php echo nbs(5);?><i class="fa fa-edit cursor-pointer"></i><?php echo nbs(5);?></div><div class="hide-me xx"><?php echo form_submit("edit","Edit","id=tarrif-edit-id","class=btn");?></div></td>
			<td><div  class="tarrif-delete" ><?php echo nbs(5);?><i class="fa fa-trash-o cursor-pointer"></i><?php echo nbs(5);?></div><div class="hide-me"><?php echo form_submit("delete","Delete","id=tarrif-delete-id","class=btn");?></div></td>
		</tr>
		</table>
		</fieldset>
	  </div>
        </div>
	<?php } ?>
	
	<?php if (array_key_exists('p_tab', $tabs)) {?>
         	<div class="<?php echo $tabs['p_tab']['content_class'];?>" id="<?php echo $tabs['p_tab']['tab_id'];?>">
       <!-- <div class="tab-pane" id="tab_5">-->
           hi,Its me P
        </div>
	<?php } ?>

	<?php if (array_key_exists('a_tab', $tabs)) {?>
         	<div class="<?php echo $tabs['a_tab']['content_class'];?>" id="<?php echo $tabs['a_tab']['tab_id'];?>">
       <!-- <div class="tab-pane" id="tab_6">-->
           hi,Its me A
        </div>
	<?php } ?>
    </div>
</div>
</fieldset>
</div>