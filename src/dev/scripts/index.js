import Header from "./modules/header";
import Splide from './library/splide.min';

// ヘッダー
(()=>{
    const root = document.querySelector('.js-header');

    if (!root) {
        return;
    }

    const instance = new Header(root);
    instance.init();
})();

// トップMVのカルーセル
(() => {
    const rootClass = '.js-mvCarousel';
    const root = document.querySelector(rootClass);

    if (!root) {
        return;
    }
    
    const option = {
        arrows: false,
        type  : 'fade',
        pagination: true,
        speed: 1000,
        rewind: true,
        classes: {
            // pagination: 'splide__pagination mv__pagination',
            page      : 'splide__pagination__page mv__paginationItem',
        },
    }

    const instance = new Splide(rootClass, option);

    instance.mount();
})();
