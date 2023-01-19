<?php
    include('App/recalls.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" >
    <title>Репетитор по истории и обществознанию Смирнов Денис</title>
        <?php
        $fcv = "";//file_css_version
        if (file_exists("css/main.css")) {  
            $fcv = filemtime("css/main.css");
        }
    ?>
    <link rel = "StyleSheet" href = "css/main.css?v=<?php echo $fcv ?>">
</head>
<body>
    <div class="mainContainer">
        <header class="header">
            <div class="headerInsideContainer">
                <div class="logoHeading">
                    <img src="files/logoBook.svg">
                    <div>
                        <div class="heading">
                            СМИРНОВ ДЕНИС
                        </div>
                        <div class="caption">
                            преподаватель и репетитор<br>
                            по социально-гуманитарным дисциплинам
                        </div>
                    </div>
                </div>
                <nav class="nav">
                    <a href="#">Услуги и цены</a>
                    <a href="#">Контакты</a>
                    <a href="#">Формат занятий</a>
                    <a href="#">Отзывы</a>
                    <a href="#">Записаться</a>
                </nav>
                <div class="btn-menu">
                    <img src="files/btnMenu.svg">
                </div>
            </div>
        </header>
        <main class="main">
            <div class="block">
                <div class="block-1">
                    <div class="side-left">
                        <img src="files/SmirnovFoto.jpg">
                    </div>
                    <div class="side-right">
                        <div class="heading-1">
                            Смирнов<br>
                            Денис<br>
                            Владимирович
                        </div>
                        <div class="heading-2">
                            Репетитор по истории и обществознанию
                        </div>
                        <div class="text">
                            Осуществляю подготовку к ОГЭ, ЕГЭ, ДВИ, экзаменам в ВУЗах, к поступлению в аспирантуру, сдаче кандидатского минимума, а также провожу общеобразовательные курсы по социально-гуманитарным предметам.
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-2">
                <div class="heading">
                    Обо мне
                </div>
                <div class="text">
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        Имею большой успешный опыт подготовки: мои ученики поступают в престижные ВУЗы страны, сдавая экзамены на максимальные баллы.

                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        Имею большой успешный опыт подготовки: мои ученики поступают в престижные ВУЗы страны, сдавая экзамены на максимальные баллы.
                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        Выстраиваю занятия по индивидуальным планам с учётом специальных требований, длительности курса и уровня знаний учащегося. Материал подаю чётко и системно (максимально структурированно).
                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        В образовательном процессе задействую как общеизвестные (широко применяемые), так и собственные апробированные наработки с использованием обширного современного инструментария и технологий (для подготовки по курсу обществознание и история мною созданы специальные сайты, серьёзно облегчающие усвоение материала).
                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        Также применяю различные мнемотехники для лучшего запоминания необходимой информации.
                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        При необходимости, чтоб организовать работу учащегося задействую элементы тайм-менеджмента.
                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        Работаю с различными возрастными, социальными, количественными аудиториями. Могу проводить занятия в разных форматах.
                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        Эрудирован, легко нахожу взаимопонимание с учащимися любых возрастов, чему помогает дополнительное творческое образование и широкий круг интересов. Разбираюсь в актуальных тенденциях культуры и общественной жизни.
                    </div>
                    <div class="img">
                        <img src="files/listMarker_1.svg">
                    </div>
                    <div class="paragraph">
                        Являюсь автором научных монографий и статей
                    </div>
                </div>
            </div>
            <div class="block block-3">
                <div class="heading">
                    <img src="files/iconEducation.svg">
                    <div>
                        Образование
                    </div>
                </div>
                <div class="paragraph">
                    <img src="files/listMarker_2.svg">
                    Кировский колледж искусств, эстрадно-джазовое отделение, по специальности «артист оркестра» (бас-гитара) 2005 г.
                </div>
                <div class="paragraph">
                    <img src="files/listMarker_2.svg">
                    Философский факультет РГГУ по специальности «преподаватель философии и гуманитарных дисциплин» 2009 г.
                </div>
                <div class="paragraph">
                    <img src="files/listMarker_2.svg">
                    Кандидат философских наук 2015 г.
                </div>
            </div>
            
            
            <div class="block block-4-Docs">
                <div class="heading">
                    Документы и сертификаты
                </div>
                <div class="docSlider">
                    <div class="navBtn">
                        <img src="files/btnLeft.svg">
                    </div>
                    <div class="slide" id="diplom_1">
                        <img src="files/diplom_vyatGGU.jpg" class="vyatGGU">
                        <div class="caption">
                            Диплом кандидата <br>филоософских наук
                        </div>
                    </div>
                    <div class="slide" id="diplom_2">
                        <img src="files/diplom_KUI.jpg" class="KUI">
                        <div class="caption">
                            Диплом по спец. <br> Музыкальное <br>икусство эстрады
                        </div>
                    </div>
                    <div class="slide" id="diplom_3">
                        <img src="files/diplom_RGGU.jpg" class="vyatRGGU">
                        <div class="caption">
                            Диплом <br>перподавателя <br>философии
                        </div>
                    </div>
                    <div class="navBtn">
                        <img src="files/btnRight.svg">
                    </div>
                </div>
                <div class="scroll">
                    <div class="scroll-slaider"></div>
                </div>
            </div>


            <div class="block block-3">
                <div class="heading">
                    <img src="files/iconWorkExp.svg">
                    <div>
                        Опыт работы
                    </div>
                </div>
                <div class="paragraph">
                    <img src="files/listMarker_2.svg">
                    Школьный учитель истории, обществознания 2010–2013 гг.
                </div>
                <div class="paragraph">
                    <img src="files/listMarker_2.svg">
                    Репетитор с 2014 г.
                </div>
            </div>


            <div class="block block-6-Recalls">
                <div class="heading">
                    Отзывы
                </div>
                <div class="recallsSlider">
                    <div class="navBtn" id = "btnRecallBack">
                        <img src="files/btnLeft.svg">
                    </div>
                    <div class="slideContainer" id="recallContainer">
                        <div class="slider" id = "reallSlider">
                            <div class="slide placeholder">
                            </div>
                            <?
                                $i=0;
                                foreach ($recalls as $recall) {
                                    ?>
                                    <div class="slide <? if ($i==1) {echo "center";} ?>">
                                        <div class="recall">
                                            <div class="name">
                                                <? echo $recall['name'] ?>
                                            </div>
                                            <div>
                                                <? echo $recall['date'] ?>
                                            </div>
                                            <div class="exam">
                                                <? echo $recall['exam'] ?>
                                            </div>
                                            <div class="blockuote">
                                                “<? echo $recall['blockuote'] ?>”
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <? $i++;
                                }
                            ?>
                            <div class="slide placeholder">
                            </div>
                        </div>
                    </div>                  
                    <div class="navBtn" id = "btnRecallForward">
                        <img src="files/btnRight.svg">
                    </div>
                </div>
                <div class="scroll" id = "recallsScrollPosition">
                    <?
                        for ($i=0;$i<count($recall);$i++) {
                            if ($i==1) {
                                echo '<div class="scroll-slaider active"></div>';
                            } else {
                                echo '<div class="scroll-slaider"></div>';
                            }
                        }
                    ?>
                    <div class="scroll-slaider"></div>
                </div>
                <div class="conForBtnReadAll">
                    <div class="btnReadAll">
                        Читать все отзывы на profi.ru
                    </div>
                </div>
            </div>

            <div class="block block-7-servisesAndPrises">
                <div class="heading">
                    Услуги и цены
                </div>
                <div class="serPriseContainer">
                    <div calss="box-left">
                        <div class="h">
                            История
                        </div>
                        <div class="table">
                            <div>ЕГЭ по истории</div>
                            <div>от 1800 &#8381;/60 мин.</div>
                            <div>ЕГЭ по истории</div>
                            <div>от 1800 &#8381;/60 мин.</div>
                        </div>
                    </div>
                    <div class="box-right">

                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
<!-- 
    Щас сделаю слайдер и прдолжу далшье верстку

    Надо будет делать 

        - переход при нажатии кнопок меню
        
        - Вставить кнопку записаться

        - доработь слайдер документов что бы работал

        - слайдер отзывов что бы работал. И анимация кнопки
 -->