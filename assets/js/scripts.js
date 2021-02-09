
for (let i = 0; i < nombre ; i++) {
console.log(nombre);
document.getElementById('button'+i).addEventListener("click", function (event) {
    document.getElementById('title').innerText = arrayModal[i]['title']
    document.getElementById('description').innerText = arrayModal[i]['description']
    
})
}

