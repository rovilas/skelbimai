<html>
<head>
    <title><?= $this->data['title'] ?></title>
    <meta name="description" content="<?= $this->data['meta_description'] ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL_WITHOUT_INDEX_PHP . 'css/style.css'; ?>">
</head>
<body>
<header>
    <div class="sliding-part">
        Autolauzynas sendien nedirba!!!
    </div>
    <nav>
        <ul>
            <li class="logo">
                <img src="https://codeacademy.lt/wp-content/themes/codeacademy/dist/images/codeacademy-black.svg">
            </li>
            <li>
                <a href="<?php echo $this->url(''); ?>">Home Page</a>
            </li>
            <li>
                <a href="<?php echo $this->url('catalog') ?>">All ads</a>
            </li>
            <?php if ($this->isUserLoged()): ?>
                <li>
                    <a href="<?php echo $this->url('catalog/add') ?>">Add New</a>
                </li>
                <li>
                    <a href="<?php echo $this->url('user/logout') ?>">Logout</a>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?php echo $this->url('user/login') ?>">Login</a>
                </li>
                <li>
                    <a href="<?php echo $this->url('user/register') ?>">Sign Up</a>
                </li>
            <?php endif; ?>
            <?php if($this->isUserAdmin()): ?>
                <li>
                    <a href="<?php echo $this->url('admin') ?>">ADMIN</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
