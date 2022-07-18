<? include ROOT.'/views/layouts/header.php' ?>
    <div class="container char__container">
        <?
        /* $charsItemJS = json_encode($charsItem);
        $skillsJS = json_encode($skills); */

        $tmpArr = explode(';',$charsItem['skills']);

        $tmpArr2 = array();

        foreach($tmpArr as $skill) {
            $tmpArr2[] = explode('_',$skill);
        }
        /* echo '<pre>';
        print_r($tmpArr2);
        echo '<pre>';  */
        $characterFinalSkills = array();

        
        
        

        foreach($skills as $key=>$value) {
            foreach($tmpArr2 as $j) {
                if($j[1]==$value['code']){
                    
                    $characterFinalSkills[$value['code']] = [
                        'name'=>$value['name'],
                        'rar'=>$j[0],
                        'count'=>$j[2]
                    ];
                }
            }
        }
        /* echo '<pre>';
        print_r($characterFinalSkills);
        echo '<pre>';  */

        $skillsJS = json_encode($characterFinalSkills);
        ?>
            
            
        <div class="studet-card-wrapper flex">
            <img class="detail-img" src="/template/images/Image.png" alt="">

            <div>
                <h2 class="general-bio player-name">Игрок</h2>
                <h1 class="general-bio char-name"><?echo $charsItem['name'];?></h1>
                <p class="general-bio char-fac">Факультет: <?echo $charsItem['faculty'];?></p>
                <p class="general-bio char-curs">Курс: <?echo $charsItem['curs'];?></p>
                <p class="general-bio char-rank">Звание: <?echo $charsItem['rank'];?></p>
                <p class="general-bio char-rank">Хиты: <?echo $charsItem['hits'];?></p>
                <p class="general-bio char-rank">Энергия: <?echo $charsItem['ki'];?></p>
            </div>
        </div>
        <div class="main-info-wrapper flex">
            <div class="skills-wrapper">
                
            
                <div class="questions__accordion" id="accordion">
                    <button class="flex faq-section__button btn-reset btn-reset">
                        <span class="faq-section__subtitle">Обычные</span><span class="faq-section__icon"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="25" cy="25" rx="25" ry="25" fill="#ECECEC"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="#666666"/>
                        </svg></span>
    
                    </button>
                    <ul data-rar="c" class="faq-descr list-reset">
                    </ul>
                    <button class="flex faq-section__button btn-reset btn-reset">
                        <span class="faq-section__subtitle">Редкие</span><span class="faq-section__icon"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="25" cy="25" rx="25" ry="25" fill="#ECECEC"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="#666666"/>
                        </svg></span>
    
                    </button>
                    <ul data-rar="r" class="faq-descr list-reset">
                    </ul>
                    <button class="flex faq-section__button btn-reset btn-reset">
                        <span class="faq-section__subtitle">Уникальные</span><span class="faq-section__icon"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="25" cy="25" rx="25" ry="25" fill="#ECECEC"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="#666666"/>
                        </svg></span>
    
                    </button>
                    <ul data-rar="u" class="faq-descr list-reset">
                    </ul>
                    <button class="flex faq-section__button btn-reset btn-reset">
                        <span class="faq-section__subtitle">Сверхуникальные</span><span class="faq-section__icon"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="25" cy="25" rx="25" ry="25" fill="#ECECEC"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="#666666"/>
                        </svg></span>
    
                    </button>
                    <ul data-rar="e" class="faq-descr list-reset">
                    </ul>
                    
                </div>
            </div>
            <div class="texts-wrapper">
                <div>
                    <!-- кнопки табов -->
                     <ul class="tabs-nav flex list-reset">
                    <li class="tabs-nav__item"><button class="tabs-nav__btn tabs-nav__btn--active btn-reset" data-path="one">Биография</button></li>
                    <li class="tabs-nav__item"><button class="tabs-nav__btn btn-reset" data-path="two">Квесты</button></li>
                    <li class="tabs-nav__item"><button class="tabs-nav__btn btn-reset" data-path="three">Прочее</button></li>
                    </ul>

                    <div class="tabs-content">
                    <!-- элементы табов -->
                    <div class="tabs-item tabs-item--active" data-target="one">
                        <?echo $charsItem['content'];?>
                    </div>
                    <div class="tabs-item" data-target="two">
                        <ul>
                            <?echo $charsItem['quests'];?>
                        </ul>
                    </div>
                    <div class="tabs-item" data-target="three">
                        <?echo $charsItem['short_content'];?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            
        

    </div> 

    <script>
        
        const skills_arr=JSON.parse(<?="'".$skillsJS."'"?>); 
        console.log(skills_arr);


        document.querySelectorAll('.faq-descr').forEach((element)=>{
            for(key in skills_arr) {
                if(skills_arr[key].rar == element.dataset.rar) {
                    let li = document.createElement('li');
                    li.innerHTML = `${skills_arr[key].name}: ${skills_arr[key].count}`;
                    element.append(li);
                }

            }
        });
        
    </script>
<? include ROOT.'/views/layouts/footer.php' ?>