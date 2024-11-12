'use strict'
let m1pic = document.getElementById("mem1pic");     
let m2pic = document.getElementById("mem2pic");
let m3pic = document.getElementById("mem3pic");
let m1desc = document.getElementById("mem1desc");
let m2desc = document.getElementById("mem2desc");
let m3desc = document.getElementById("mem3desc");
let m1role = document.getElementById("mem1role");
let m2role = document.getElementById("mem2role");
let m3role = document.getElementById("mem3role");

m1pic.addEventListener('mouseenter', e => {
    m1desc.style.opacity = '1';
    m1role.style.opacity = '1';
     })

m2pic.addEventListener('mouseenter', e => {
        m2desc.style.opacity = '1';
        m2role.style.opacity = '1';
 })

m3pic.addEventListener('mouseenter', e => {
            m3desc.style.opacity = '1';
            m3role.style.opacity = '1';
 })

m1pic.addEventListener('mouseleave', e => {
    m1desc.style.opacity = '0';
    m1role.style.opacity = '0';
})

m2pic.addEventListener('mouseleave', e => {
        m2desc.style.opacity = '0';
        m2role.style.opacity = '0';
 })
    
m3pic.addEventListener('mouseleave', e => {
        m3desc.style.opacity = '0';
        m3role.style.opacity = '0';
 })


 