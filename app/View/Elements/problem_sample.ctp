<script type="text/javascript">
	function initField() {
		target = $('.samples').children('div');
		for(i = 1; i < target.length; i++) {
			sample = $(target[i - 1]);
			if(sample.find('textarea').val() != '') {
				sample.css('display', '');
			}
		}
		showField($('.samples').children('div:visible').find('label'));
	}
	function addSampleField() {
		target = $('.samples').children('div');

		for(i = 1; i < target.length; i++) {
			if($(target[i - 1]).css('display') == 'none') {
				$(target[i - 1]).css('display', '');
				break;
			}
		}
	}
	function showField(element) {
		target = $(element).nextAll('div');
		icon = $(element).children('i');
		display = target.css('display');

		if(display == 'none') {
			target.css('display', '');
			icon.removeClass('icon-chevron-up');
			icon.addClass('icon-chevron-down');
		} else {
			target.css('display', 'none');
			icon.removeClass('icon-chevron-down');
			icon.addClass('icon-chevron-up');
		}
	}
</script>
<?php echo $this->Form->create('Problem'); ?>
<div class="samples">
	<label>Sample Input/Output</label>
	<?php for($i = 0; $i < $sample_limit; $i++): ?>
		<div style="display: none">
			<?php
				echo sprintf('<label onclick="showField(this)"><i class="icon-chevron-down"></i>#%d</label>', $i);
				echo $this->Form->input('sample_input'.$i, array('type' => 'textarea', 'label' => 'Sample Input '.$i, 'id' => 'sample_input'.$i));
				echo $this->Form->input('sample_output'.$i, array('type' => 'textarea', 'label' => 'Sample Output '.$i, 'id' => 'sample_output'.$i));
			?>
		</div>
	<?php endfor; ?>
	<div>
		<p onclick="addSampleField()"><i class="icon-plus-sign"></i>Add Sample Input/Output</p>
	</div>
</div>
<div class="submit submit-button">
<?php
	echo $this->Form->submit('Submit', array('div' => false));
	echo $this->Html->link('Back', '/problems/setting/'.$problem['Problem']['id'].'/source/'.$contest_id, array('class' => 'btn btn-large'));
?>
</div>
<script type="text/javascript">
	initField();
</script>
