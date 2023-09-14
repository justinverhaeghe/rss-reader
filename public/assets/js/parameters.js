let inputFeeds = document.querySelectorAll(".feed");

const checkMaxFeed = () => {
    let checkedCount = 0;

    inputFeeds.forEach((inputFeed) => {
        if (inputFeed.checked) {
            checkedCount++;
        }
    });
    if (checkedCount >= 3) {
        inputFeeds.forEach((inputFeed) => {
            if (!inputFeed.checked) {
                inputFeed.disabled = true;
            }
        });
    } else {
        inputFeeds.forEach((inputFeed) => {
            inputFeed.disabled = false;
        });
    }
};

inputFeeds.forEach((inputFeed) => {
    inputFeed.addEventListener("click", checkMaxFeed);
});
