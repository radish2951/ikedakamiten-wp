const yasuragi = document.querySelector("section#message h2 span");

const wordList = ["喜び", "美しさ", "温もり", "優しさ", "煌めき", "力強さ", "安らぎ"];
let count = 0;

document.getElementById("message").addEventListener("touchstart", e => {
    new Promise(resolve => {
        yasuragi.classList.toggle("blur");
        setTimeout(resolve, 0);
    }).then(() => {
        yasuragi.classList.add("blur");
        yasuragi.innerText = wordList[count];
    });

    count = (count + 1) % wordList.length;
});
