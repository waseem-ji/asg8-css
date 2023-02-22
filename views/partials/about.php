<?php
foreach ($users as $user) : ?>
    <div class="about-main-wrapper">
        <div class="about-head">
            <span>
                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </span>
            <span>About</span>
        </div>
        <div class="wrapper">
            <div class="about-box">
                <div class="about-info-module">
                    <div class="about-label">First Name</div>
                    <div class="about-info"><?= $user['firstname'] ?></div>
                </div>
                <div class="about-info-module">
                    <div class="about-label">Last Name</div>
                    <div class="about-info"><?= $user['lastname'] ?></div>
                </div>
                <div class="about-info-module">
                    <div class="about-label">Gender</div>
                    <div class="about-info"><?= $user['gender'] ?></div>
                </div>
                <div class="about-info-module">
                    <div class="about-label">Contact No.</div>
                    <div class="about-info"><?= $user['phone'] ?></div>
                </div>

                <div class="about-info-module">
                    <div class="about-label">Email.</div>
                    <div class="about-info">
                        <a class="text-blue-800" href="mailto:jane@example.com"><?= $user['email'] ?></a>
                    </div>
                </div>
                <div class="about-info-module">
                    <div class="about-label">Birthday</div>
                    <div class="about-info"><?= $user['dob'] ?></div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach ?>