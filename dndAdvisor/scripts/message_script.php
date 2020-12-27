<?php
if (isset($_SESSION['error'])) {
                echo '<div class="col-md1">
                          <div class="card">
                            <div class="text-center card-header card-text text-secondary">
                            ' . $_SESSION['error'] . '
                            </div>
                          </div>
                        </div>
                        ';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['info'])) {
                echo '<div class="col-md1">
                          <div class="card">
                            <div class="text-center card-header card-text text-secondary">
                            ' . $_SESSION['info'] . '
                            </div>
                          </div>
                        </div>
                        ';
                unset($_SESSION['info']);
            }
            ?>