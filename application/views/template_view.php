<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="utf-8"> 
<title><?=$pageName?></title>
<link rel="stylesheet" href="application/css/header.css"> 
<link rel="stylesheet" href="application/css/<?=$content_css?>">   
</head> 
<body>
    <header>
        <h1 class='header__title'>Театр не театра</h1>
    </header>
    <?php include $content_view; ?>
    <script type='text/javascript' src="application/js/<?=$content_js?>"></script>
</body> 
</html>