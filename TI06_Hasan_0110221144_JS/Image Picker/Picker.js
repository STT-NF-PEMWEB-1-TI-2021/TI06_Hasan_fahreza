const hs = document.getElementById("hasil")
const binatang = document.getElementById("binatang")
function imagePicker() {
    if (binatang.value == "k") {
        return hs.src = "Kucing.jpg"
    } else if (binatang.value == "b") {
        return hs.src = "Burung.jpg"
    } else if (binatang.value == "a") {
        return hs.src = "Anjing.jpg"
    } else if (binatang.value == "r") {
        return hs.src = "Rusa.jpg"
    } else {
        return hs.src = "Babi.jpeg"
    }
}
function imageConfirmation() {
    alert(hs.src)
}