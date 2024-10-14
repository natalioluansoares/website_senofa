<?= $this->extend('template_paroquia/template_paroquia') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center" style="color: darkgrey;">Bem-vindo</h3>
                    <div class="card-body" style="background-color: cornflowerblue;">
                        <h5 class="card-title"><strong>Seminario Nossa Senhora De Fatima</strong></h5>
                    </div>
                    <hr>
                    <p class="card-text"><h5 style="font-family: 'Times New Roman', Times, serif;">
                    Bem-vindo Sistema Informasaun Senofa</h5></p>
                    <hr>
                    <table class="table" >
                        <tbody>
                            <tr>
                                <td style="background-color: gold;"><strong>Naran </strong></td>
                                <td><h6>:<?= userLoginParoquia()->naran_kompleto_paroquia ?></h6></td>
                            </tr>

                            <tr>
                                <td style="background-color: gold;"><strong>Status</strong></td>
                                <td><h6>:<?= userLoginParoquia()->status_paroquia ?></h6></td>
                            </tr>
                            <tr>
                                <td style="background-color: gold;"><strong>Instituisaun</strong></td>
                                <td><h6>:Sistema Informasaun</h6></td>
                            </tr>
                            <tr>
                                <td style="background-color: gold;"><strong>Loron Serve</strong></td>
                                <td><h6 id="loron">:</h6></td>
                            </tr>
                            <tr>
                                <td style="background-color: gold;"><strong>Horas Serve</strong></td>
                                <td><h6 id="jam">:</h6></td>
                            </tr>
                               <?php
                                date_default_timezone_set("Asia/jakarta");
                                ?>
                            <tr>
                                <td style="background-color: gold;"><strong>Acesso</strong></td>
                                <td><h6>:<?= userLoginParoquia()->role ?></h6></td>
                            </tr>
                            <tr>
                                <td style="background-color: gold;"><strong>Hili</strong></td>
                                <td><h6>: <a href="<?= base_url('paroquialogout') ?>" class="btn" style="background-color: cornflowerblue;"><i class="fas fa-sign-out-alt"></i></a></h6></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>