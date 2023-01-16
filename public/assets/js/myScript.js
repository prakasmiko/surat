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
            footer: "AppSchools",
        });
    } else if (flashData == "Nonverifikasi") {
        swalWithBootstrapButtons.fire({
            title: "USER TIDAK TERSEDIA!",
            text: "Periksa ulang username/token anda",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Unpresensi") {
        swalWithBootstrapButtons.fire({
            title: "Presensi Gagal!",
            text: "Anda Telah Melakukan Presensi",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Success_login") {
        swalWithBootstrapButtons.fire({
            title: "USER TELAH BERHASIL LOGIN",
            text: "Silahkan lakukan keperluan sesuai sistem",
            type: "success",
            footer: "AppSchools",
        });
    } else if (flashData == "Unsuccess_login") {
        swalWithBootstrapButtons.fire({
            title: "USER TIDAK TERSEDIA!",
            text: "Periksa ulang username/password anda!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Unlogin") {
        swalWithBootstrapButtons.fire({
            title: "HALAMAN TIDAK BOLEH DIAKSES!",
            text: "Silahkan login terlebih dahulu!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "doublenisin") {
        swalWithBootstrapButtons.fire({
            title: "NISN SUDAH TERDAFTAR!",
            text: "Calon Siswa Dengan NISN ini Sudah Terdaftar!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Gagal") {
        swalWithBootstrapButtons.fire({
            title: "OPERASI QUERY TELAH GAGAL!",
            text: "Silahkan cek kembali data anda!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Batas_upload") {
        swalWithBootstrapButtons.fire({
            title: "Gagal Upload!",
            text: "Silahkan cek size dan type filenya!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Gagal_upload") {
        swalWithBootstrapButtons.fire({
            title: "File Gagal Upload!",
            text: "Silahkan Ulangin kembali!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "useremail") {
        swalWithBootstrapButtons.fire({
            title: "Username dan Email Sudah Digunakan!",
            text: "Silahkan gunakan username dan email yang belum dipakai!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "username") {
        swalWithBootstrapButtons.fire({
            title: "Username Sudah Digunakan!",
            text: "Silahkan gunakan username belum dipakai!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "email") {
        swalWithBootstrapButtons.fire({
            title: "Email Sudah Digunakan!",
            text: "Silahkan gunakan email yang belum dipakai!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "nisnisn") {
        swalWithBootstrapButtons.fire({
            title: "NIS dan NISN Sudah Digunakan!",
            text: "Silahkan gunakan NIS dan NISN yang belum dipakai!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "nis") {
        swalWithBootstrapButtons.fire({
            title: "NIS Sudah Digunakan!",
            text: "Silahkan gunakan NIS belum dipakai!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "nisn") {
        swalWithBootstrapButtons.fire({
            title: "NISN Sudah Digunakan!",
            text: "Silahkan gunakan NISN yang belum dipakai!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "idguru") {
        swalWithBootstrapButtons.fire({
            title: "Guru ini sudah mempunyai akun di sistem tersebut!",
            text: "Silahkan cek kembali akun pada sistem terkait!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Fullkuota") {
        swalWithBootstrapButtons.fire({
            title: "Kuota Kelas Sudah Penuh!",
            text: "Silahkan koreksi kembali daya tampung kelasnya!",
            type: "warning",
            footer: "AppSchools",
        });
    } else if (flashData == "Alias") {
        swalWithBootstrapButtons.fire({
            title: "Alias Sudah Digunakan!",
            text: "Silahkan gunakan alias belum dipakai!",
            type: "warning",
            footer: "AppSchools",
        });
    } else {
        swalWithBootstrapButtons.fire({
            title: "BERHASIL!",
            text: "Berhasil " + flashData,
            type: "success",
            footer: "AppSchools",
        });
    }
}


// t("#sa-warning").click(function () {
//     Swal.fire({
//         title: "Are you sure?",
//         text: "You won't be able to revert this!",
//         icon: "warning",
//         showCancelButton: !0,
//         confirmButtonColor: "#34c38f",
//         cancelButtonColor: "#f46a6a",
//         confirmButtonText: "Yes, delete it!",
//     }).then(function (t) {
//         t.value &&
//             Swal.fire(
//                 "Deleted!",
//                 "Your file has been deleted.",
//                 "success"
//             );
//     });
// }),

$(".tombol-edit").on("click", function (e) {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Data Berhasil Diubah',
        showConfirmButton: true,
        timer: 1500
    });
});


$(".tombol-hapus").on("click", function (e) {
    e.preventDefault();
    // var href = $(this).attr("action");
    var form = $(this).closest("form");
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });
    Swal.fire({
        title: "Apakah Anda Yakin?",
        text: "Data yang sudah terhapus tidak bisa kembali lagi!",
        icon: "warning",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        cancelButtonText: "Tidak",
        confirmButtonText: "Ya Hapus!",
        footer: "AppSchools",

    }).then((result) => {
        if (result.value) {
            // document.location.href = href;
            form.submit();
            result.value &&
                // Swal.fire(
                //     "Terhapus!",
                //     "Data berhasil dihapus",
                //     "success"
                // );
                Swal.fire({
                    icon: 'success',
                    title: 'Terhapus',
                    text: 'Data Berhasil Dihapus',
                    showConfirmButton: true,
                    timer: 1500,
                    confirmButtonColor: "#34c38f",
                });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                "Dibatalkan",
                "Menghapus Data Telah Dibatalkan",
                "error"
            );
        }
    });
});
