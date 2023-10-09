<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/home.css">
  <style>
  </style>
</head>
<body>

<div class="header">
  <img src="./img/thumbnail.png" alt="Marwadi university" height = "10%" width = "25%" align="right">
  <h1>NAAC calculator Portal</h1>
</div>

<div class="topnav">
  </div> 

  <body>

<?php
$sections = array(
	array(
		'title' => 'Curricular Aspects',
		'inputs' => array(
			array('label' => 'Input 1:', 'name' => 'input_1_1'),
			array('label' => 'Input 2:', 'name' => 'input_1_2'),
			array('label' => 'Input 3:', 'name' => 'input_1_3'),
			array('label' => 'Input 4:', 'name' => 'input_1_5'),
			array('label' => 'Input 5:', 'name' => 'input_1_6'),
			array('label' => 'Input 6:', 'name' => 'input_1_7'),
		),
	),
	array(
		'title' => 'Teaching-learning & Evaluation',
		'inputs' => array(
			array('label' => 'Input 1:', 'name' => 'input_2_1'),
			array('label' => 'Input 2:', 'name' => 'input_2_2'),
			array('label' => 'Input 3:', 'name' => 'input_2_3'),
		),
	),
	array(
		'title' => 'Research, Innovations & Extension',
		'inputs' => array(
			array('label' => 'Input 1:', 'name' => 'input_3_1'),
			array('label' => 'Input 2:', 'name' => 'input_3_2'),
		),
	),
);
?>

<div class="parent-container">
	<?php foreach ($sections as $section) { ?>
		<div class="parent">
			<h2><?php echo $section['title']; ?></h2>
			<?php foreach ($section['inputs'] as $input) { ?>
				<div class="child">
					<label for="<?php echo $input['name']; ?>"><?php echo $input['label']; ?></label>
					<input type="number" id="<?php echo $input['name']; ?>" name="<?php echo $input['name']; ?>" value="0" onchange="updateSectionTotal(this)">
				</div>
			<?php } ?>
			<p>Section Total: <span class="section-total">0</span></p>
		</div>
	<?php } ?>
	<p>Grand Total: <span id="grand-total">0</span></p>
</div>

<script>
function updateSectionTotal(input) {
	var parent = input.closest('.parent');
	var sectionTotal = parent.querySelector('.section-total');
	var inputs = parent.querySelectorAll('input[type="number"]');
	var total = 0;
	for (var i = 0; i < inputs.length; i++) {
		total += parseInt(inputs[i].value);
	}
	sectionTotal.textContent = total;
	updateGrandTotal();
}

function updateGrandTotal() {
	var sectionTotals = document.querySelectorAll('.section-total');
	var grandTotal = 0;
	for (var i = 0; i < sectionTotals.length; i++) {
		grandTotal += parseInt(sectionTotals[i].textContent);
	}
	document.querySelector('#grand-total').textContent = grandTotal;
}
</script>

</body>

</body>
</html>
