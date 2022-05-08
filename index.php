<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; 
 // ステータスコードを出力
	http_response_code( 301 ) ;

	// リダイレクト
	header( "Location: ./top.php" ) ;
	exit ;
 ?> 
 </body>
</html>
