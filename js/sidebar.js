const navLinks = document.querySelectorAll('.nav-link');
let URLactual = window.location;

if(URLactual.pathname === '/parkingSystem/home'){
    navLinks[0].classList.add('active');
}else if(URLactual.pathname === '/parkingSystem/parking'){
    navLinks[1].classList.add('active');
    
}else if(URLactual.pathname === '/parkingSystem/ganancias'){
    navLinks[2].classList.add('active');
    
}else if(URLactual.pathname === '/parkingSystem/dashboard'){
    navLinks[3].classList.add('active');
    
}else{
    null
}