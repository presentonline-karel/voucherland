const selectedItems = () => {
    const adminVouchers = document.querySelectorAll('.voucher-admin');
    const adminVouchersInputs = document.querySelectorAll('.voucher-admin__input');

    const adminArticles = document.querySelectorAll('.article-admin');
    const adminArticlesInputs = document.querySelectorAll('.article-admin__content__input');

    const admins = document.querySelectorAll('.admin');
    const adminInputs = document.querySelectorAll('.admin__content__input');



    //VOUCHERS
    if (typeof (adminVouchersInputs) != 'undefined' && adminVouchersInputs != null) {
        adminVouchersInputs.forEach(input => {
            input.addEventListener('click', () => {
                for (let i = 0; i < adminVouchersInputs.length; i++) {
                    if (adminVouchersInputs[i].checked == true) {
                        adminVouchers[i].classList.add('selected-item');
                    }
                    else {
                        adminVouchers[i].classList.remove('selected-item');
                    }
                }
            });
        });
    }

    //ARTICLES
    if (typeof (adminArticlesInputs) != 'undefined' && adminArticlesInputs != null) {
        adminArticlesInputs.forEach(inputArticle => {
            inputArticle.addEventListener('click', () => {
                for (let j = 0; j < adminArticlesInputs.length; j++) {
                    if (adminArticlesInputs[j].checked == true) {
                        adminArticles[j].classList.add('selected-item');
                    }
                    else {
                        adminArticles[j].classList.remove('selected-item');
                    }
                }
            });
        });
    }

    //ADMINS
    if (typeof (adminInputs) != 'undefined' && adminInputs != null) {
        adminInputs.forEach(inputAdmin => {
            inputAdmin.addEventListener('click', () => {
                for (let k = 0; k < adminInputs.length; k++) {
                    if (adminInputs[k].checked == true) {
                        admins[k].classList.add('selected-item');
                    }
                    else {
                        admins[k].classList.remove('selected-item');
                    }
                }
            });
        });
    }
}

selectedItems();