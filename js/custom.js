var url = "http://localhost/b2b";

function registerbutton() {

    var data = $("#bregisterform").serialize();
    $.ajax({
        type: "POST",
        url: url + "/inc/register.php",
        data: data,
        success: function (result) {
            if ($.trim(result) == "empty") {
                alert("lütfen boş alan bırakmayınız");
            } else if ($.trim(result) == "format") {
                alert("E-posta formatı hatalı");
            } else if ($.trim(result) == "match") {
                alert("Şifreler uyuşmadı");
            } else if ($.trim(result) == "already") {
                alert("Bu e-posta adına ait bir bayi zaten kayıtlı");
            } else if ($.trim(result) == "error") {
                alert("Bir hata oluştu...");
            } else if ($.trim(result) == "ok") {
                alert("Üyeliğiniz başarıyla oluşturuldu... Yönetici onayından sonra aktifleştirilecektir.");
                window.location.href = url;
            }
        }
    });
}