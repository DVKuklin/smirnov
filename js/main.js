//слайдер отзывы

let recalls = document.querySelectorAll('.recallsSlider .slide');

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    //Если мобильное устройство
    let placeHolders = document.querySelectorAll('.block-6-Recalls .placeholder');
    placeHolders[0].style.display="none";
    placeHolders[1].style.display="none";
    recallContainer.style.overflowX="visible";
    recallsScrollPosition.style.display="none";
    btnRecallBack.style.display="none";
    btnRecallForward.style.display="none";

    for (let i=0; i<recalls.length; i++) {
        recalls[i].classList.remove('center');
    }

    let rem = window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0];
    let deltaScroll = (2 + ((230 / 18) * rem) + 2 * (((10 / 18) * rem)));
    let w = deltaScroll*(recalls.length-2);
    reallSlider.style.width = w + "px";
    recallContainer.style.width = "100%";
    recallContainer.style.marginLeft = 0.5*rem+'px';
    recallContainer.style.marginRight = 0.5*rem+'px';

    for (let i=1;i<recalls.length-1;i++) {
        recalls[i].onclick = () => {
            alert('Тут откроется окно с отзыом на весь дисплей');
        }
    }
} else {
    //Если компьютер
    let recallSliderActive = true;

    let btnLeftImg = btnRecallBack.querySelector('img');
    let btnRightImg = btnRecallForward.querySelector('img');
    let pos = recallsScrollPosition.querySelectorAll('.scroll-slaider');//Точечки которые показывают текущую позицию в слайдере


    function recallIni() {
        let rem = window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0];

        let deltaScroll = (2 + ((230 / 18) * rem) + 2 * (((10 / 18) * rem))) + 2*rem;

        recallContainer.scrollBy(deltaScroll,0);
        // btnLeftImg.src="files/btnLeftInActive.svg";
        // btnLeftImg.active = "none";
    }

    recallIni();

    btnRecallBack.onclick = () => {
        if (!recallSliderActive) {
            return;
        }

        if (btnLeftImg.active == 'none') {
            return;
        }

        btnRightImg.active = 'active';
        btnRightImg.src="files/btnRight.svg";

        for (let i = 0; i< recalls.length; i++) {
            if (recalls[i].classList.contains('center')) {
                if (i == 2) {
                    btnLeftImg.src="files/btnLeftInActive.svg";
                    btnLeftImg.active = "none";
                }
                recalls[i].classList.remove('center');
                pos[i-1].classList.remove('active');
                setTimeout(increaseRecall,10,recalls[i],1.2,"-");
                pos[i-2].classList.add('active');
                recalls[i-1].classList.add('center');
                setTimeout(increaseRecall,10,recalls[i-1],1,"+");
                break;
            }
        }

        let rem = window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0];

        let deltaScroll = (2 + ((230 / 18) * rem) + 2 * (((10 / 18) * rem))) + 2*rem;

        recallContainer.scrollBy({
            left: -deltaScroll,
            behavior: 'smooth'
        });

    }

    btnRecallForward.onclick = () => {
        if (!recallSliderActive) {
            return;
        }

        if (btnRightImg.active == 'none') {
            return;
        }

        btnLeftImg.active = 'active';
        btnLeftImg.src="files/btnLeft.svg";

        for (let i = 0; i< recalls.length; i++) {
            if (recalls[i].classList.contains('center')) {
                if (i == recalls.length-3) {
                    btnRightImg.src="files/btnRightInActive.svg";
                    btnRightImg.active = "none";
                }
                recalls[i].classList.remove('center');
                pos[i-1].classList.remove('active');
                recalls[i].style.transform = "scale(1.2)";
                setTimeout(increaseRecall,10,recalls[i],1.2,"-");
                recalls[i+1].classList.add('center');
                pos[i].classList.add('active');
                recalls[i+1].style.transform = "scale(1)";
                setTimeout(increaseRecall,10,recalls[i+1],1,"+");
                break;
            }
        }

        let rem = window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0];

        let deltaScroll = (2 + ((230 / 18) * rem) + 2 * (((10 / 18) * rem))) + 2*rem;

        recallContainer.scrollBy({
            left: deltaScroll,
            behavior: 'smooth'
        });

    }

    function increaseRecall(el,scale,sdf) {
        recallSliderActive = false;
        if (sdf == "+") {
            if (scale > 1.2) {
                setTimeout(function() {
                    recallSliderActive=true;
                },200);
                return;
            }
            scale=scale+0.01;
        } else {
            if (scale < 1) {
                setTimeout(function() {
                    recallSliderActive=true;
                },200);
                return;
            }
            scale=scale-0.01;
        }
        el.style.transform= "scale("+scale+")";
        setTimeout(increaseRecall,10,el,scale,sdf)
    }

    // При изменении окна

    let scrollToDone = false;//Сделали ли скролл вперед

    window.onresize = recallsOnWindowResize;

    recallsOnWindowResize();

    function recallsOnWindowResize() {
        //Если уменьшим масштаб (rem), то 978 изменится
        if (window.innerWidth < 978) {
            if (!scrollToDone) {
                let rem = window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0];

                let deltaScroll = (2 + ((230 / 18) * rem) + 2 * (((10 / 18) * rem))) + 2*rem;
                
                recallContainer.scrollBy({
                    left: deltaScroll,
                    behavior: 'smooth'
                });
                scrollToDone=true;
            }
        }

        if (window.innerWidth >= 978) {
            if (scrollToDone) {
                let rem = window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0];

                let deltaScroll = (2 + ((230 / 18) * rem) + 2 * (((10 / 18) * rem))) + 2*rem;
                
                recallContainer.scrollBy({
                    left: -deltaScroll,
                    behavior: 'smooth'
                });
                scrollToDone=false;
            }

            //Это нужно для того, что бы если последний элемент в центре, то прокрутка вернулась нормально при увеличении ширины окна браузера
            if (recalls[recalls.length-2].classList.contains('center')) {
                let rem = window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0];

                let deltaScroll = (2 + ((230 / 18) * rem) + 2 * (((10 / 18) * rem))) + 2*rem;

                let x = recallContainer.scrollWidth - deltaScroll;
                recallContainer.scrollLeft = x;
            }
        }

    };
}