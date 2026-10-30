
<html>
<head>
<title>�������� �������� �������</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="../common/ksp.css" rel="stylesheet" type="text/css">
<link href="../common/page-layout.css" rel="stylesheet" type="text/css">
</head>

<body text="#000000" vlink="#000000" class="font">

<?php
	$current_dir='20040610Innertal';
	$dir = opendir($current_dir);
	
	echo "������� �������: $current_dir: <br />";
	while( $file=readdir($dir) )
		{
		  //echo "$file";
          echo "<a href=\"$current_dir/$file\" target=_blank> <img src=\"$current_dir/thumbs/$file\"  border=1></a>";
		}
		echo '<hr /><br />';
		closedir($dir);
?>
</body>
</html>

  