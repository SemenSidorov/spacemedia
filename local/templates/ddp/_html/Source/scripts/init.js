
window.onload = function(){

    try {

        class Slider {
            constructor(slider, number) {
                this.slider = slider;
                this.block = slider.parentElement;
                this.btnNext = this.block.querySelector('.arrow--next');
                this.btnPrev = this.block.querySelector('.arrow--prev');
                this.number = number;
            }

            init() {
                if (this.number === 1) {
                    this.initSlider();
                } else {
                    this.initBigSlider();
                }

            }

            initBigSlider() {
                $(this.slider).slick({
                    dots: false,
                    prevArrow: this.btnPrev,
                    nextArrow: this.btnNext,
                    infinite: true,
                    speed: 300,
                    slidesToShow: this.number,
                    adaptiveHeight: true,
                    responsive: [
                        {
                            breakpoint: 1300,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 1000,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                            }
                        },
                    ]
                });
            }

            initSlider() {
                $(this.slider).slick({
                    dots: false,
                    prevArrow: this.btnPrev,
                    nextArrow: this.btnNext,
                    infinite: true,
                    speed: 300,
                    slidesToShow: this.number,
                    adaptiveHeight: false
                });
            }

            destroySlider() {
                $(this.slider).slick('unslick');
            }
        }

        const projectSlider = document.querySelector('.project-slider');
        if (projectSlider) {
            const projectSliderClass = new Slider(projectSlider, 1);
            projectSliderClass.init();
        }

        const aboutSlider = document.querySelector('.about-slider');
        if (aboutSlider) {
            let number = 5;
            const aboutSliderClass = new Slider(aboutSlider, number);
            aboutSliderClass.init();
        }

        const servicesSection = document.querySelector('.services-content');

        const servicesSlider = (block) => {
            const servicesSliderClass = new Slider(block, 4);
            servicesSliderClass.init();
        }

        servicesSection && servicesSlider(servicesSection);


    }catch(e){
        console.log(e + '- Slider')
    }



    /*----- Adaptive Menu -----*/
    try {


        class AdaptiveMenu {
            constructor(btnMenu) {
                this.ham = btnMenu;
                this.menuTop = btnMenu.querySelector('.menu-top');
                this.menuMiddle = btnMenu.querySelector('.menu-middle');
                this.menuBottom = btnMenu.querySelector('.menu-bottom');
            }

            init() {
                this.bindActions();
            }

            bindActions() {
                this.ham.addEventListener('click', (event) => {
                    event.preventDefault();
                    this.activateMenu(event);
                });
            }

            activateMenu() {
                document.body.classList.toggle('active-adaptive-menu');
                this.menuTop.classList.toggle('menu-top-click');
                this.menuMiddle.classList.toggle('menu-middle-click');
                this.menuBottom.classList.toggle('menu-bottom-click');
            }

            removeMenu() {
                document.body.classList.remove('active-adaptive-menu');
                this.menuTop.classList.remove('menu-top-click');
                this.menuMiddle.classList.remove('menu-middle-click');
                this.menuBottom.classList.remove('menu-bottom-click');
            }
        }

        const btnMenu = document.querySelector('.btn-menu');
        if (btnMenu) {
            let adaptiveMenu = new AdaptiveMenu(btnMenu);
            adaptiveMenu.init();
        }


    }catch(e){
        console.log(e + '- Адаптивное меню')
    }



    /*  ----  Scroll Social Block in Article  -----   */

    try {

        class Social {

            constructor(social) {
                this.social = social;
                this.article = social.previousElementSibling;
                this.body = document.querySelector('body');
                this.metrica = {};
                this.scrollFunc = () => {
                    if (window.pageYOffset >= this.metrica.top && window.pageYOffset <= this.metrica.top + this.articleHeight - 500) {
                        this.initSocial();
                    } else {
                        if (this.social.classList.contains('special-social--active')) {
                            this.removeSocial();
                        }
                    }
                }
            }

            init() {
                this.metrica = this.distance()
                this.initScroll();
            }

            initScroll() {
                if (window.innerWidth >= 1200) {
                    window.addEventListener('scroll', this.scrollFunc);
                    this.removeSocial();
                } else {
                    window.removeEventListener('scroll', this.scrollFunc);
                    this.social.classList.add('special-social--active');
                }
            }


            initSocial() {
                this.social.classList.add('special-social--active');
                this.social.style.right = `${this.metrica.left}px`;
            }

            removeSocial() {
                this.social.classList.remove('special-social--active');
            }

            distance() {
                const rect = this.article.getBoundingClientRect(),
                    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                return {top: rect.top + scrollTop, left: rect.left + scrollLeft};
            }


            get articleHeight() {
                return this.article.offsetHeight;
            }
        }


        const socialBlock = document.querySelector('.special-social');
        let socialClass;

        if (socialBlock) {

            socialClass = new Social(socialBlock);
            socialClass.init();

            window.addEventListener('resize', () => {
                socialClass.init();
            })
        }


    }catch(e){
        console.log(e + '- Social')
    }




    /*---- Animation Star -----*/
    try {

            const star = document.querySelector('#star');
            const starTwo = document.querySelector('#starTwo');
            const cosmonaut = document.querySelector('.сosmonaut');
            const moon = document.querySelector('.moon');
            const man = document.querySelector('.man');
            if(star){
                star.addEventListener("animationiteration", listener, false);
                star.className = 'animate';
                cosmonaut.classList.add('cosmonaut--animate');
                cosmonaut.addEventListener('click', () => {
                    cosmonaut.classList.add('cosmonaut--click');
                    cosmonaut.classList.remove('cosmonaut--animate');
                })
                cosmonaut.addEventListener("animationend", listenerCosmonaut, false);
            }
            if(starTwo){
                starTwo.addEventListener("animationiteration", listener, false);
                starTwo.className = 'animate-two';
            }
            if(moon){
                moon.classList.add('moon--animate');
            }
            if(man){
                man.classList.add('man--animate');
            }

        function listener(e) {
            e.animationName === 'animX' && replaceText(star);
            e.animationName === 'animTwoX' && replaceText(starTwo);
        }

        function listenerCosmonaut(e) {
            switch(e.type) {
                case "animationend":
                    atTheBeginning();
            }
        }

        function atTheBeginning(){
            const cosmonaut = document.querySelector('.сosmonaut');
            cosmonaut.classList.remove('cosmonaut--click');
            cosmonaut.classList.add('cosmonaut--animate');
        }

        function replaceText(parent){

            const text = parent.querySelectorAll('.star-text');
            let indexActive;
            text.forEach((item, index) => {
                if(item.classList.contains('star-text--active')){
                    indexActive = index;
                }
            })
            ++indexActive;
            text.forEach((item, index, array) => {
                if(indexActive === array.length){
                    indexActive = 0;
                }
                if(index === indexActive){
                    item.classList.add('star-text--active');
                }else {
                    item.classList.remove('star-text--active');
                }
            })
        }

    } catch(e){
        console.log(e + '- Animation')
    }

    try {

        const statistics = document.querySelector('.statistics');
        if (statistics) {
            const text = statistics.querySelectorAll('li');
            const arr = [...text];
            arr.forEach(item => {
                const a = item.innerHTML;
                let text = a.replace(/&nbsp;/gi,' ');
                text = text.replace('+', '')
                const arr = text.split(' ');
                const number = arr.filter(item => Number.parseInt(item))
                arr.splice(0, 1);
                const p = document.createElement('p');
                p.classList.add('statistics__count');
                p.innerHTML = `${number.toString()}<span class="plus">+</span>`;
                const other = document.createElement('p');
                other.classList.add('text-bigger');
                other.innerText = `${arr.join(' ')}`;
                const li = document.createElement('li');
                li.append(p)
                li.append(other)
                item.replaceWith(li)

            })
        }

    }catch (e) {
        console.log(e + 'Replace text and styles in advantages')
    }

    try {

        const item = document.querySelectorAll('.portfolio-result__number');
        if (item) {
            const text = [...item];
            text.forEach(item => {
                const inner = item.innerText;
                const arr = inner.split(' ');
                let symbol;
                const span = document.createElement('span');
                item.innerText = `${arr[0]}`
                if(arr.length === 2){
                    symbol = arr[1];
                    span.innerText = `${symbol}`;
                    item.append(span)
                }else if(arr.length === 3){
                    symbol = arr[1] + arr[2];
                    span.innerText = `${symbol}`;
                    item.append(span)
                }

            })
        }
    }catch (e) {
        console.log(e)
    }

    try {
        $("#phone").mask("+7 (999) 999-99-99");
    }catch(e){
        console.log('Mask tel input' + e)
    }

    try {

        const scheme = document.querySelector('.portfolio-scheme');

        const checkingNumberOfBlocks = (parent) => {
            switch (parent.children.length) {
                case 3:
                    parent.classList.add('portfolio-scheme--three')
                    break;
                case 2:
                    parent.classList.add('portfolio-scheme--two')
                    break;
                case 1:
                    parent.classList.add('portfolio-scheme--one')
                    break;
                default:
                    break;
            }
        }

        scheme && checkingNumberOfBlocks(scheme);

    }catch(e){
        console.log(e)
    }

    try {

        const toolsAdvantages = document.querySelector('.tools-advantages__list');

        const checkingNumberOfBlocks = (parent) => {
            switch (parent.children.length) {
                case 4:
                    parent.classList.add('tools-advantages__list--four')
                    break;
                case 2:
                    parent.classList.add('tools-advantages__list--two')
                    break;
                case 1:
                    parent.classList.add('tools-advantages__list--one')
                    break;
                default:
                    break;
            }
        }

        toolsAdvantages && checkingNumberOfBlocks(toolsAdvantages);

    }catch (e) {
        console.log(e)
    }

    try {

        const worksList = document.querySelector('.tools-works__list');

        const worksListLogic = (block) => {
            switch(block.children.length){
                case 4:
                    block.classList.add('tools-works__list--four');
                    break;
                case 3:
                    block.classList.add('tools-works__list--three');
                    break;
                case 2:
                    block.classList.add('tools-works__list--two');
                    break;
                case 1:
                    block.classList.add('tools-works__list--one');
                    break;
            }
        }

        worksList && worksListLogic(worksList);

    }catch (e) {
        console.log(e)
    }

    try {

        const toolsAdvantages = document.querySelector('.tools-advantages__list');

        const adaptiveHeightHead = (parent) => {

            const children = [...parent.children];
            const height = [];

            children.forEach( child => {
                const title = child.querySelector('h3');
                height.push(title.offsetHeight);
            })

            height.sort((a, b) => b - a);

            children.forEach( child => {
                const title = child.querySelector('h3');
                title.style.height = height[0] + "px"
            })

        }

        toolsAdvantages && adaptiveHeightHead(toolsAdvantages);

    }catch (e) {
        console.log(e)
    }

    try {

        const section = document.querySelector('.portfolio');
        const btn = section.querySelector('.btn');
        const block = section.querySelector('.portfolio-block');
        const count = Number(document.querySelector('.div-hidden').textContent);
        let dataId;
        dataId = Number(btn.getAttribute('data-id'));
        btn.addEventListener('click', (e) => {
            e.preventDefault();

            if(block.children.length < count){
                $.ajax({
                    url: `/local/templates/ddp/pagenation_portfolio.php?PAGEN_1=${dataId}`,
                    method: "GET",
                    success: function(data) {
                        ++dataId;
                        $(block).append(data);
                    },
                    error: function() {
                        btn.style.display = 'none';
                    }
                });
            }else {
                btn.style.display = 'none';
            }


        })

    }catch (e) {
        console.log(e + 'Error AJAX query')
    }

}

