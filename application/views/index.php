<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>CRUD dengan CI dan Ajax</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <script type="text/javascript" src="<?php echo base_url();?>asset/javascript/jquery.js"></script>
    <script type='text/javascript'>
        var site = "<?php echo site_url()?>";
	function loadContent()
	{
		$('#content').load('<?php echo base_url(); ?>index.php/ajax/');
	}
    </script>	
    <script type="text/javascript" src="<?php echo base_url();?>asset/javascript/app.js" ></script>
    
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" />
    
</head>
<body onLoad='loadContent()'>
        <div id='content'>

        </div>
</body>
</html>    
