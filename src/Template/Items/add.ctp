<?php
// sample data to encode
			$data_to_encode = 'BLAHBLAH01234';
				
			$barcode=$this->barcode;
			// Generate Barcode data
			$barcode->barcode();
			$barcode->setType('C128');
			$barcode->setCode($data_to_encode);
			$barcode->setSize(80,200);
				
			// Generate filename            
			$random = rand(0,1000000);
			$file = 'img/barcode/code_'.$random.'.png';
				
			// Generates image file on server            
			$this->barcode->writeBarcodeFile($file);
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Create Item');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Create Item</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($item) ?>
				<div class="row">
				
					<div class="col-md-6">
					    <div class="form-group">
							<label>Item Name <span class="required">*</span></label>
							<?php echo $this->Form->control('name',['class'=>'form-control input-sm','placeholder'=>'Item Name','label'=>false,'autofocus']); ?>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Under Stock Group </label>
									<?php echo $this->Form->control('stock_group_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Primary-', 'options' => $stockGroups]); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>HSN Code <span class="required">*</span></label>
									<?php echo $this->Form->control('hsn_code',['class'=>'form-control input-sm','label'=>false,'placeholder'=>'HSN Code']); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Unit <span class="required">*</span></label>
									<?php echo $this->Form->control('unit_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Unit-', 'options' => $units,'required'=>'required']); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Size </label>
									<?php echo $this->Form->control('size_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Size-', 'options' => $sizes]); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Shade </label>
									<?php echo $this->Form->control('shade_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-Shade-', 'options' => $shades]); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Description </label>
									<?php echo $this->Form->control('description',['class'=>'form-control input-sm','label'=>false,'rows'=>'2']); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<span class="caption-subject bold " style="float:center;">Opening Balance</span><hr style="margin: 6px 0;">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Quantity </label>
									<?php echo $this->Form->control('quantity',['class'=>'form-control input-sm qty calculation reverseCalculation','label'=>false,'placeholder'=>'Quantity']); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Rate </label>
									<?php echo $this->Form->control('rate',['class'=>'form-control input-sm rate calculation','label'=>false,'placeholder'=>'Rate']); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Value </label>
									<?php echo $this->Form->control('amount',['class'=>'form-control input-sm amt reverseCalculation','label'=>false,'placeholder'=>'Value']); ?>
								</div>
							</div>
						</div>
						<span class="caption-subject bold " style="float:center;">Gst Rate</span><hr style="margin: 6px 0;">
						<div class="row" >
							<div class="col-md-3">
								<div class="form-group">
									<div class="radio-list">
										<div class="radio-inline" style="padding-left: 0px;">
											<?php echo $this->Form->radio(
											'kind_of_gst',
											[
												['value' => 'fix', 'text' => 'Fix','class' => 'radio-task kind_of_gst'],
												['value' => 'fluid', 'text' => 'Fluid','class' => 'radio-task kind_of_gst','checked' => 'checked']
											]
											); ?>
										</div>
                                    </div>
								</div>
							</div>
						</div>	
						<div class="row" >
							<div class="col-md-4">
								<div class="form-group">
									<label style="font-size: 10px;">Gst Less than Equal to Amount </label>
									<?php echo $this->Form->control('first_gst_figure_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-GST Figure-', 'options' => $gstFigures,'required'=>'required']); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group hide_gst">
									<label style="font-size: 10px;">Amount </label>
									<?php echo $this->Form->control('gst_amount',['class'=>'form-control input-sm ','label'=>false,'placeholder'=>'Amount','required'=>'required']); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group hide_gst">
									<label style="font-size: 10px;">Gst Greter than to Amount </label>
									<?php echo $this->Form->control('second_gst_figure_id',['class'=>'form-control input-sm ','label'=>false,'empty'=>'-GST Figure-', 'options' => $gstFigures,'required'=>'required']); ?>
								</div>
							</div>
						</div>
						<span class="caption-subject bold " style="float:center;">Barcode Generation</span><hr style="margin: 6px 0;">
						<div class="row" >
							<div class="col-md-4">
								<div class="form-group">
									<label style="font-size: 10px;">Gst Less than Equal to Amount </label>
									<?php echo $this->Form->control('first_gst_figure_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-GST Figure-', 'options' => $gstFigures,'required'=>'required']); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label style="font-size: 10px;">Amount </label>
									<?php echo $this->Form->control('gst_amount',['class'=>'form-control input-sm rate calculation','label'=>false,'placeholder'=>'Amount','required'=>'required']); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label style="font-size: 10px;">Gst Greter than to Amount </label>
									<?php echo $this->Form->control('second_gst_figure_id',['class'=>'form-control input-sm','label'=>false,'empty'=>'-GST Figure-', 'options' => $gstFigures,'required'=>'required']); ?>
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
<?php
	$js="
	$(document).ready(function() {
	  $('.calculation').die().live('keyup',function(){
		  amt_calc();
	  });
	  $('.reverseCalculation').die().live('keyup',function(){
		   reverce_amt_calc();
	  });
	  function amt_calc()
	  {
		  var qty = $('.qty').val();
		  var rate = $('.rate').val();
          var amt = qty*rate
		  if(amt)
		  {
			$('.amt').val(amt.toFixed(2)); 
		  }
	  }
	  
	  function reverce_amt_calc()
	  {
		  var qty = $('.qty').val();
		  var amt = $('.amt').val();
		  if(qty){
		  var rate = amt/qty;
		  if(rate)
		  {
		  $('.rate').val(rate.toFixed(2));  }}
	  }
	  
	  $('.kind_of_gst').die().live('change',function(){
		  var gst_type = $(this).val();
		  if(gst_type=='fix')
		  {
			  $('.hide_gst').hide();
		  }
		  else
		  {
			  $('.hide_gst').show();
		  }
	  })
    });
	";

echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom')); 
?>