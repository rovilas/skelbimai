<?php

namespace Core;

use Helper\Url;
use Model\User;

class AbstractController
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
        $this->data['title'] = 'Bepulso.lt';
        $this->data['meta_description'] = '';
    }

    protected function render($template)
    {
        include_once PROJECT_ROOT_DIR . '/app/design/parts/header.php';
        include_once PROJECT_ROOT_DIR . '/app/design/' . $template . '.php';
        include_once PROJECT_ROOT_DIR . '/app/design/parts/footer.php';
    }

    protected function renderAdmin($template)
    {
        include_once PROJECT_ROOT_DIR . '/app/design/admin/parts/header.php';
        include_once PROJECT_ROOT_DIR . '/app/design/admin/' . $template . '.php';
        include_once PROJECT_ROOT_DIR . '/app/design/admin/parts/footer.php';
    }

    protected function isUserLoged()
    {
        return isset($_SESSION['user_id']);
    }

    protected function isUserAdmin()
    {
        if ($this->isUserLoged()) {
            $user = new User();
            $user->load($_SESSION['user_id']);
            if ($user->getRoleId() == 1) {
                return true;
            }
        }

        return false;
    }

    public function url($path, $param = null)
    {
        return Url::link($path, $param);
    }


}
