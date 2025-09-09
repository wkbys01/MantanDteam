document.addEventListener("DOMContentLoaded", function() {
    /*==========================
        要素の定義
    ===========================*/

    // ===== サイドバー =====
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


    // ===== ダイアログ =====
    const dialog = document.getElementById("dialog");
    const dialogTxt = document.getElementById("dialogTxt");
    const noticeTxt = document.getElementById("noticeTxt");
    const yesBtn = document.getElementById("yesBtn");
    const cancelBtn = document.getElementById("cancelBtn");


    // ===== ポップアップ =====
    const listXBtn = document.getElementById("listXBtn");
    const menuXBtn = document.getElementById("menuXBtn");

    // 注文リスト
    const listDetails = document.getElementById("listDetails");
    const confirmBtn = document.getElementById("confirmBtn");

    // メニュー詳細
    const menuDetails = document.getElementById("menuDetails");
    const optionBtns = document.querySelectorAll('.option_btn');
    const addBtn = document.getElementById("addBtn");

    // メニューボタン
    const menuContentBtn = document.getElementById("menuContentBtn");


    /*==========================
        関数の定義
    ===========================*/

    // ===== 言語設定 =====

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


    // ===== ポップアップ =====

    // 表示
    function showPopup() {
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
    // 非表示
    function hidePopup() {
        listDetails.style.display = "none";
        menuDetails.style.display = "none";
    }

    // --- メニュー詳細 ---
    // オプションボタン
    function initializeOptionBtns() {
        // すべてのオプション(種類)を取得
        const optionContents = document.querySelectorAll(".option_content");

        // オプションの種類ごとに処理を分岐
        optionContents.forEach(optionContent => {
            // データ属性から選択タイプを取得
            const optionType = optionContent.dataset.optionType;
            // そのオプション内のボタンをすべて取得
            const optionBtns = optionContent.querySelectorAll(".option_btn");

            // 各ボタンのクリック時処理
            optionBtns.forEach(btn => {
                btn.addEventListener("click", function() {
                    if (optionType === "multiple") {
                        // 複数選択可能オプション
                        this.classList.toggle("active_option");
                    } else {
                        // 単一選択オプション
                        if (this.classList.contains("active_option")) {
                            // 選択済み → 解除
                            this.classList.remove("active_option");
                        } else {
                            // 未選択 → 他を解除して選択
                            optionBtns.forEach(otherBtn => {
                                otherBtn.classList.remove("active_option")
                            });
                            this.classList.add("active_option");
                        }
                    }
                });
            });
        });
    }
    // オプションボタンを初期化
    initializeOptionBtns();

    // 追加ボタン
    function addMenu() {
        alert("商品を注文リストに追加しました。");
        hidePopup();
    }


    // ===== ダイアログ =====

    // 表示
    function showDialog(message, notice = "") {
        dialogTxt.textContent = message;
        noticeTxt.textContent = notice;

        dialog.style.display = "block";
    }
    // 非表示
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


    // ===== ボタンクリック時の処理 =====

    let currentId = "";
    let currentAction = "";

    function handleButtonClick(event) {
        currentId = event.currentTarget.id;

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
    // ===== サイドバー =====
    jaBtn.addEventListener("click", handleButtonClick);
    cnBtn.addEventListener("click", handleButtonClick);
    enBtn.addEventListener("click", handleButtonClick);

    listBtn.addEventListener("click", handleButtonClick);
    orderBtn.addEventListener("click", handleButtonClick);
    historyBtn.addEventListener("click", handleButtonClick);
    callBtn.addEventListener("click", handleButtonClick);
    checkoutBtn.addEventListener("click", handleButtonClick);

    // ===== ポップアップ =====
    // ×ボタン
    listXBtn.addEventListener("click", hidePopup);
    menuXBtn.addEventListener("click", hidePopup);

    // --- 注文リスト ---
    // 確定ボタン
    confirmBtn.addEventListener("click", handleButtonClick);

    // --- メニュー詳細 ---
    // 商品ボタン
    menuContentBtn.addEventListener("click", handleButtonClick);

    // オプションボタン

    // 追加ボタン
    addBtn.addEventListener("click", addMenu);


    // ===== ダイアログ =====
    // キャンセルボタン
    cancelBtn.addEventListener("click", hideDialog);
    // はいボタン
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
});
