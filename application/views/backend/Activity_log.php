<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-5">Activity Log</h4>
                        <table id="myTable" class="table mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($Activity as $a) : ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $a->email ?></td>
                                    <td><?= $a->username ?></td>
                                    <td>
                                    <?php
                                    $inputDate = $a->date;
                                    $inputFormat = "Y-m-d H:i:s";
                                    $outputFormat = "l j F Y H:i";

                                    // Parse the input date
                                    $dateTime = DateTime::createFromFormat($inputFormat, $inputDate);

                                    // Format the date in the desired output format
                                    $outputDate = $dateTime->format($outputFormat);

                                    // Get the timezone abbreviation manually
                                    $timezoneAbbreviation = "WIB";

                                    echo $outputDate . " " . $timezoneAbbreviation;
                                    ?>
                                    </td>
                                </tr>
                               <?php endforeach ; ?>
                            </tbody>
                        </table>
                    </div>
                </main>