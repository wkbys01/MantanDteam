document.addEventListener("DOMContentLoaded", function() {
    // ====== 要素の定義 ======

    // ダイアログの要素を取得
    const dialog = document.getElementById("dialog");
    const dialogTxt = document.getElementById("dialogTxt");
    const noticeTxt = document.getElementById("noticeTxt");
    const yesBtn = document.getElementById("yesBtn");
    const cancelBtn = document.getElementById("cancelBtn");

    // サイドバーのボタンを取得
    const listBtn = document.getElementById("listBtn");
    const orderBtn = document.getElementById("orderBtn");
    const historyBtn = document.getElementById("historyBtn");
    const callBtn = document.getElementById("callBtn");
    const checkoutBtn = document.getElementById("checkoutBtn");


    // ====== 関数 ======

    // ダイアログを表示
    function showDialog(message, notice = "") {
        dialogTxt.textContent = message;
        noticeTxt.textContent = notice;

        dialog.style.display = "block";
    }

    // ダイアログを非表示
    function hideDialog() {
        dialog.style.display = "none";
    }

    // ボタンクリック時の処理
    function handleButtonClick(event) {
        // console.log("選択されたボタンのid：",event.currentTarget.id);

        switch (event.currentTarget.id) {
            case "listBtn":
                console.log("注文リストボタンが押されました");
                break;
            case "orderBtn":;
                showDialog("注文を確定しますか？");
                break;
            case "historyBtn":
                console.log("注文履歴ボタンが押されました");
                break;
            case "callBtn":
                showDialog("店員を呼び出しますか？");
                break;
            case "checkoutBtn":
                showDialog("お会計へ進みますか？", "※お会計以降は注文できません。");
                break;
            default:
                alert("その他のボタンが押されました");
                break;
        }
    }


    // ====== イベントリスナー ======
    listBtn.addEventListener("click", handleButtonClick);
    orderBtn.addEventListener("click", handleButtonClick);
    historyBtn.addEventListener("click", handleButtonClick);
    callBtn.addEventListener("click", handleButtonClick);
    checkoutBtn.addEventListener("click", handleButtonClick);

    // ダイアログのキャンセルボタン
    cancelBtn.addEventListener("click", hideDialog);
});
