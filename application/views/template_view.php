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
        <input type="text" id='header__btn-main'     class='header__btn' value='Главная'>
        <input type="text" id='header__btn-posters'  class='header__btn header__btn-posters' value='Расписание'>
        <input type="text" id='header__btn-cash'     class='header__btn header__btn-cash' value='Касса'>
        <input type="text" id='header__btn-contacts' class='header__btn header__btn-contacts' value='Контакты'>
        <h1 class='header__title'>Театр не театра</h1>
    </header>

    <?php include $content_view ?>
    
    <script type='text/javascript' src='application/js/template.js'></script>
</body> 
</html>