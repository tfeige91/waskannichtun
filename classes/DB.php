<?php
class DB
    {   
        //Properties
        public $host = 'localhost';
        public $username = 'root';
        public $password = 'abcD123$';
        public $db_name = 'waskannichtun';
        
        public $link;
        public $error;
        
        /*
        *   Class constructor
        */
        
        public function __construct()
            {
                //Call Connect Function
                $this->connect();
            }
            
        /*
        *   Connector
        */    
        
        private function connect ()
            {
                $this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);
                
                if(!$this->link)
                    {
                        $this->error = "Connection Failed: ".$this->link->connect_error;
                        return false;
                    }
                
                mysqli_set_charset($this->link, "utf8");
                    
    
            }
        
        /*
        *   Select From Database Method
        */     
        
        public function select($query)
            {
                $result = $this->link->query($query) or die('$this->link->error.__LINE__');
                if($result->num_rows > 0)
                    {
                        return $result;
                    }
                else
                    {
                        return false;
                    }
            }
        
        /*
        *   Insert method
        */    
        
        public function insert($query)
            {
                $insert_row = $this->link->query($query) or die ('$this->link->error.__LINE__');
                
                //Validate input
                if($insert_row)
                    {
                        header("Location: index.php?msg=".urlencode('Record Added'));
                        exit();
                    }
                else
                    {
                        die('Error : ('. $this->link->errno .') '. $this->link->error);
                    }
            }
        
        /*
        *   Update method
        */
        
         public function update ($query)
            {
                $update_row = $this->link->query($query) or die ('$this->link->error.__LINE__');
                
                //Validate input
                if($update_row)
                    {
                        header("Location: index.php?msg=".urlencode('Record Updated'));
                        exit();
                    }
                else
                    {
                        die('Error : ('. $this->link->errno .') '. $this->link->error);
                    }
            }
            
        /*
        *   Delete method
        */
        
         public function delete ($query)
            {
                $delete_row = $this->link->query($query) or die ('$this->link->error.__LINE__');
                
                //Validate input
                if($delete_row)
                    {
                        header("Location: index.php?msg=".urlencode('Record Deleted'));
                        exit();
                    }
                else
                    {
                        die('Error : ('. $this->link->errno .') '. $this->link->error);
                    }
            }    
        
    }




























?>