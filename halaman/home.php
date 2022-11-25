<?php
require 'controller.php';
?>

<!-- Container-->
<div class="container mt-3">
    <div class="row align-items-start">
        <div class="col-3 ">
            <img src="img/foto.jpg" class="rounded img-thumbnail mx-auto d-block" width="75%">
        </div>

        <!--Personal Information-->
        <div class="col-4 md-2 ">
            <div class="card">
                <div class="bg-secondary p-2 text-dark bg-opacity-25">Personal Information</div>
                <div class="card-body">
                    <h5 class="card-title">I'm <?= $workexp1->nama ?></h5>
                    <p class="card-text"><?= $workexp1->position ?></p>
                    <hr />
                    <table class="table" style="border-collapse: collapse">
                        <tbody>
                            <tr>
                                <th>Age</td>
                                <td>: <?= $workexp1->age ?></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>: (+62) <?= $workexp1->number ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: <?= $workexp1->age ?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>: <?= $workexp1->city ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--Latest Experience-->
        <div class="col-5 md-2 ">
            <div class="card">
                <div class="bg-secondary p-2 text-dark bg-opacity-25">Latest Experience</div>
                <div class="card-body">
                    <h5 class="card-title"><?= $workexp1->position ?></h5>
                    <p class="card-text"><?= $workexp1->company ?> | <?= $workexp1->period ?></p>
                    <p>Main Task:</p>
                    <ul>
                        <li>
                            <?= $workexp1->maintask ?>
                        </li>
                        <li>
                            Create job ads poster based on clients hiring inquiries and post on Geekhunter's web
                        </li>
                        <li>
                            Data validation from several sources for recruiter's needs
                        </li>
                        <li>
                            Manage whole settings of Google Workspace
                        </li>
                    </ul>
                </div>
            </div>

            <!--Latest Education-->
            <div class="mt-3 ">
                <div class="card">
                    <div class="bg-secondary p-2 text-dark bg-opacity-25">Latest Education</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $education1->major ?></h5>
                        <p class="card-text"><?= $education1->institute ?> | <?= $education1->period ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>