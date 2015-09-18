<?php 
include 'functions.php';

switch ($_REQUEST['action']) {
	case 'compara':
		compara($_POST["modelos"][0], $_POST["modelos"][1]);
		break;

	case 'export':
	switch ($_GET['tipo']) {
		case 'excel':
			exportExcel($_GET['html']);
			break;
		case 'pdf':
			exportPdf($_GET['html']);
			break;
		default:
			break;
	}
		break;
	
	default:
		break;
}

?>