import Header from "./modules/header";

// ヘッダー
(()=>{
    const root = document.querySelector('.js-header');

    if (!root) {
        return;
    }

    const instance = new Header(root);
    instance.init();
})();
