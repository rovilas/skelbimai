<html>
<head>
    <title><?= $this->data['title'] ?></title>
    <meta name="description" content="<?= $this->data['meta_description'] ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL_WITHOUT_INDEX_PHP . 'css/admin.css'; ?>">
</head>
<body>
<header>
    <nav>
        <ul>
            <li class="logo">
                <img src="https://codeacademy.lt/wp-content/themes/codeacademy/dist/images/codeacademy-black.svg">
            </li>
            <li>
                <a href="<?php echo $this->url(''); ?>">Home Page</a>
            </li>

                <li>
                    <a href="<?php echo $this->url('admin/users') ?>">Users</a>
                </li>
                <li>
                    <a href="<?php echo $this->url('admin/ads') ?>">ads</a>
                </li>

                <li>
                    <a href="<?php echo $this->url('user/logout') ?>">Logout</a>
                </li>
        </ul>
    </nav>
</header>
