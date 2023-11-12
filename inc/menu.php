<?php
$userName = '';
$show = '';
if (!empty($_SESSION['userid']) && $_SESSION['userid']) {
	$userName = $_SESSION['username'];
} else {
	$show = 'hidden';
}
?>
<div id="loggedPanel" class="<?php echo $show; ?>">
	<a href="action.php?action=logout">Logout</a>
</div>