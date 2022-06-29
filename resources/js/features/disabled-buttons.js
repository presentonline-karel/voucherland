const disableButtons = () => {
    const checkboxesVouchers = document.querySelectorAll('.admin-input');
    const deleteButton = document.querySelector('.button-delete');

    var amountChecked = 0;



    //CHECK HOW MANY BOXES ARE CHECKED
    function checkBoxes() {
        amountChecked = 0;

        checkboxesVouchers.forEach(checkbox => {
            if (checkbox.checked == true) {
                amountChecked++;
            }
        });

        //DISABLE/ENABLE BUTTON
        if (amountChecked > 0) {
            deleteButton.disabled = false;
        }
        else {
            deleteButton.disabled = true;
        }
    }



    //WHEN CHECKBOX IS CLICKED
    for (let i = 0; i < checkboxesVouchers.length; i++) {
        checkboxesVouchers[i].addEventListener("click", checkBoxes);
    }
};

disableButtons();