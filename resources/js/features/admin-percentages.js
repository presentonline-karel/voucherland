const colorPercentages = () => {
    const percentages = document.querySelectorAll('.tag-percentage');

    percentages.forEach(percentage => {
        var percentageLength = percentage.innerHTML.length;
        var percentageNumber = percentage.innerHTML.substring(0, percentageLength - 1);

        console.log(percentageNumber);
        
        if(percentageNumber > 0){
            percentage.style.backgroundColor = "#0CA669";
        }
        else{
            percentage.style.backgroundColor = "#DB4437";
        }
    })
}

colorPercentages();