<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php $info = $resume->getAllInfo(); ?>

<head>
    <title>Resume of <?php echo $info['contact_info']['display_name']; ?></title>
    
    <link rel="shortcut icon" href="img/page_white_text.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css" />
        
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/bootstrap.min.js"></script>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="page-wrap span10 offset1">
        
                <h1><?php echo $info['contact_info']['display_name']; ?></h1>
                <div class="row">
                    <div class="span4">
                        <?php echo $info['contact_info']['address_1']; ?>
                        <?php if (!empty($info['contact_info']['address_2'])): ?>
                            <br/><?php echo $info['contact_info']['address_2']; ?>
                        <?php endif; ?>
                        <br/>
                        <?php echo $info['contact_info']['city']; ?>,
                        <?php echo $info['contact_info']['state_full']; ?>
                        <?php echo $info['contact_info']['zip_code']; ?>
                    </div>
                    <div class="span4 pull-right align-right">
                        <?php echo $info['contact_info']['cell_phone']; ?><br/>
                        <?php echo $info['contact_info']['email']; ?>
                    </div>
                </div>
                
                <h3 class="section-title">Summery</h3>
                <p class="justify-text"><?php echo $info['summery']; ?></p>
                
                <h3 class="section-title">Experience</h3>
                <?php foreach ($info['experience'] as $job): ?>
                    <h4><?php echo $job['name']; ?></h4>
                    <small>
                        <?php echo $job['position']; ?>
                        (<?php echo date("F Y", $job['date_start']); ?> - <?php echo date("Ymd", $job['date_end']) == date("Ymd") ? 'Present' : date("F Y", $job['date_end']); ?>)
                    </small>
                    <ul>
                        <?php foreach($job['description'] as $description): ?>
                            <li><?php echo $description; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
                
                <h3 class="section-title">Qualifications</h3>
                <ul>
                    <?php foreach ($info['qualifications'] as $qualification): ?>
                        <li><?php echo $qualification; ?></li>    
                    <?php endforeach; ?>
                </ul>
                <h3 class="section-title">Education</h3>
                <?php foreach ($info['education'] as $edu): ?>
                    <h4><?php echo $edu['name']; ?></h4>
                    <small>
                        <?php echo date("F Y", $edu['date_start']); ?> - <?php echo date("Ymd", $edu['date_end']) == date("Ymd") ? 'Present' : date("F Y", $edu['date_end']); ?>
                    </small>
                    <ul>
                        <?php foreach($edu['description'] as $description): ?>
                            <li><?php echo $description; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>

                <h3 class="section-title">Achievements</h3>
                <ul>
                    <?php foreach ($info['achievements'] as $achievement): ?>
                        <li><?php echo $achievement; ?></li>    
                    <?php endforeach; ?>
                </ul>
                
            </div>
        </div>
    </div>
    
</body>

<!-- Page template by, Chris Kankiewicz <http://www.chriskankiewicz.com> -->

</html>
