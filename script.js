document.querySelector('.iconbar').addEventListener('click',function(){
    document.querySelector('.search_form').style.display = 'block';
    document.querySelector('.iconbar').style.display = 'none';
})
document.querySelector('.input_search').addEventListener('blur',function(){
    document.querySelector('.search_form').style.display = 'none';
    document.querySelector('.iconbar').style.display = 'block ';
})
let press = 0;
document.querySelector('.bar_collapse').addEventListener('click',function(){
        
    if(press == 0){
        document.querySelector('.collap').style.display = 'none';
        press++;
    }else{
        document.querySelector('.collap').style.display = 'block';
        press--;
    }
})
document.querySelector('.title_bar_collap_ttd').addEventListener('click',function(){
    document.querySelector('.collap').style.display = 'none';
})
document.querySelector('.title_bar_collap_ptg').addEventListener('click',function(){
    document.querySelector('.collap').style.display = 'none';
})
document.querySelector('.title_bar_collap_g').addEventListener('click',function(){
    document.querySelector('.collap').style.display = 'none';
})


let data_of_food = [
    {
        img: './img/Vietnamese food recipes-1.jpg',
        content: '5 VIETNAMESE RECIPES TO TRY AT HOME'
    },
    {
        img: './img/Banh mi in Vietnam.jpg',
        content: '7 SUPER BANH MI TO TRY IN VIET NAM'
    },
    {
        img: './img/best dishes HCMC.jpg',
        content: 'EATING LIKE A LOCAL IN HO CHI MINH CITY'
    }
]
let data_of_nature = [
    {
        img: './img/sustainable hotels vietnam_0.jpg',
        content: 'THE BEST SUSTAINABLE STAYS IN VIETNAM'
    },
    {
        img: './img/Hanoi daytrips.jpg',
        content: '5 DAY TRIP DESTINATIONS FROM HANOI'
    },
    {
        img: './img/Virtual Tours Vietnam-6.jpg',
        content: 'VIETNAM’S HERITAGE SITES IN 360 DEGREES'
    }
]
let data_of_culture = [
    {
        img: './img/Best responsible tours Vietam.jpg',
        content: 'EXPLORE AND EMBRACE: VIETNAM’S GREEN TOURS'
    },
    {
        img: './img/towns of Mekong Delta-2.jpg',
        content: '5 UNIQUE TOWNS IN THE MEKONG DELTA'
    },
    {
        img: './img/ben tre tour.jpg',
        content: 'DAY-TRIPPING IN THE MEKONG DELTA'
    }
]
let data_of_citys = [
    {
        img: './img/What to do in Dalat-10.jpg',
        content: '8 WAYS TO APPRECIATE DA LAT'
    },
    {
        img: './img/top rooftop bars asia.jpg',
        content: '9 STUNNING ROOFTOP BARS'
    },
    {
        img: './img/Cool souvenirs Vietnam Travel-2.jpg',
        content: '10 COOL COLLECTIBLES BUY VIETNAM'
    }
]
document.querySelector('.btn_food').addEventListener('click',function(){
        document.querySelector('.btn_food').classList.add('active');
        document.querySelector('.btn_nature').classList.remove('active');
        document.querySelector('.btn_culture').classList.remove('active');
        document.querySelector('.btn_city').classList.remove('active');

        document.querySelector('.img_insprired_1').innerHTML = 
        `<img class="img_of_insprired img_of_insprired_1" style="width: 100%;" src="${data_of_food[0].img}" alt="">
        <div class="content_insprired content_insprired1">${data_of_food[0].content}</div>`

        document.querySelector('.img_insprired_2').innerHTML = 
        `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_food[1].img}" alt="">
        <div class="content_insprired content_insprired2">${data_of_food[1].content}</div>`

        document.querySelector('.img_insprired_3').innerHTML = 
        `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_food[2].img}" alt="">
        <div class="content_insprired content_insprired3">${data_of_food[2].content}</div>`
    
})
document.querySelector('.btn_culture').addEventListener('click',function(){
    document.querySelector('.btn_culture').classList.add('active');
    document.querySelector('.btn_food').classList.remove('active');
    document.querySelector('.btn_nature').classList.remove('active');
    document.querySelector('.btn_city').classList.remove('active');
    document.querySelector('.img_insprired_1').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_1" style="width: 100%;" src="${data_of_culture[0].img}" alt="">
    <div class="content_insprired content_insprired1">${data_of_culture[0].content}</div>`

    document.querySelector('.img_insprired_2').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_culture[1].img}" alt="">
    <div class="content_insprired content_insprired2">${data_of_culture[1].content}</div>`

    document.querySelector('.img_insprired_3').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_culture[2].img}" alt="">
    <div class="content_insprired content_insprired3">${data_of_culture[2].content}</div>`

})
document.querySelector('.btn_city').addEventListener('click',function(){
    document.querySelector('.btn_city').classList.add('active');
    document.querySelector('.btn_nature').classList.remove('active');
    document.querySelector('.btn_food').classList.remove('active');
    document.querySelector('.btn_culture').classList.remove('active');
    document.querySelector('.img_insprired_1').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_1" style="width: 100%;" src="${data_of_citys[0].img}" alt="">
    <div class="content_insprired content_insprired1">${data_of_citys[0].content}</div>`

    document.querySelector('.img_insprired_2').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_citys[1].img}" alt="">
    <div class="content_insprired content_insprired2">${data_of_citys[1].content}</div>`

    document.querySelector('.img_insprired_3').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_citys[2].img}" alt="">
    <div class="content_insprired content_insprired3">${data_of_citys[2].content}</div>`

})
document.querySelector('.btn_nature').addEventListener('click',function(){
    document.querySelector('.btn_nature').classList.add('active');
    document.querySelector('.btn_food').classList.remove('active');
    document.querySelector('.btn_city').classList.remove('active');
    document.querySelector('.btn_culture').classList.remove('active');
    document.querySelector('.img_insprired_1').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_1" style="width: 100%;" src="${data_of_nature[0].img}" alt="">
    <div class="content_insprired content_insprired1">${data_of_nature[0].content}</div>`

    document.querySelector('.img_insprired_2').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_nature[1].img}" alt="">
    <div class="content_insprired content_insprired2">${data_of_nature[1].content}</div>`

    document.querySelector('.img_insprired_3').innerHTML = 
    `<img class="img_of_insprired img_of_insprired_3" style="width: 100%;" src="${data_of_nature[2].img}" alt="">
    <div class="content_insprired content_insprired3">${data_of_nature[2].content}</div>`

})