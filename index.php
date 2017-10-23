<?php
    class Permission {
        public $conn;
        public function __constant($conn)
        {
            $this->conn = $conn;
        }
        public function protect($rdr)
        {
            $conn = $this->conn;
            if (isset($_SESSION['user_id']) {
                header('Location:' . $rdr);
            } else {
                header('Location:' . $rdr);
            }
        }
    }
    $protect = new Permission($conn);
    // Add a redirect in "$rdr" or leave NULL
    $rdr = "NULL";
    $protect->protect($rdr);
?>
