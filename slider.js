let activeSlide = 0;

function carousel_slider(carouselDiv, carouselInnerDiv, carouselItemDiv, carouselIndicator, sliderinterval ) {
let carousel = document.querySelector('.'+ carouselDiv +'');

let carouselInner = document.querySelector('.'+ carouselInnerDiv +'');

let prev = document.querySelector('.carousel-controls .prev');

let next = document.querySelector('.carousel-controls .next');

let slides =  document.querySelectorAll('.'+ carouselInnerDiv +' .'+ carouselItemDiv +'');

let totalSlides = slides.length;

let step = 100 / totalSlides;

let activeIndicator = 0;

let direction = -1;

let jump = 1;

let interval = sliderinterval;

let time;



//Init carousel
carouselInner.style.minWidth = (totalSlides * 100) + '%';
loadIndicators( carouselInnerDiv, carouselItemDiv, carouselIndicator );
loop(true, sliderinterval, carouselDiv, carouselInnerDiv, carouselItemDiv );


//Carousel events

next.addEventListener('click',()=>{
    slideToNext( carouselDiv, carouselInnerDiv, carouselItemDiv  );
});

prev.addEventListener('click',()=>{
    slideToPrev( carouselDiv, carouselInnerDiv, carouselItemDiv );
});

carouselInner.addEventListener('transitionend',()=>{
    if(direction === -1){
        if(jump > 1){
            for(let i = 0; i < jump; i++){
                activeSlide++;
                carouselInner.append(carouselInner.firstElementChild);
            }
        }else{
            activeSlide++;
            carouselInner.append(carouselInner.firstElementChild);
        }
    }else if(direction === 1){
        if(jump > 1){
            for(let i = 0; i < jump; i++){
                activeSlide--;
                carouselInner.prepend(carouselInner.lastElementChild);
            }
        }else{
            activeSlide--;
            carouselInner.prepend(carouselInner.lastElementChild);
        }
    };

    carouselInner.style.transition = 'none';
    carouselInner.style.transform = 'translateX(0%)';
    setTimeout(()=>{
        jump = 1;
        carouselInner.style.transition = 'all ease .5s';
    });
    updateIndicators(carouselInnerDiv, carouselItemDiv, carouselIndicator);
});

document.querySelectorAll('.'+ carouselIndicator +' span').forEach(item=>{
    item.addEventListener('click',(e)=>{
        let slideTo = parseInt(e.target.dataset.slideTo);
        
        let indicators = document.querySelectorAll('.'+ carouselIndicator +' span');

        indicators.forEach((item,index)=>{
            if(item.classList.contains('active')){
                activeIndicator = index
            }
        })

        if(slideTo - activeIndicator > 1){
            jump = slideTo - activeIndicator;
            step = jump * step;
            slideToNext( carouselDiv, carouselInnerDiv, carouselItemDiv  );
        }else if(slideTo - activeIndicator === 1){
            slideToNext( carouselDiv, carouselInnerDiv, carouselItemDiv  );
        }else if(slideTo - activeIndicator < 0){

            if(Math.abs(slideTo - activeIndicator) > 1){
                jump = Math.abs(slideTo - activeIndicator);
                step = jump * step;
                slideToPrev( carouselDiv, carouselInnerDiv, carouselItemDiv );
            }
                slideToPrev( carouselDiv, carouselInnerDiv, carouselItemDiv );
        }
        step = 100 / totalSlides; 
    })
});

carousel.addEventListener('mouseover',()=>{
    loop(false, sliderinterval, carouselDiv, carouselInnerDiv, carouselItemDiv );
})

carousel.addEventListener('mouseout',()=>{
    loop(true, sliderinterval, carouselDiv, carouselInnerDiv, carouselItemDiv );
})
}

//Carousel functions

function loadIndicators( carouselInnerDiv, carouselItemDiv, carouselIndicator ){
    let slides =  document.querySelectorAll('.'+ carouselInnerDiv +' .'+ carouselItemDiv +'');
    slides.forEach((slide,index)=>{
        if(index === 0){
            document.querySelector('.'+ carouselIndicator +'').innerHTML +=
            `<span data-slide-to="${index}" class="active"></span>`;
        }else{
            document.querySelector('.'+ carouselIndicator +'').innerHTML +=
            `<span data-slide-to="${index}"></span>`;
        }
    }); 
};

function updateIndicators( carouselInnerDiv, carouselItemDiv, carouselIndicator ){
    let slides =  document.querySelectorAll('.'+ carouselInnerDiv +' .'+ carouselItemDiv +'');
    let totalSlides = slides.length;
    if(activeSlide > (totalSlides - 1)){
        activeSlide = 0;
    }else if(activeSlide < 0){
        activeSlide = (totalSlides - 1);
    }
    console.log(activeSlide);
    document.querySelector('.'+ carouselIndicator +' span.active').classList.remove('active');
    document.querySelectorAll('.'+ carouselIndicator +' span')[activeSlide].classList.add('active');
};

function slideToNext( carouselDiv, carouselInnerDiv, carouselItemDiv ){
    let slides =  document.querySelectorAll('.'+ carouselInnerDiv +' .'+ carouselItemDiv +'');

    let totalSlides = slides.length;

    let step = 100 / totalSlides;
    
    let carousel = document.querySelector('.'+ carouselDiv +'');
    let carouselInner = document.querySelector('.'+ carouselInnerDiv +'');
    let direction = -1;
    if(direction === 1){
        direction = -1;
        carouselInner.prepend(carouselInner.lastElementChild);
    };
    
    carousel.style.justifyContent = 'flex-start';
    carouselInner.style.transform = `translateX(-${step}%)`;
};

function slideToPrev( carouselDiv, carouselInnerDiv, carouselItemDiv ){
    let direction = -1;
    let carousel = document.querySelector('.'+ carouselDiv +'');
    let carouselInner = document.querySelector('.'+ carouselInnerDiv +'');
    if(direction === -1){
        direction = 1;
        carouselInner.append(carouselInner.firstElementChild);
    };
    carousel.style.justifyContent = 'flex-end'
    carouselInner.style.transform = `translateX(${step}%)`;
};

function loop(status, sliderinterval, carouselDiv, carouselInnerDiv, carouselItemDiv ){
    let interval = sliderinterval;
    if(status === true){
        time = setInterval(()=>{
            slideToNext( carouselDiv, carouselInnerDiv, carouselItemDiv  );
        },interval);
    }else{
        clearInterval(time);
    }
}


