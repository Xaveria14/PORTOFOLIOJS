<?php
include "koneksi.php";

// DATA SERVICES
$query = mysqli_query(
    $koneksi,
    "SELECT * FROM servise ORDER BY id ASC"
);

// DATA PERFORMANCE
$queryPerformance = mysqli_query(
    $koneksi,
    "SELECT * FROM performance ORDER BY id ASC"
);

$skills = [];
$nilai = [];

while ($dataPerformance = mysqli_fetch_assoc($queryPerformance)) {
    $skills[] = $dataPerformance['ahli'];
    $nilai[] = (int) $dataPerformance['nilai'];
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PORTOFOLIO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-custom">

    <div class="container">

     <a class="navbar-brand logo" href="#home">

    <img src="assets/img/logo.png" alt="Francisca Xaveria" class="logo-img">

    <div class="logo-text">
        <span class="first-name">FRANSISCA</span>
        <span class="last-name">XAVERIA</span>
    </div>

</a>

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-end"
            id="navbarMenu">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#education">Pendidikan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

        </div>

    </div>

</nav>

  <!-- ================= HOME ================= -->
<section id="home" class="hero">

    <div class="container">

        <div class="row align-items-center">

            <!-- FOTO -->
            <div class="col-md-6 text-center hero-photo">

                <div class="photo-decoration photo-coral"></div>
                <div class="photo-decoration photo-green"></div>

                <div class="photo-frame">
                    <img src="assets/img/valen.png"
                        alt="Foto Profil"
                        class="profile-img">
                </div>

            </div>


            <!-- TEXT -->
            <div class="col-md-6 hero-text">

                <div class="hello">
                    HELLO, I'M
                    <span></span>
                </div>

                <h1>
                    FRANSISCA
                    <span>XAVERIA</span>
                </h1>

                <h2>VALENCIA PUTRINATA</h2>

                <div class="role">
                    WEB DEVELOPER & TECHNOLOGY ENTHUSIAST
                </div>

                <p>
    I am a student passionate about
    <span>Web Development</span> and Technology.
    Always learning new things and creating
    meaningful digital solutions.
</p>
                <a href="#contact" class="hero-button">
                    LET'S CONNECT
                </a>

            </div>

        </div>

    </div>

</section>


   <!-- ================= SERVICES ================= -->
<section id="services">

    <div class="services-title">

        <span class="section-label">
            ✦ WHAT I DO ✦
        </span>

        <h2>
            Things I Love
            <strong>Creating.</strong>
        </h2>

        <p>
            A combination of
            <span>technology, creativity, and curiosity</span>
            that drives me to keep learning and building.
        </p>

    </div>


    <div class="services-container">

        <?php while ($data = mysqli_fetch_assoc($query)) { ?>

            <div class="service-card">

                <div class="service-icon">

                    <?php
                    if ($data['id'] == 1) {
                        echo "💻";
                    } elseif ($data['id'] == 2) {
                        echo "🎨";
                    } elseif ($data['id'] == 3) {
                        echo "⚡";
                    } else {
                        echo "✨";
                    }
                    ?>

                </div>

                <h3>
                    <?php echo htmlspecialchars($data['Judul']); ?>
                </h3>

                <p>
                    <?php echo htmlspecialchars($data['keterangan']); ?>
                </p>

            </div>

        <?php } ?>

    </div>

</section>


  <!-- ================= ABOUT ================= -->
<section id="about" class="about-section">

    <div class="container">

        <!-- JUDUL -->
        <div class="about-header text-center">

            <span class="about-label">✦ GET TO KNOW ME ✦</span>

            <h2 class="section-title">
                About <span>Me</span>
            </h2>

            <p class="about-description">
                Saya adalah seorang mahasiswa yang tertarik mempelajari
                teknologi, pemrograman, web development, dan elektronika.
            </p>

        </div>


        <div class="row about-content align-items-center">

            <!-- TENTANG SAYA -->
            <div class="col-md-6">
                <div class="about-card">

                    <div class="about-icon">
                        👩‍💻
                    </div>

                    <h2>Tentang Saya</h2>

                    <p>
                        Saya terus belajar dan mengembangkan kemampuan
                        dalam bidang teknologi, pemrograman, serta
                        pengembangan website.
                    </p>

                    <div class="about-tags">
                        <span>Technology</span>
                        <span>Programming</span>
                        <span>Web Development</span>
                    </div>

                </div>
            </div>


            <!-- PERFORMANCE -->
            <div class="col-md-6">
                <div class="performance-box">

                    <div class="performance-title">

                        <div>
                            <span>MY SKILLS</span>
                            <h2>Performance</h2>
                        </div>

                        <div class="performance-icon">⚡</div>

                    </div>


                    <div class="performance-chart-card">

                        <div class="chart-top">
                            <span>Skill Performance</span>
                            <span class="chart-badge">Live Data</span>
                        </div>

                        <div class="chart-container">
                            <canvas id="performanceChart"></canvas>
                        </div>

                        <div class="chart-summary">

                            <div>
                                <strong id="highestSkill">0%</strong>
                                <span>Highest</span>
                            </div>

                            <div>
                                <strong id="averageSkill">0%</strong>
                                <span>Average</span>
                            </div>

                            <div>
                                <strong id="totalSkill">0</strong>
                                <span>Skills</span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</section>

<!-- ================= RIWAYAT PENDIDIKAN ================= -->
<section id="education" class="projects-section">

    <div class="container">

        <div class="text-center">

            <div class="section-title">
                Riwayat Pendidikan
            </div>

        </div>


        <div class="row g-4">

            <!-- SD -->
            <div class="col-md-4">

                <div class="education-card">

                    <div class="school-image">

                        <img src="assets/img/PL.png"
                             alt="SD Pangudi Luhur Klaten">

                    </div>

                    <h3>Sekolah Dasar</h3>

                    <p class="school-name">
                        SD Pangudi Luhur Klaten
                    </p>


                    <div class="education-footer">

                        <div class="education-year">
                            2012 - 2018
                        </div>

                        <a href="https://maps.app.goo.gl/muDiWWbWYpBoBsJu5"
                           target="_blank"
                           class="location-btn">

                            📍 Lihat Lokasi

                        </a>

                    </div>

                </div>

            </div>


            <!-- SMP -->
            <div class="col-md-4">

                <div class="education-card">

                    <div class="school-image">

                        <img src="assets/img/smp.png"
                             alt="SMP Pangudi Luhur Klaten">

                    </div>

                    <h3>Sekolah Menengah Pertama</h3>

                    <p class="school-name">
                        SMP Pangudi Luhur Klaten
                    </p>


                    <div class="education-footer">

                        <div class="education-year">
                            2018 - 2021
                        </div>

                        <a href="https://maps.app.goo.gl/Ftw1miUbfkYfQQPm7"
                           target="_blank"
                           class="location-btn">

                            📍 Lihat Lokasi

                        </a>

                    </div>

                </div>

            </div>


            <!-- SMK -->
            <div class="col-md-4">

                <div class="education-card">

                    <div class="school-image">

                        <img src="assets/img/smk.png"
                             alt="SMK Leonardo Klaten">

                    </div>

                    <h3>Sekolah Menengah Kejuruan</h3>

                    <p class="school-name">
                        SMK Leonardo Klaten
                    </p>


                    <div class="education-footer">

                        <div class="education-year">
                            2021 - 2024
                        </div>

                        <a href="https://maps.app.goo.gl/m9KHLFFsraAA4cv16"
                           target="_blank"
                           class="location-btn">

                            📍 Lihat Lokasi

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



   <section id="contact">

    <div class="contact-container">

        <!-- ================= INFORMASI KONTAK ================= -->
        <div class="contact-info">

            <div class="contact-heading">
                <span>GET IN TOUCH</span>

                <h2>
                    Let's Create Something
                    <strong>Amazing Together.</strong>
                </h2>

                <p>
                    Have a question, an idea, or just want to say hello?
                    <br>
                    Feel free to reach out through any platform below.
                </p>
            </div>


            <!-- ICON -->
            <div class="contact-icons">

                <!-- EMAIL -->
                <a href="mailto:fputrinata@gmail.com"
                   class="contact-icon-link">
                    <img src="assets/img/email.png"
                         alt="Email"
                         class="contact-img">
                </a>


                <!-- WHATSAPP -->
                <a href="https://wa.me/qr/EHTXFDNCZ5AAO1"
                   target="_blank"
                   class="contact-icon-link">
                    <img src="assets/img/hijau.png"
                         alt="WhatsApp"
                         class="contact-img">
                </a>


                <!-- LOKASI -->
                <a href="https://maps.app.goo.gl/pRcURnUvyNpaZzYa8"
                   target="_blank"
                   class="contact-icon-link">
                    <img src="assets/img/maping.png"
                         alt="Lokasi"
                         class="contact-img">
                </a>


                <!-- INSTAGRAM -->
                <a href="https://www.instagram.com/vlntptrnt/"
                   target="_blank"
                   class="contact-icon-link">
                    <img src="assets/img/ig.png"
                         alt="Instagram"
                         class="contact-img">
                </a>

            </div>

        </div>


        <!-- ================= FORM DI KANAN ================= -->
<form class="contact-form" action="proses.php" method="POST">

    <div class="form-group">
        <input 
            type="text" 
            name="nama"
            placeholder="♙   Nama Lengkap"
            required>
    </div>

    <div class="form-group">
        <input 
            type="email" 
            name="email"
            placeholder="✉   Email"
            required>
    </div>

    <div class="form-group">
        <textarea 
            name="pesan"
            placeholder="✎   Tulis pesan Anda..."
            required></textarea>
    </div>

    <button type="submit" class="contact-btn">
        ➤ &nbsp; Kirim Pesan
    </button>

</form>

    </div>




    <!-- ================= FOOTER ================= -->
    <footer class="footer">

        <p>
            © 2026 Xaveria Portfolio.
            All Rights Reserved.
        </p>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var canvas = document.getElementById("performanceChart");

    if (!canvas) return;

    var ctx = canvas.getContext("2d");

    var gradient = ctx.createLinearGradient(0, 0, 0, 320);
    gradient.addColorStop(0, "rgba(255, 183, 170, 0.45)");
    gradient.addColorStop(0.6, "rgba(255, 183, 170, 0.16)");
    gradient.addColorStop(1, "rgba(255, 183, 170, 0)");

const performanceChart = new Chart(ctx, {
            type: "line",

        labels: <?php echo json_encode($ahli); ?>,

            datasets: [{
                label: "Skill Performance",
               data: <?php echo json_encode($nilai); ?>,
                borderColor: "#fff7f2",
                backgroundColor: gradient,
                borderWidth: 4,
                tension: 0.42,
                fill: true,

                pointRadius: 6,
                pointHoverRadius: 9,

                pointBackgroundColor: "#ee806e",
                pointBorderColor: "#ffffff",
                pointBorderWidth: 3,

                pointHoverBackgroundColor: "#ffffff",
                pointHoverBorderColor: "#ee806e"
            }]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            animation: {
                duration: 1400,
                easing: "easeOutQuart"
            },

            interaction: {
                intersect: false,
                mode: "index"
            },

            plugins: {
                legend: {
                    display: false
                },

                tooltip: {
                    backgroundColor: "#ffffff",
                    titleColor: "#426d6b",
                    bodyColor: "#334155",
                    padding: 12,
                    cornerRadius: 12,
                    displayColors: false,

                    callbacks: {
                        label: function(context) {
                            return context.parsed.y + "% Performance";
                        }
                    }
                }
            },

            scales: {
                x: {
                    grid: {
                        display: false
                    },

                    border: {
                        display: false
                    },

                    ticks: {
                        color: "rgba(255,255,255,0.88)",
                        font: {
                            size: 11,
                            weight: "600"
                        }
                    }
                },

                y: {
                    beginAtZero: true,
                    max: 100,

                    grid: {
                        color: "rgba(255,255,255,0.12)"
                    },

                    border: {
                        display: false
                    },

                    ticks: {
                        stepSize: 20,
                        color: "rgba(255,255,255,0.72)",

                        callback: function(value) {
                            return value + "%";
                        }
                    }
                }
            }
        }
    });
});
</script>


<script>

document.addEventListener("DOMContentLoaded", function () {

    const canvas = document.getElementById("performanceChart");

    if (!canvas) return;

    const ctx = canvas.getContext("2d");


    // GRADIENT
    const gradient = ctx.createLinearGradient(0, 0, 0, 320);

    gradient.addColorStop(
        0,
        "rgba(255, 183, 170, 0.45)"
    );

    gradient.addColorStop(
        0.6,
        "rgba(255, 183, 170, 0.16)"
    );

    gradient.addColorStop(
        1,
        "rgba(255, 183, 170, 0)"
    );


    // ================= BUAT GRAFIK =================

    const performanceChart = new Chart(ctx, {

        type: "line",

        data: {

            labels: [],

            datasets: [{

                label: "Skill Performance",

                data: [],

                borderColor: "#fff7f2",

                backgroundColor: gradient,

                borderWidth: 4,

                tension: 0.42,

                fill: true,

                pointRadius: 6,

                pointHoverRadius: 9,

                pointBackgroundColor: "#ee806e",

                pointBorderColor: "#ffffff",

                pointBorderWidth: 3,

                pointHoverBackgroundColor: "#ffffff",

                pointHoverBorderColor: "#ee806e"

            }]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            animation: {
                duration: 0
            },

            interaction: {
                intersect: false,
                mode: "index"
            },

            plugins: {

                legend: {
                    display: false
                },

                tooltip: {

                    backgroundColor: "#ffffff",

                    titleColor: "#426d6b",

                    bodyColor: "#334155",

                    padding: 12,

                    cornerRadius: 12,

                    displayColors: false,

                    callbacks: {
                        label: function(context) {
                            return context.parsed.y + "% Performance";
                        }
                    }

                }

            },

            scales: {

                x: {

                    grid: {
                        display: false
                    },

                    border: {
                        display: false
                    },

                    ticks: {

                        color: "rgba(255,255,255,0.88)",

                        font: {
                            size: 11,
                            weight: "600"
                        }

                    }

                },

                y: {

                    beginAtZero: true,

                    max: 100,

                    grid: {
                        color: "rgba(255,255,255,0.12)"
                    },

                    border: {
                        display: false
                    },

                    ticks: {

                        stepSize: 20,

                        color: "rgba(255,255,255,0.72)",

                        callback: function(value) {
                            return value + "%";
                        }

                    }

                }

            }

        }

    });


    // ================= UPDATE DATA =================

    function updatePerformance() {

        fetch("get_performance.php?t=" + new Date().getTime())

            .then(response => response.json())

            .then(data => {

                const skillLabels =
                    data.map(item => item.ahli);

                const skillValues =
                    data.map(item => Number(item.nilai));


                performanceChart.data.labels =
                    skillLabels;

                performanceChart.data.datasets[0].data =
                    skillValues;


                performanceChart.update();


                // UPDATE SUMMARY

                if (skillValues.length > 0) {

                    const highest =
                        Math.max(...skillValues);

                    const average =
                        skillValues.reduce(
                            (total, value) => total + value,
                            0
                        ) / skillValues.length;


                    document.getElementById("highestSkill").innerText =
                        highest + "%";

                    document.getElementById("averageSkill").innerText =
                        Math.round(average) + "%";

                    document.getElementById("totalSkill").innerText =
                        skillValues.length;

                }

            })

            .catch(error => {

                console.error(
                    "Gagal mengambil data:",
                    error
                );

            });

    }


    // LANGSUNG AMBIL DATA
    updatePerformance();


    // UPDATE OTOMATIS SETIAP 2 DETIK
    setInterval(updatePerformance, 2000);

});

</script>

</body>
</html>