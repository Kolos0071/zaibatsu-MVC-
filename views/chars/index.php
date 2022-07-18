<? include ROOT.'/views/layouts/header.php' ?>


    <div class="container chars__container">
        <h2 class="page-title">Сутденты</h2>
        <p class="page-descr">Список всех студентов Зайбатсу</p>
        <div class="students-list flex">
            <?foreach($charsList as $charsItem):?>
            
            <div class="studet-card-wrapper">
                <img class="preview-img" src="/template/images/Image.png" alt="">
                <h3><?echo $charsItem['name'];?></h3>
                <p><?echo $charsItem['faculty'];?></p>
                <a href="/chars/<?echo $charsItem['id'];?>" class="profile-btn">Смотреть профиль</a>
            </div>
            <?endforeach;?>
        </div>
    </div>   


<? include ROOT.'/views/layouts/footer.php' ?>