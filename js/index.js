var count = 0;
document.getElementById("create-btn").onclick = function () {
  count++;
  console.log(count)
  if (count % 2 == 0) {
    document.getElementById("demo").innerHTML = "";
  } else {
    var img = document.createElement("img");
    img.src = "hacker.svg"
    document.getElementById("demo").appendChild(img)
  }
};
