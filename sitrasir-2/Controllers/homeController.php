<?php
class HomeController
{
    public function home()
    {
        header("location:http://localhost/pweb2/JobSheet5/");
    }
    public function alumni()
    {
        header("location:http://localhost/pweb2/JobSheet5/Views/Alumni/index.php?");
    }
    public function admin()
    {
        header("location:http://localhost/pweb2/JobSheet5/Views/Admin/index.php?");
    }
}
