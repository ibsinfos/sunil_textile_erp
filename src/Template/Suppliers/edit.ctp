<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Edit Supplier');
?>
<div class="row">
	<div class="col-md-8">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Edit Supplier</span>
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
										<?php echo $this->Form->control('name',['class'=>'form-control input-sm','placeholder'=>'Supplier Name','label'=>false,'autofocus']); ?>
									</div>
									<div class="form-group">
									<label>Under  Accounting Group  <span class="required">*</span></label>
									<?php echo $this->Form->control('accounting_group_id',['class'=>'form-control input-sm','label'=>false, 'options' => $accountingGroups,'value'=>$supplier->ledgers[0]->accounting_group_id]); ?>
								    </div>
									<div class="form-group">
										<label>GSTIN <span class="required">*</span></label>
										<?php echo $this->Form->control('gstin',['class'=>'form-control input-sm','placeholder'=>'Gst In','label'=>false,'autofocus']); ?>
									</div>
									<div class="form-group">
										<label>Mobile </label>
										<?php echo $this->Form->control('mobile',['class'=>'form-control input-sm','placeholder'=>'Mobile no','label'=>false,'autofocus','maxlength'=>10]); ?>
									</div>
									<div class="form-group" style="display:none;">
										<label>Bill to Bill Accounting </label>
										<?php 
										$option =[['value'=>'yes','text'=>'yes'],['value'=>'no','text'=>'no']];
										echo $this->Form->control('bill_to_bill_accounting',['class'=>'form-control input-sm','label'=>false, 'options' => $option,'required'=>'required','value'=>$supplier->ledgers[0]->bill_to_bill_accounting]); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>State <span class="required">*</span></label>
										<?php echo $this->Form->control('state_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-State-', 'options' => $states,'required'=>'required']); ?>
									</div>
									<div class="form-group">
										<label>Email</label>
										<?php echo $this->Form->control('email',['class'=>'form-control input-sm','label'=>false,'placeholder'=>'example@domain.com']); ?>
									</div>
									<div class="form-group">
										<label>Address</label>
										<?php echo $this->Form->control('address',['class'=>'form-control input-sm','label'=>false]); ?>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-3" style="padding-right: 0px;">
								<div class="form-group" >
									<label>Opening balance value</label>
									<?php 
									$value="";
									if(!empty($account_entry->debit))
									{
										$value =@$account_entry->debit;
									}
									else
									{
										$value = @$account_entry->credit;
									}
									echo $this->Form->control('opening_balance_value',['class'=>'form-control input-sm','label'=>false,'value'=>@$value]);
									?>
								</div>
							</div>
							<div class="col-md-2" style="padding-left: 0px;padding-right:0;">
							    <label style="visibility:hidden;">s</label>
								<?php $option =[['value'=>'debitor','text'=>'Debitor'],['value'=>'creditor','text'=>'Creditor']];
								     $check="";
								    if(!empty($account_entry->debit))
									{
										$check ='debitor';
									}
									else
									{
										$check ='creditor';
									}
									echo $this->Form->control('debit_credit',['class'=>'form-control input-sm','label'=>false, 'options' => $option,'value'=>'creditor','value'=>$check]);
									?>
							</div>
						</
					</div>
					</div>
				</div>
				<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>