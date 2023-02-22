<?php require "partials/head.php";

require "partials/nav.php"
?>


<div class="container margin-auto">

<?php foreach ($userData as $user) : ?>
        <div class="margin-top">
            <div class="border-visible" aria-hidden="true">
                <div class="vertical-padding">
                    <div class="border-top"></div>
                </div>
            </div>
            <div class="settings-wrapper">
                <div class="col-span-1">
                    <div class="padding-horizontal">
                        <h3 class="sub-heading">Update Your Personal Information</h3>
                        <p class="sub-heading-span">Your Personal Information is safe with us &#x1F607;</p>
                    </div>
                </div>
                <div class="margin-top-fiv col-span-2 ">
                    <form action="/update-profile" method="POST" enctype="multipart/form-data">
                        <div class="form-wrapper">
                            <div class="form-outer-box">
                                <div class="form-box">
                                    <div class="form-name">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                        <input type="text" name="firstname" id="firstname" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $user['firstname' ?? ""] ?>">
                                    </div>

                                    <div class="form-name">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                        <input type="text" name="lastname" id="lastname" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $user['lastname' ?? ""] ?>">
                                    </div>

                                    <div class="form-email">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                        <input type="email" name="email" id="email" disabled required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $user['email' ?? ""] ?>">
                                    </div>
                 

                                    <div class="form-dob">
                                        <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                        <input type="date" name="dob" id="dob" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $user['dob' ?? ""] ?>">
                                    </div>

                                    <div class="form-phone">
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                        <input type="text" name="phone" id="phone" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="<?= $user['phone' ?? ""] ?>">
                                    </div>

                                    <div class="form-gender">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender" value="female" <?php echo ($user['gender'] === 'female') ? "checked" : ''; ?>>
                                            <label for="female" class="gender-label"> Female</label>
                                            <input type="radio" name="gender" value="male" <?php echo ($user['gender'] === 'male') ?  "checked" : ''; ?>>
                                            <label for="male" class="gender-label"> Male</label>
                                        </fieldset>
                                    </div>


                                </div>
                                <div>
                                    <label class="image-label">Photo</label>
                                    <div class="margin-top-five">
                                        <!-- maybe an avatar -->
                                        <input type="file" name="image" class="form-input-image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer">
                                <div class="button-color">
                                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="button-password " type="button">
                                        Change Password
                                    </button>
                                </div>
                                <div class="button-color">
                                    <button type="submit" class="button-submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <div class="border-visible" aria-hidden="true">
        <div class="vertical-padding">
            <div class="border-top"></div>
        </div>
    </div>









</div>
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="modal-wrapper">
    <div class="modal-box-outer">
        <!-- Modal content -->
        <div class="modal-box">
            <button type="button" class="button-modal-close" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="modal-form-wrapper">
                <h3 >Please Enter your new password</h3>
                <form class="space-y-6" action="/update-profile" method="POST">
                    <div>
                        <label for="email" class="modal-form-label "></label>
                        <input type="email" name="email" id="email" disabled value="<?= $user['email'] ?>" class="modal-form-input" required>
                    </div>
                    <div>
                        <label for="password" class="modal-form-label ">Enter New password</label>
                        <input type="password" name="password" id="password" class="modal-form-input" required>
                    </div>
                    <!-- <div>
                        <label for="password" class="modal-form-label ">Please Renter Your  new password</label>
                        <input type="password" name="password_confirm" id="password" class="modal-form-input" required>
                    </div> -->
                   
                    <div class="password-change-button">
                        <button type="submit" name="update" class="modal-form-submit ">Change your password</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>