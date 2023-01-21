<?php

class User {
    protected $name;
    protected $email;
    protected $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function set_name($name) {
        $this->name = $name;
    }    

    public function get_name() {
        return $this->name;
    }
}

$user1 = new User("Rakesh", "rakesh@rakesh.com", "alskdf3eb323");
$user1->set_name("Tushar");

print_r($user1);
echo "<br>";

echo $user1->get_name();
echo "<br>";

class Admin extends User {
    protected $super_user;
    protected $perms;

    public function __construct($name, $email, $password, $super_user, $perms) {
        parent::__construct($name, $email, $password);
        $this->super_user = $super_user;
        $this->perms = $perms;
    }
}

$admin_main = new Admin("Raman", "raman@niet.co.in", "kgsdjahfk23", true, ["full", "owner"]);

print_r($admin_main);