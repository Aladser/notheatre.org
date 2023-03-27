<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="utf-8"> 
<title><?=$pageName?></title>
<link rel="stylesheet" href="application/css/template.css"> 
<link rel="stylesheet" href="application/css/<?=$content_css?>">   
</head> 
<body>
    <header class='header'>
        <input type="text" id='header_btn-main'     class='header_btn' value='Главная'>
        <input type="text" id='header_btn-shedule'  class='header_btn header_btn-shedule' value='Расписание'>
        <input type="text" id='header_btn-cash'     class='header_btn header_btn-cash' value='Касса'>
        <input type="text" id='header_btn-contacts' class='header_btn header_btn-contacts' value='Контакты'>
        <h1 class='header__title'>Театр не театра</h1>
    </header>
    <?php include $content_view; ?>
    <script type='text/javascript' src="application/js/<?=$content_js?>"></script>
</body> 
</html>