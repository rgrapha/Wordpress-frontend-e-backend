const darkStorage = localStorage.getItem('gmtdark')
const dark = document.querySelector('#dark')

// caso tenha o valor no localStorage
if (darkStorage) {
  // ativa o night mode
  document.documentElement.classList.add('dark')

  // já deixa o input marcado como ativo
  dark.checked = true
}

// ao clicar mudaremos as cores
dark.addEventListener('click', () => {
  // adiciona a classe `dark` ao html
  document.documentElement.classList.toggle('dark')

  // se tiver a classe dark
  if (document.documentElement.classList.contains('dark')) {
    // salva o tema no localStorage
    localStorage.setItem('gmtdark', true)
    return
  }
  // senão remove
  localStorage.removeItem('gmtdark')
})

jQuery(document).ready(function($) {
	var windowWidth = window.innerWidth;

	// Menu fixo 
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 100) {
	    	$("#menu").addClass("menu-fixo");
	    } else {
	    	$("#menu").removeClass("menu-fixo");
	    }  
	});
	
	/*Scroll das Section*/
		$(".scroll").click(function(event){        
	        event.preventDefault();
	        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
		});

	// Banner da pagina home
	var swiper = new Swiper('.banner-home', {
		speed: 2000,
		parallax: true,
		loop: true,
		spaceBetween: 30,
		effect: 'fade',
		pagination: {
		el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 5000,
		},    
  });

	// Galeria da pagina casa do cidadão
	var swiper = new Swiper('.galeria-casa', {
		speed: 2000,
		parallax: true,
		loop: true,
		spaceBetween: 30,
		effect: 'fade',
		pagination: {
		el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 5000,
		},    
    });

	// Avaliações
	var swiper = new Swiper('.comentarios', {
		speed: 2000,
		parallax: true,
		loop: true,
		spaceBetween: 30,		
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 5000,
		},    
  });

  var veri = 1;
	var trigger = document.getElementById('menu-trigger').addEventListener("click",function(){
		var menu = document.getElementById('menu-hidde');
		if (veri == 1) {
			menu.style.left = "0px";
			veri = 0;
		}else{
			menu.style.left = "-100%";
			veri = 1;
		}
	})    
});