var file = document.getElementById('images');
var sary = document.getElementById('sary');

file.addEventListener('change', () => {
    if (file.files.length > 0) {
        var fileReader = new FileReader()
        fileReader.onload = function(event) {
            sary.style.display = "flex";
            sary.setAttribute("src", event.target.result)
            document.getElementById('remove').style.display = "flex";
        };

        fileReader.readAsDataURL(file.files[0])
    }
});

document.getElementById('remove').addEventListener('click', () => {
    sary.style.display = "none";
    file.value = "";
    document.getElementById('remove').style.display = "none";
});