nombre = document.getElementsByClassName('indexTopicTitle').length
for (let i = 0; i < nombre ; i++) {
document.getElementById('button'+i).addEventListener("click", function (event) {
    document.getElementById('title').innerText = arrayModal[i]['title']
    document.getElementById('description').innerText = arrayModal[i]['description']
    document.getElementById('redirection').href = arrayModal[i]['lien']
    
})
}

