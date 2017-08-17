<?php
/**
 * @Author: Kounty
 */
$this->set('title', 'Create Supplier | Sunil Textile ERP');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Create Supplier</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($supplier) ?>
				<div class="row">
					<div class="col-md-12">
					<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Suppiler Name <span class="required">*</span></label>
							<?php echo $this->Form->control('name',['class'=>'form-control input-sm','placeholder'=>'Customer Name','label'=>false,'autofocus']); ?>
						</div>
						<div class="form-group">
							<label>Gstin <span class="required">*</span></label>
							<?php echo $this->Form->control('gstin',['class'=>'form-control input-sm','placeholder'=>'','label'=>false,'autofocus']); ?>
						</div>
						<div class="form-group">
							<label>Mobile </label>
							<?php echo $this->Form->control('mobile',['class'=>'form-control input-sm','placeholder'=>'9867123456','label'=>false,'autofocus','maxlength'=>10]); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>State <span class="required">*</span></label>
							<?php echo $this->Form->control('state_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-State-', 'options' => $states,'required'=>'required']); ?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<?php echo $this->Form->control('email',['class'=>'form-control input-sm','label'=>false]); ?>
						</div>
						<div class="form-group">
							<label>Address</label>
							<?php echo $this->Form->control('address',['class'=>'form-control input-sm','label'=>false]); ?>
						</div>
							</div>
						</div>
					</div>
				</div>
				<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>