<?php 
    include('domain.php');
    class domainW3 extends domain {
        public $website_name;
        public function __construct()
        {
            $this->website_name = parent::getWebsiteName();     
            // call static method from its child class [use parent keyword]
        }
    }

    $domain_w3 = new domainW3();
    echo $domain_w3->website_name;
?>