<?php
session_start();
require_once('../../dashboards/resident/sidenav_resident.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>complaints </title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>

<div class="container">
    <h1 style="text-align: center;">Complaints</h1>
    <p>Please fill out the following information to make your complain</p>
    <div class="form-group">
        <form action="./backend/complaints_update.php" method="post">

            <label for="complaint_subject"> Subject:</label>
            <input type="text" id="complaint_subject" name="complaint_subject"
                   placeholder="Your problem in a few words..." maxlength="100" required
                   value="<?php echo $_SESSION['complaint_subject_edit']; ?>"
            >

            <br>
            <br>

            <label for="complaint_contact">Phone Number:</label>
            <input type="tel" id="complaint_contact" name="complaint_contact" placeholder="0123456789" maxlength="255"
                   value="<?php echo $_SESSION['complaint_contact_edit']; ?>" required>

            <br>
            <br>

            <label for="complaint_category">Complaint category:</label>
            <select id="complaint_category" name="complaint_category" required>
                <option value="billing" <?php if ($_SESSION['complaint_category_edit'] === 'billing') echo 'selected'; ?>>Billing</option>
                <option value="platform" <?php if ($_SESSION['complaint_category_edit'] === 'platform') echo 'selected'; ?>>Platform</option>
                <option value="amenities" <?php if ($_SESSION['complaint_category_edit'] === 'amenities') echo 'selected'; ?>>Amenities</option>
                <option value="services" <?php if ($_SESSION['complaint_category_edit'] === 'services') echo 'selected'; ?>>Services</option>
                <option value="issues" <?php if ($_SESSION['complaint_category_edit'] === 'issues') echo 'selected'; ?>>
                    Issues
                </option>
                <option value="other" <?php if ($_SESSION['complaint_category_edit'] === 'other') echo 'selected'; ?>>Other</option>
            </select>

            <div class="description-container">
                <label for="complaint_description">
                    <br>
                    Description:
                    <textarea rows="5" cols="51" id="complaint_description" name="complaint_description"
                              maxlength="1000"
                              placeholder="A bit more information would help us solve your problem faster!"><?php echo $_SESSION["complaint_description_edit"] ?></textarea>
                </label>
            </div>
            <input type="submit" value="Edit complain" style="display: block; margin: 0 auto;">
        </form>
    </div>
</div>
<span class="comp-image"></span>

</body>

</html>