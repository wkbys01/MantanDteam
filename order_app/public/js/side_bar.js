document.addEventListener("DOMContentLoaded", function() {
    /*==========================
        要素の定義
    ===========================*/

    // サイドバー
    const jaBtn = document.getElementById("jaBtn");
    const cnBtn = document.getElementById("cnBtn");
    const enBtn = document.getElementById("enBtn");

    const jaTxt = document.getElementById("jaTxt");
    const cnTxt = document.getElementById("cnTxt");
    const enTxt = document.getElementById("enTxt");

    const listBtn = document.getElementById("listBtn");
    const orderBtn = document.getElementById("orderBtn");
    const historyBtn = document.getElementById("historyBtn");
    const callBtn = document.getElementById("callBtn");
    const checkoutBtn = document.getElementById("checkoutBtn");


    // ダイアログ
    const dialog = document.getElementById("dialog");
    const dialogTxt = document.getElementById("dialogTxt");
    const noticeTxt = document.getElementById("noticeTxt");
    const yesBtn = document.getElementById("yesBtn");
    const cancelBtn = document.getElementById("cancelBtn");


    // ポップアップ共通
    const xBtn = document.getElementById("xBtn");

    // 注文リスト
    const listDetails = document.getElementById("listDetails");
    const confirmBtn = document.getElementById("confirmBtn");

    // メニュー詳細
    const menuDetails = document.getElementById("menuDetails");
    const addBtn = document.getElementById("addBtn");

    // メニューページ
    const menuContentBtn = document.getElementById("menuContentBtn");
    console.log(menuContentBtn);


    /*==========================
        関数の定義
    ===========================*/

    // ページ読み込み時に保存された言語設定を復元
    function initializeLang() {
        // localStorageから言語設定を取得（初期値は"ja"）
        const savedLang = localStorage.getItem("selectedLang") || "ja";

        // 保存されていた言語に応じてスタイルを設定
        setLangStyle(savedLang);
    }
    // 言語設定を初期化（保存された設定または日本語）
    initializeLang();

    // 言語のスタイルを設定する関数
    function setLangStyle(langCode) {
        // 一旦すべてのactiveクラスを削除
        jaTxt.classList.remove("active");
        cnTxt.classList.remove("active");
        enTxt.classList.remove("active");

        // 選択された言語にactiveクラスを追加
        switch (langCode) {
            case "ja":
                jaTxt.classList.add("active");
                break;
            case "cn":
                cnTxt.classList.add("active");
                break;
            case "en":
                enTxt.classList.add("active");
                break;
            default:
                alert("スタイルの変更に失敗");
                break;
        }
    }

    // 言語選択処理
    function selectLang(buttonId) {
        let selectedLang;

        switch (buttonId) {
            case "jaBtn":
                selectedLang = "ja";
                break;
            case "cnBtn":
                selectedLang = "cn";
                break;
            case "enBtn":
                selectedLang = "en";
                break;
            default:
                alert("言語選択に失敗");
                return;
        }

        // localStorageに選択した言語を保存
        localStorage.setItem("selectedLang", selectedLang);
        // スタイルを更新
        setLangStyle(selectedLang);
    }

    // ----------------------

    // // 注文リストを表示
    // function showlistDetails() {
    //     listDetails.style.display = "block";
    // }
    // // 注文リストを非表示
    // function hidelistDetails() {
    //     listDetails.style.display = "none";
    // }


    // ポップアップを表示
    function showPopup() {
        alert(`選択されたID：${currentId}`);

        switch (currentId) {
            case "listBtn":
                listDetails.style.display = "block";
                break;
            case "menuContentBtn":
                menuDetails.style.display = "block";
                break;
            default:
                alert("ポップアップの表示に失敗")
                break;
        }
    }
    // ポップアップを非表示
    function hidePopup() {
        alert(`選択されたID：${currentId}`);

        switch (currentId) {
            case "listBtn":
                listDetails.style.display = "none";
                break;
            case "menuContentBtn":
                menuDetails.style.display = "none";
                break;
            default:
                alert("ポップアップの非表示に失敗")
                break;
        }
    }

    // ----------------------

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
    // はいボタンからのページ遷移
    function pageTransition() {
        switch (currentId) {
            case "orderBtn":
            case "confirmBtn":
                location.href = "/order_page";
                break;
            case "callBtn":
                location.href = "/call_page";
                break;
            case "checkoutBtn":
                location.href = "/checkout_page";
                break;
            default:
                alert("ページ遷移できませんでした");
                break;
        }
    }

    // ----------------------

    let currentId = "";
    let currentAction = "";

    // ボタンクリック時の処理
    function handleButtonClick(event) {
        currentId = event.currentTarget.id

        switch (currentId) {
            case "jaBtn":
            case "cnBtn":
            case "enBtn":
                selectLang(currentId);
                break;
            case "listBtn":
            case "menuContentBtn":
                showPopup();
                break;
            case "orderBtn":
            case "confirmBtn":
                showDialog("注文を確定しますか？");
                currentAction = "pageTransition";
                break;
            case "historyBtn":
                location.href = "/history_page";
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


    /*==========================
        イベントリスナー
    ===========================*/
    jaBtn.addEventListener("click", handleButtonClick);
    cnBtn.addEventListener("click", handleButtonClick);
    enBtn.addEventListener("click", handleButtonClick);

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
                pageTransition();
                break;
            default:
                alert("エラー");
                hideDialog();
                break;
        };
    });

    // ポップアップの×ボタン
    xBtn.addEventListener("click", hidePopup);

    // 注文リストの確定ボタン
    confirmBtn.addEventListener("click", handleButtonClick);

    // メニュー詳細ボタン
    menuContentBtn.addEventListener("click", handleButtonClick);

});
