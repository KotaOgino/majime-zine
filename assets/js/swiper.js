// import Swiper, { Pagination ,Autoplay} from 'swiper';
// Swiper.use([Pagination, Autoplay]);

const mvSwiper = new Swiper('.swiper-container', {
	loop: true,
	slidesPerView: 1,
	effect: 'fade',
	fadeEffect: { 
		crossFade: true
	},
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
	speed: 2000,
})