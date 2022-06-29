const searchFunction = () => {
    const adminVouchers = document.querySelector('.admin-vouchers');
    const adminArticles = document.querySelector('.admin-articles');
    const vouchers = document.querySelector('.website-vouchers');

    const searchedItemsSection = document.querySelector('.searched-items');
    const searchedItems = document.querySelectorAll('.searched-item');
    const searchedItemsTitles = document.querySelectorAll('.search-title');

    const searchInput = document.querySelector('.input-search');

    const noResults = document.querySelector('.no-search-results');
    const noResultsSearchTerm = document.querySelector('.search-term');

    noResults.style.display = "none";


    searchInput.addEventListener('input', () => {
        var userInput = searchInput.value;
        var amountResults = 0;

        if (userInput.length < 1) {
            if (typeof (adminVouchers) != 'undefined' && adminVouchers != null) {
                adminVouchers.style.display = "block";
            }
            if (typeof (adminArticles) != 'undefined' && adminArticles != null) {
                adminArticles.style.display = "block";
            }
            if (typeof (vouchers) != 'undefined' && vouchers != null) {
                vouchers.style.display = "block";
            }

            searchedItemsSection.style.display = "none";
        }
        else {
            noResults.style.display = "none";
            
            if (typeof (adminVouchers) != 'undefined' && adminVouchers != null) {
                adminVouchers.style.display = "none"
            }
            if (typeof (adminArticles) != 'undefined' && adminArticles != null) {
                adminArticles.style.display = "none";
            }
            if (typeof (vouchers) != 'undefined' && vouchers != null) {
                vouchers.style.display = "none";
            }

            searchedItemsSection.style.display = "block";

            for (let i = 0; i < searchedItems.length; i++) {
                var searchedItemTitle = searchedItemsTitles[i].innerHTML.toLowerCase();

                if (searchedItemTitle.includes(userInput)) {
                    amountResults++;
                    if (typeof (vouchers) != 'undefined' && vouchers != null) {
                        searchedItems[i].style.display = "block";
                    }
                    else {
                        searchedItems[i].style.display = "flex";
                    }
                }
                else {
                    searchedItems[i].style.display = "none";
                }
            }

            if(amountResults == 0){
                noResults.style.display = "block";
                noResultsSearchTerm.innerHTML = userInput;
            }
        }
    });
};

searchFunction();