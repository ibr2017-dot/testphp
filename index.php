<?php require_php_file: include 'config.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $personal_info['name']; ?> | السيرة الذاتية</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- الهيدر والتعريف -->
    <header class="hero">
        <div class="container">
            <h1><?php echo $personal_info['name']; ?></h1>
            <p class="subtitle"><?php echo $personal_info['title']; ?></p>
            <p class="bio"><?php echo $personal_info['bio']; ?></p>
            <div class="contact-links">
                <a href="mailto:<?php echo $personal_info['email']; ?>" class="btn">تواصل معي</a>
                <a href="<?php echo $personal_info['github']; ?>" target="_blank" class="btn btn-outline">GitHub</a>
                <a href="<?php echo $personal_info['linkedin']; ?>" target="_blank" class="btn btn-outline">LinkedIn</a>
            </div>
        </div>
    </header>

    <div class="container main-content">
        
        <!-- قسم المهارات -->
        <section class="card">
            <h2>المهارات التقنية</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $category => $skill_list): ?>
                    <div class="skill-category">
                        <h3><?php echo $category; ?></h3>
                        <ul>
                            <?php foreach ($skill_list as $skill): ?>
                                <li><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- قسم الخبرات -->
        <section class="card">
            <h2>الخبرات العملية</h2>
            <div class="timeline">
                <?php foreach ($experiences as $exp): ?>
                    <div class="timeline-item">
                        <div class="timeline-header">
                            <h3><?php echo $exp['role']; ?></h3>
                            <span class="period"><?php echo $exp['period']; ?></span>
                        </div>
                        <h4 class="company"><?php echo $exp['company']; ?></h4>
                        <p><?php echo $exp['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- قسم المشاريع -->
        <section class="card">
            <h2>أبرز المشاريع</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="tech-stack">
                            <?php foreach ($project['tech'] as $tech): ?>
                                <span class="tag"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div>

    <footer>
        <p>جميع الحقوق محفوظة &copy; <?php echo date('Y'); ?> - <?php echo $personal_info['name']; ?></p>
    </footer>

</body>
</html>