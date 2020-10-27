<?php
//Displaying the days
$start = new DateTime((new $class)->getStartDate());
$end = new DateTime(date('Y-m-d'));
$days = new DateInterval('P1D');
$months = new DateInterval('P1M');
$day = new DatePeriod($start, $days, $end);
?>
<head>
  <style media="screen"></style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
  <?php?>
  <h1>Days</h1>
  <div id="#toggle"><p>Show More</p></div>
  <?php $a = array("Jan", "Feb", "Mar", "Apr", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); ?>
  <?php foreach ($day as $d):?>
    <?php for ($i=0; $i <= -1; $i++):?>
      <?php if ($d->format('M') == $a[$i]): ?>
      <div id="hide"><!--<h2><?php #echo "<br/>".$d->format('m-M-d');?></h2>--></div>
      <label for=""><?php #echo "<br/>" . $d->format('m-M-d');?></label><input type="text" name="" value="<?php echo $d->format('M');?>"/>
      <?php endif; ?>
    <?php endfor;?>
  <?php endforeach; ?>
</body>
<script type="text/javascript">
  $("#toggle").each(function() {//update to .each function
    $("#hide"/*-"i*/).toggle();
  });
</script>
