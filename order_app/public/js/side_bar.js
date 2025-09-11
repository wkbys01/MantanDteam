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
    // const historyBtn = document.getElementById("historyBtn");
    const callBtn = document.getElementById("callBtn");
    const checkoutBtn = document.getElementById("checkoutBtn");


    // ===== ダイアログ =====
    const dialog = document.getElementById("dialog");
    const dialogTxt = document.getElementById("dialogTxt");
    const noticeTxt = document.getElementById("noticeTxt");
    const yesBtn = document.getElementById("yesBtn");
    const cancelBtn = document.getElementById("cancelBtn");


    // ===== ポップアップ =====
    const popupContainers = document.querySelectorAll(".popup_container");
    const listXBtn = document.getElementById("listXBtn");
    const menuXBtn = document.getElementById("menuXBtn");

    // 注文リスト
    const listDetails = document.getElementById("listDetails");
    const confirmBtn = document.getElementById("confirmBtn");

    // メニュー詳細
    const menuDetails = document.getElementById("menuDetails");
    // const optionBtns = document.querySelectorAll('.option_btn');
    const addBtn = document.getElementById("addBtn");
    
    // 追記
    let quantity = 1;       // モーダル内数量
    let unitPrice = 0;      // 選択中商品の単価

    const modalName     = document.getElementById("modalName");
    const modalPrice    = document.getElementById("modalPrice");
    const modalImage    = document.getElementById("modalImage");
    const modalQuantity = document.getElementById("modalQuantity");
    const plusBtn       = document.getElementById("plusBtn");
    const minusBtn      = document.getElementById("minusBtn");
    const allergyList = document.querySelector(".allergy_contents");

    // メニューボタン
    const menuContentBtns = document.querySelectorAll(".menu_content_btn");


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
    function hidePopup(id) {
        let btnId = id;
        console.log(btnId);

        switch (btnId) {
            case "listXBtn":
                listDetails.style.display = "none";
                break;
            case "addBtn":
            case "menuXBtn":
                menuDetails.style.display = "none";
                break;
            default:
                alert("ポップアップの非表示に失敗")
                break;
        }
    }

    // --- メニュー詳細 ---
    // 表示機能　追記
    // ------------------------------
    // 商品ボタンをクリックした時
    // ------------------------------
    document.querySelectorAll(".menu_content_btn").forEach(btn => {
        btn.addEventListener("click", () => {
            unitPrice = parseInt(btn.dataset.price, 10);
            quantity = 1;

            modalName.textContent     = btn.dataset.name;
            modalPrice.textContent    = unitPrice;
            modalImage.src            = btn.dataset.image;
            modalQuantity.textContent = quantity;

            const allergens = JSON.parse(btn.dataset.allergens);
            allergyList.innerHTML = "";
            allergens.forEach(a => {
                const li = document.createElement("li");
                li.innerHTML = `
                    <img src="${a.image}" alt="${a.name}"></img>
                    <p>${a.name}</p>
                `;
                allergyList.appendChild(li);
            });

        });
    });

    // ------------------------------
    // プラスボタン
    // ------------------------------
    plusBtn.addEventListener("click", () => {
        quantity++;
        modalQuantity.textContent = quantity;
        modalPrice.textContent = (unitPrice * quantity);
    });

    // ------------------------------
    // マイナスボタン
    // ------------------------------
    minusBtn.addEventListener("click", () => {
        if (quantity > 1) {
            quantity--;
            modalQuantity.textContent = quantity;
            modalPrice.textContent = (unitPrice * quantity)
            }
    });


    // ------------------------------
    // 追加ボタン
    // ------------------------------
    document.querySelector("#addBtn").addEventListener("click", () => {
        totalPrice += unitPrice * quantity; // 合計金額に加算
        totalPriceElement.textContent = totalPrice;

        // モーダル内数量をリセット
        quantity = 1;
        modalQuantity.textContent = quantity;
        modalPrice.textContent = unitPrice;
    });

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



// ===============================================================================
// ===== 注文リスト =====
// ===============================================================================

let orderList = []; // 注文リスト配列

// ページロード時にローカルストレージから復元
const savedOrders = localStorage.getItem("orderList");
if (savedOrders) {
    orderList = JSON.parse(savedOrders);
    updateOrderUI();
}

// changeQty をグローバルに
window.changeQty = function(index, delta) {
    const item = orderList[index];
    item.qty += delta;
    if(item.qty < 1) item.qty = 1;
    item.price = item.unitPrice * item.qty;  // unitPrice を使って計算

    updateOrderUI();
    // ローカルストレージに保存
    localStorage.setItem("orderList", JSON.stringify(orderList));
}

// addMenu のときに unitPrice を追加
function addMenu() {
    const name = modalName.textContent;
    const qty = quantity;
    const price = unitPrice * qty;

    const index = orderList.findIndex(item => item.name === name);
    if(index !== -1){
        orderList[index].qty += qty;
        orderList[index].price += price;
    } else {
        orderList.push({name, qty, price, unitPrice}); // unitPrice を保持
    }

    updateOrderUI();
    // ローカルストレージに保存
    localStorage.setItem("orderList", JSON.stringify(orderList));

    hidePopup("addBtn");

    quantity = 1;
    modalQuantity.textContent = quantity;
    modalPrice.textContent = unitPrice;
}

function updateOrderUI() {
    // モーダル内テーブル tbody
    const tbody = listDetails.querySelector("tbody");
    tbody.innerHTML = "";

    // サイドバー ul
    const sidebarList = document.querySelector(".order_list");
    sidebarList.innerHTML = "";

    let total = 0;

    orderList.forEach((item, i) => {
        total += item.price;

        // モーダル用 tr
        const tr = document.createElement("tr");
        tr.innerHTML = `
            <td>${item.name}</td>
            <td>${item.price / item.qty}</td>
            <td>
                <div class="quantity_adjust_box">
                    <button class="minus_btn" onclick="changeQty(${i}, -1)"></button>
                    <p class="quantity">${item.qty}</p>
                    <button class="plus_btn" onclick="changeQty(${i}, 1)"></button>
                </div>
            </td>
        `;
        tbody.appendChild(tr);

        // サイドバー用 li
        const li = document.createElement("li");
        li.textContent = `${item.name} x${item.qty} - ¥${item.price}`;
        sidebarList.appendChild(li);
    });

    // 合計金額表示
    const totalPriceElement = listDetails.querySelector(".total_price");
    totalPriceElement.textContent = total;
}

// 注文確定ボタン
function confirmOrder() {
    // ここでダイアログ表示済みなら、ダイアログOK後に呼ぶ想定
    orderList = []; // 配列をリセット
    localStorage.removeItem("orderList"); // ローカルストレージもクリア
    updateOrderUI(); // UIを更新（モーダルとサイドバーの中身を空に）
}

// ===============================================================================



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
                confirmOrder();      // 注文リストリセット
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
                showPopup();
                break;
            case "orderBtn":
                showDialog("注文を確定しますか？");
                currentAction = "pageTransition";
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
                console.log("その他のボタンが押されました");
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
    // historyBtn.addEventListener("click", handleButtonClick);
    callBtn.addEventListener("click", handleButtonClick);
    checkoutBtn.addEventListener("click", handleButtonClick);

    // ===== ポップアップ =====
    popupContainers.forEach(popup => {
        popup.addEventListener("click", function(event) {
            const target = event.target;
            const targetId = target.id;
            console.log(`target：${target}\ntargetId：${targetId}`);

            switch (targetId) {
                case "menuXBtn":
                case "listXBtn":
                    hidePopup(targetId);
                    break;
                case "addBtn":      // メニュー詳細：追加ボタン
                    addMenu();
                    break;
                case "confirmBtn":  // 注文リスト詳細：注文確定ボタン
                    currentId = "confirmBtn";
                    showDialog("注文を確定しますか？");
                    currentAction = "pageTransition";
                    break;
                default:
                    console.log("その他のボタンが押されました");
                    break;
            }
        });
    });

    // --- 注文リスト ---
    // 確定ボタン
    // confirmBtn.addEventListener("click", handleButtonClick);

    // --- メニュー詳細 ---
    // メニューボタン
    menuContentBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            currentId = "menuContentBtn";
            showPopup();
        });
    });

    // 追加ボタン
    // addBtn.addEventListener("click", addMenu);


    // ===== ダイアログ =====
    // キャンセルボタン
    cancelBtn.addEventListener("click", hideDialog);
    // はいボタン
    yesBtn.addEventListener("click", () => {
        switch (currentAction) {
            case "pageTransition":
                pageTransition();
                break;
            default:
                alert("エラー");
                hideDialog();
                break;
        };
    });
});
