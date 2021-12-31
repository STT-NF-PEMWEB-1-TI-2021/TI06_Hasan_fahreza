function login(e) {
    e.preventDefault()
    const nama = document.getElementById("nama").value
    const pass = document.getElementById("pass").value
    if (nama == "xant2021" && pass == "12345") {
        alert("Login Sukses")
        location.href = "Berhasil.html"
    }
    else {
        alert("Login Gagal")
        window.Location.reload()
    }
}