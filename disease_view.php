<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard Penyakit Autocare</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/view.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel='stylesheet' href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <div class="logo">
                        <img src="<?php echo base_url('assets/pic/logo2.png'); ?>">
                        <span class="nav-item">Autocare</span>
                    </div>
                </li>
                <li>
                    <a class="dashboard" href="<?php echo base_url('Dashboard'); ?>">
                        <i class='bx bxs-dashboard'></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="admin" href="<?php echo base_url('Admin'); ?>">
                        <i class='bx bxs-user-detail'></i>
                        <span class="nav-item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('login/logout'); ?>" class="logout">
                        <i class='bx bxs-log-out'></i>
                        <span class="nav-item">Log out</span>
                    </a>
                </li>
            </ul>
        </nav>

        <section class="main">
            <section class="attendance">
                <div class="attendance-list">
                    <button class="tambah-btn">
                        <a href="<?php echo base_url('AddDisease') ?>">Tambah Penyakit Baru</a>
                    </button>
                    <h1>List Penyakit</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Penyakit</th>
                                <th>Kode Penyakit</th>
                                <th>Nama Penyakit</th>
                                <th>Definisi</th>
                                <th>Solusi</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($penyakit as $row):
                                $no++; ?>
                                <tr>
                                    <td>
                                        <?php echo $row->id_penyakit; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->kode_penyakit; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nama_penyakit; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->definisi; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->solusi; ?>
                                    </td>
                                    <td>
                                        <button class="update">
                                            <a href="<?php echo base_url('Disease/edit') ?>">update</a>
                                        </button>
                                        <button class="delete">
                                            <a href="<?php echo base_url('Disease/hapus') ?>">delete</a>
                                        </button>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </div>

</body>

</html>