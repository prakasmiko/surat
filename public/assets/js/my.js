$(document).ready(function () {
    $("#modalform").submit(function () {
        $("#btnsubmit").attr("disabled", "disabled");
        $("#btnsubmit").html(
            '<i class="fa fa-spin fa-spinner"></i> Sedang Proses'
        );
    });
});
const flashData = $(".flash-data").data("flashdata");
const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: "btn btn-primary",
        cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
});
if (flashData) {
    if (flashData == "Verifikasi") {
        swalWithBootstrapButtons.fire({
            title: "USER TERSEDIA",
            text: "User Telah Diverifikasi",
            type: "success",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Nonverifikasi") {
        swalWithBootstrapButtons.fire({
            title: "USER TIDAK TERSEDIA!",
            text: "Periksa ulang username/token anda",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Unpresensi") {
        swalWithBootstrapButtons.fire({
            title: "Presensi Gagal!",
            text: "Anda Telah Melakukan Presensi",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Success_login") {
        swalWithBootstrapButtons.fire({
            title: "USER TELAH BERHASIL LOGIN",
            text: "Silahkan lakukan keperluan sesuai sistem",
            type: "success",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Unsuccess_login") {
        swalWithBootstrapButtons.fire({
            title: "USER TIDAK TERSEDIA!",
            text: "Periksa ulang username/password anda!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Unlogin") {
        swalWithBootstrapButtons.fire({
            title: "HALAMAN TIDAK BOLEH DIAKSES!",
            text: "Silahkan login terlebih dahulu!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "doublenisin") {
        swalWithBootstrapButtons.fire({
            title: "NISN SUDAH TERDAFTAR!",
            text: "Calon Siswa Dengan NISN ini Sudah Terdaftar!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Gagal") {
        swalWithBootstrapButtons.fire({
            title: "OPERASI QUERY TELAH GAGAL!",
            text: "Silahkan cek kembali data anda!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Batas_upload") {
        swalWithBootstrapButtons.fire({
            title: "Gagal Upload!",
            text: "Silahkan cek size dan type filenya!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Gagal_upload") {
        swalWithBootstrapButtons.fire({
            title: "File Gagal Upload!",
            text: "Silahkan Ulangin kembali!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "useremail") {
        swalWithBootstrapButtons.fire({
            title: "Username dan Email Sudah Digunakan!",
            text: "Silahkan gunakan username dan email yang belum dipakai!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "username") {
        swalWithBootstrapButtons.fire({
            title: "Username Sudah Digunakan!",
            text: "Silahkan gunakan username belum dipakai!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "email") {
        swalWithBootstrapButtons.fire({
            title: "Email Sudah Digunakan!",
            text: "Silahkan gunakan email yang belum dipakai!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "nisnisn") {
        swalWithBootstrapButtons.fire({
            title: "NIS dan NISN Sudah Digunakan!",
            text: "Silahkan gunakan NIS dan NISN yang belum dipakai!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "nis") {
        swalWithBootstrapButtons.fire({
            title: "NIS Sudah Digunakan!",
            text: "Silahkan gunakan NIS belum dipakai!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "nisn") {
        swalWithBootstrapButtons.fire({
            title: "NISN Sudah Digunakan!",
            text: "Silahkan gunakan NISN yang belum dipakai!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "idguru") {
        swalWithBootstrapButtons.fire({
            title: "Guru ini sudah mempunyai akun di sistem tersebut!",
            text: "Silahkan cek kembali akun pada sistem terkait!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Fullkuota") {
        swalWithBootstrapButtons.fire({
            title: "Kuota Kelas Sudah Penuh!",
            text: "Silahkan koreksi kembali daya tampung kelasnya!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else if (flashData == "Alias") {
        swalWithBootstrapButtons.fire({
            title: "Alias Sudah Digunakan!",
            text: "Silahkan gunakan alias belum dipakai!",
            type: "warning",
            footer: "Mu'allimin",
        });
    } else {
        swalWithBootstrapButtons.fire({
            title: "BERHASIL!",
            text: "Berhasil " + flashData,
            type: "success",
            footer: "Mu'allimin",
        });
    }
}
$(".tombol-hapus").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });
    Swal.fire({
        title: "Apakah Anda Yakin Ingin Menghapus Data Ini?",
        text: "Data yang sudah terhapus tidak bisa kembali lagi!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Tidak",
        confirmButtonText: "Ya Hapus!",
        footer: "Mu'allimin",
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                "Dibatalkan",
                "Menghapus Data Telah DIbatalkan",
                "error"
            );
        }
    });
});
