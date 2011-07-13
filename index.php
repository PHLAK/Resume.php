<? include('Resume.php'); $resume = new Resume(); ?>
    
<? print_r($resume->getContactInfo()); ?>

<hr/>

<?= $resume->getSummery(); ?>

<hr/>

<? print_r($resume->getExperience()); ?>

<hr/>

<? print_r($resume->getQualifications()); ?>

<hr/>

<? print_r($resume->getEducation()); ?>

<hr/>

<? print_r($resume->getAchievements()); ?>
