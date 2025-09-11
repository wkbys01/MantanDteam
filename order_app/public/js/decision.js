document.addEventListener("DOMContentLoaded", function() {
    const path = window.location.pathname;

    if (path === "/checkout_page") {
        // 5秒後に自動でtopページに戻る
        setTimeout(function() {
            window.location.href = "/start_page";
        }, 5000);
    } else {
        // クリックで前のページに戻る
        document.body.addEventListener("click", () => {
            window.history.back();
        });

        // 5秒後に自動で前のページに戻る
        setTimeout(function() {
            window.history.back();
        }, 5000);
    }
});
