const dialog = document.getElementById("dialog");
const dialogTxt = document.getElementById("dialogTxt");
const noticeTxt = document.getElementById("noticeTxt");

// テスト用ボタン
// const button = document.getElementsByTagName("button");
const callBtn = document.getElementById("callBtn");
const orderBtn = document.getElementById("orderBtn");
const checkoutBtn = document.getElementById("checkoutBtn");


// =======================

// 押されたボタンによってダイアログの内容を変える（side_bar.jsに記載する？）
function handleButtonClick(event) {
    if (event.target.id === "callBtn") {
        alert("callボタンが押されました");
        dialogTxt.innerHTML = "店員を呼び出しますか？";
        dialog.style.display = "block";
    }
    else if (event.target.id === "orderBtn") {
        alert("orderボタンが押されました");
        dialogTxt.innerHTML = "注文を確定しますか？";
        dialog.style.display = "block";
    }
    else if (event.target.id === "checkoutBtn") {
        alert("checkoutボタンが押されました");
        dialogTxt.innerHTML = "お会計へ進みますか？";
        noticeTxt.innerHTML = "※お会計以降は注文できません。";
        dialog.style.display = "block";
    }

}

callBtn.addEventListener("click", handleButtonClick);
orderBtn.addEventListener("click", handleButtonClick);
checkoutBtn.addEventListener("click", handleButtonClick);

/*
・デフォルトでは非表示、ボタンを押すと表示
    →クリックされたらdisplay:blockにする

・押されたボタンによってダイアログの内容を変える
    →サイドバーから押されたボタンを取得し、if文で分岐

・はいが押されたらtrue、キャンセル押されたらfalseを返す
    →サイドバーのjsで受け取り、処理を分ける

*/
