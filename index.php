<?php
    class User
    {
        public $name;
        public $username;
        public $email;

        function add_friend($name)
        {
            echo $name . " added a friend</br>";
        }
        function post_status($name)
        {
            echo $name . " posted a status</br>";
        }
    }

    $name = "Lessa Anne Pascubillo";
    $username = "lssnnpscbll";
    $email = "lezzaanne@gmail.com";
    
    echo "Name: " . $name;
    echo "Username: " . $username;
    echo "Email: " . $email . "</br></br>";

    $user = new User();
    $user->add_friend($name);
    $user->post_status($name);

?>