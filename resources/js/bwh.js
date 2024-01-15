import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import '../css/bwh.scss';
import.meta.glob(['../images/**']);

// init Swiper:
const swiper = new Swiper('.swiper', {
     // configure Swiper to use modules
     speed: 1000,
     slidesPerView: 3,
     spaceBetween: 30,
     loop: true,
     centeredSlides: true,
     pagination: {
          el: '.swiper-pagination',
     },
     modules: [Pagination],
     breakpoints: {
          0: {
               slidesPerView: 1.2,
               spaceBetween: 5,
          },
          500: {
               slidesPerView: 2,
               spaceBetween: 10,
          },
          1024: {
               slidesPerView: 3,
               spaceBetween: 30,
          },
          1441: {
               slidesPerView: 4,
               spaceBetween: 30,
          },
     },
});
