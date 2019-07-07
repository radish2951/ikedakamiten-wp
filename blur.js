const yasuragi = document.querySelector("section#message h2 span");

const wordList = ["喜び", "美しさ", "優しさ", "力強さ", "温もり", "安らぎ"];
let count = 0;

document.addEventListener("touchstart", e => {
    yasuragi.classList.remove("blur");
    window.setTimeout(() => {
        yasuragi.classList.add("blur");
    }, 1);

    const word = wordList[count];
    count = (count + 1) % wordList.length;

    yasuragi.innerText = word;
});
