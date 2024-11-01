let nextBtn = document.querySelector('.next')
let prevBtn = document.querySelector('.prev')

let slider = document.querySelector('.slider')
let sliderList = slider.querySelector('.slider .list')
let thumbnail = document.querySelector('.slider .thumbnail')
let thumbnailItems = thumbnail.querySelectorAll('.item')

thumbnail.appendChild(thumbnailItems[0])

// next button 
nextBtn.onclick = function() {
    moveSlider('next')
}


// prev button 
prevBtn.onclick = function() {
    moveSlider('prev')
}


function moveSlider(direction) {
    let sliderItems = sliderList.querySelectorAll('.item')
    let thumbnailItems = document.querySelectorAll('.thumbnail .item')
    
    if(direction === 'next'){
        sliderList.appendChild(sliderItems[0])
        thumbnail.appendChild(thumbnailItems[0])
        slider.classList.add('next')
    } else {
        sliderList.prepend(sliderItems[sliderItems.length - 1])
        thumbnail.prepend(thumbnailItems[thumbnailItems.length - 1])
        slider.classList.add('prev')
    }
    slider.addEventListener('animationend', function() {
        if(direction === 'next'){
            slider.classList.remove('next')
        } else {
            slider.classList.remove('prev')
        }
    }, {once: true})
}



// Navbar
$(document).ready(function() {
    console.log("running....");
    $("#navbar").load("navbar.html");
});

// Footer Animation
document.addEventListener('DOMContentLoaded', (event) => {
    const h2Elements = document.querySelectorAll('footer h2');

    h2Elements.forEach(h2 => {
        h2.addEventListener('mouseover', () => {
            h2.classList.add('animate');
        });

        h2.addEventListener('animationend', () => {
            h2.classList.remove('animate');
        });
    });
});