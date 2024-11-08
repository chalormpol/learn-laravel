<h3>Date And Time</h3>

<div>Date: <?php echo date("Y-m-d H:i:s"); ?></div>
<div>Time: <?php echo time(); ?></div>
<div>Timestamp: <?php echo mktime(0,0,0,1,1,2024); ?></div>
<div>Date: <?php echo date("Y-m-d H:i:s",mktime(0,0,0,1,1,2024)); ?></div>
<div>Total Day In This Month: <?php echo date("t"); ?></div>
<div>Week Number: <?php echo date("W"); ?></div>

