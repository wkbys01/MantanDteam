document.addEventListener("DOMContentLoaded", function() {
    // ====== 要素の定義 ======

    // ダイアログの要素を取得
    const dialog = document.getElementById("dialog");
    const dialogTxt = document.getElementById("dialogTxt");
    const noticeTxt = document.getElementById("noticeTxt");
    const yesBtn = document.getElementById("yesBtn");
    const cancelBtn = document.getElementById("cancelBtn");

    // 注文リストの要素を取得
    const listDetails = document.getElementById("listDetails");
    const xBtn = document.getElementById("xBtn");

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

    // 注文リスト表示
    function showlistDetails() {
        listDetails.style.display = "block";
    }
    // 注文リスト非表示
    function hidelistDetails() {
        listDetails.style.display = "none";
    }

    // ページ遷移
    function pageTransition() {
        switch (currentId) {
            case "orderBtn":
                location.href = "/order_page"
                break;
            case "callBtn":
                location.href = "/call_page"
                break;
            case "checkoutBtn":
                location.href = "/checkout_page"
                break;
            default:
                alert("ページ遷移できませんでした")
                break;
        }
    }


    let currentId = "";
    let currentAction = "";

    // ボタンクリック時の処理
    function handleButtonClick(event) {
        currentId = event.currentTarget.id

        switch (currentId) {
            case "listBtn":
                showlistDetails();
                break;
            case "orderBtn":
                showDialog("注文を確定しますか？");
                currentAction = "pageTransition";
                break;
            case "historyBtn":
                alert("注文履歴ボタン：テストページへ遷移");
                location.href = "/top_page"   // 仮ページへ遷移
                // currentAction = "pageTransition";
                break;
            case "callBtn":
                showDialog("店員を呼び出しますか？");
                currentAction = "pageTransition";
                break;
            case "checkoutBtn":
                showDialog("お会計へ進みますか？", "※お会計以降は注文できません。");
                currentAction = "pageTransition";
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

    // ダイアログのはいボタン
    yesBtn.addEventListener("click", () => {
        switch (currentAction) {
            case "pageTransition":
                // alert("ページを移行します");
                pageTransition()
                break;
            default:
                alert("エラー");
                hideDialog();
                break;
        };
    });

    // 注文リストの×ボタン
    xBtn.addEventListener("click", hidelistDetails);
});
