<?php
class DbOperations{
    private $con;
    function __construct(){
        require_once dirname(__FILE__).'/DbConnect.php';
        $db = new DbConnect();
        $this->con= $db->connect();
    }
    public function createUser($username,$pass,$email,$phoneno){
        if($this->isUserExist($username,$email,$phoneno)){
            return 0;
        }else{
            $password = md5($pass);
            $stmt = $this->con->prepare("INSERT INTO `users` (`id`, `username`, `password`, `email`, `phoneno`) VALUES (NULL, ?, ?, ?, ?);");
            $stmt->bind_param("ssss",$username,$password,$email,$phoneno);
            if($stmt->execute()){
                return 1;
            }else{
                return 2;
            }

        }
    }

    public function postProduct($product_name,$category,$subcate,$price,$picc,$description,$producer){
        if($this->isproductexist($product_name,$category,$producer)){
            return 0;
        }else{
            $pic = $picc . ".jpg";
            $stmt = $this->con->prepare("INSERT INTO `product` (`productid`, `product_name`, `category`, `subcate`, `price`, `pic`, `description`, `producer`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?);");
            $stmt->bind_param("sssssss",$product_name,$category,$subcate,$price,$pic,$description,$producer);
            if($stmt->execute()){
                return 1;
            }else{
                return 2;
            }

        }
    }
    public function insertmessageuser($text,$id){
        $stmt = $this->con->prepare("INSERT INTO `message` (`messageid`, `id`, `sentbyuser`, `date`, `text`, `isseen`, `isseenuser`) VALUES (NULL, ?, 1, CURRENT_TIMESTAMP, ?, 0, 1);");
        $stmt->bind_param("ss",$id,$text);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }
    }
    public function insertmessageadmin($text,$id){
        $stmt = $this->con->prepare("INSERT INTO `message` (`messageid`, `id`, `sentbyuser`, `date`, `text`, `isseen`, `isseenuser`) VALUES (NULL, ?, 0, CURRENT_TIMESTAMP, ?, 1, 0);");
        $stmt->bind_param("ss",$id,$text);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }
    }
    public function addtobuylist($productid,$quantity,$id){
        if($this->isbuyexist($productid,$id)){
            $stmt = $this->con->prepare("UPDATE buylist SET `quantity` = quantity + ? WHERE productid = ? AND id = ?");
            $stmt->bind_param("sss",$quantity,$productid,$id);
            if($stmt->execute()){
                return 1;
            }else{
                return 2;
            }
        }else{
            $stmt = $this->con->prepare("INSERT INTO `buylist` (`buyid`, `buydate`, `deliverydate`, `id`,`productid`,`bought`, `quantity`, `israted`) VALUES (NULL, CURRENT_DATE, NULL, ?, ?, 0, ?, 0);");
            $stmt->bind_param("sss",$id,$productid,$quantity);
            if($stmt->execute()){
                return 1;
            }else{
                return 2;
            }
        }

    }
    public function updatesubitem($buyid,$id,$productname,$buydate,$quantity){
        
        $stmt = $this->con->prepare("UPDATE buylist SET `bought` = 1, `deliverydate` = CURRENT_DATE WHERE buyid = ?");
        $stmt->bind_param("s",$buyid);
        if($stmt->execute()){
            $text="your order of ".$productname." of quantity ".$quantity.",in ".$buydate.", has been delivered";
            $stmt2 = $this->con->prepare("INSERT INTO `message` (`messageid`, `id`, `sentbyuser`, `date`, `text`, `isseen`, `isseenuser`) VALUES (NULL, ?, 0, CURRENT_TIMESTAMP, ?, 1, 0);");
            $stmt2->bind_param("ss",$id,$text);
            if($stmt2->execute()){
                return 1;
            }else{
                return 2;
            }
        }else{
            return 2;
        }


    }
    public function updateadminseen($id){
        
        $stmt = $this->con->prepare("UPDATE `message` SET `isseen` = 1 WHERE id = ?");
        $stmt->bind_param("s",$id);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }


    }
    public function updateuserseen($id){
        
        $stmt = $this->con->prepare("UPDATE `message` SET `isseenuser` = 1 WHERE id = ?");
        $stmt->bind_param("s",$id);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }


    }
    
    public function updateitem($buydate){
        
        $stmt = $this->con->prepare("UPDATE buylist SET `bought` = 1, `deliverydate` = CURRENT_DATE WHERE buydate = ?");
        $stmt->bind_param("s",$buydate);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }


    }

    public function updateitemuser($id){
        
        $stmt = $this->con->prepare("UPDATE buylist SET `bought` = 1, `deliverydate` = CURRENT_DATE WHERE id = ? AND `bought`=0");
        $stmt->bind_param("s",$id);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }


    }
    public function rateproduct($buyid,$star,$desc,$productid,$id){
        
        $stmt = $this->con->prepare("UPDATE buylist SET `israted` = 1 WHERE buyid = ?");
        $stmt->bind_param("s",$buyid);
        if($stmt->execute()){
            $stmt = $this->con->prepare("INSERT INTO `review` (`id`,`productid`,`star`, `description`, `day`) VALUES (?, ?, ?, ?, CURRENT_DATE);");
            $stmt->bind_param("ssss",$id,$productid,$star,$desc);
            if($stmt->execute()){
                return 1;
        }else{
                return 2;
        }
        }else{
            return 3;
        }


    }
    public function deletesubitem($buyid,$id,$productname,$buydate,$quantity){
        
        $stmt = $this->con->prepare("DELETE FROM buylist WHERE buyid = $buyid;");
        // $stmt->bind_param("ss",$productid,$id);
        if($stmt->execute()){
            $text="your order of ". $productname." of quantity ".$quantity.",in ".$buydate.", has been denied to be delivered";
            $stmt2 = $this->con->prepare("INSERT INTO `message` (`messageid`, `id`, `sentbyuser`, `date`, `text`, `isseen`, `isseenuser`) VALUES (NULL, ?, 0, CURRENT_TIMESTAMP, ?, 1, 0);");
            $stmt2->bind_param("ss",$id,$text);
            if($stmt2->execute()){
                return 1;
            }else{
                return 2;
            }
        }else{
            return 2;
        }

    }
    public function deleteitem($buydate){
        
        $stmt = $this->con->prepare("DELETE FROM buylist WHERE buydate = '$buydate' AND bought = 0;");
        // $stmt->bind_param("ss",$productid,$id);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }

    }

    public function deleteitemuser($id){
        
        $stmt = $this->con->prepare("DELETE FROM buylist WHERE id = '$id' AND bought = 0;");
        // $stmt->bind_param("ss",$productid,$id);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }

    }

    public function deletewish($productid,$id){
        
        $stmt = $this->con->prepare("DELETE FROM wishlist WHERE productid IN ($productid) AND id = $id;");
        // $stmt->bind_param("ss",$productid,$id);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }

    }

    public function deletebuy($productid,$id){
        
        $stmt = $this->con->prepare("DELETE FROM buylist WHERE productid IN ($productid) AND id = $id AND bought = 0;");
        // $stmt->bind_param("ss",$productid,$id);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }

    }


    public function postwish($productid,$id,$quantity){
        if($this->iswishexist($productid,$id)){
            $stmt = $this->con->prepare("UPDATE wishlist SET `quantity` = ? WHERE productid = ? AND id = ?");
            $stmt->bind_param("sss",$quantity,$productid,$id);
            if($stmt->execute()){
                return 0;
            }else{
                return 3;
            }
        }else{
            $stmt = $this->con->prepare("INSERT INTO `wishlist` (`wishid`, `wishdate`, `productid`, `id`, `quantity`) VALUES (NULL, CURRENT_DATE, ?, ?, ?);");
            $stmt->bind_param("sss",$productid,$id,$quantity);
            if($stmt->execute()){
                return 1;
            }else{
                return 2;
            }

        }
    }

    public function updateProduct($productid,$product_name,$category,$subcate,$price,$picc,$description,$producer){
        
        $pic = $picc . ".jpg";
        $stmt = $this->con->prepare("UPDATE product SET `product_name` = ?, `category` = ?, `subcate` = ?, `price` = ?, `pic` = ?, `description` = ?, `producer` = ? WHERE productid = ?");
        $stmt->bind_param("ssssssss",$product_name,$category,$subcate,$price,$pic,$description,$producer,$productid);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }

        
    }

    public function deleteProduct($productid){
        
        $stmt = $this->con->prepare("DELETE FROM product WHERE productid = ?");
        $stmt->bind_param("s",$productid);
        if($stmt->execute()){
            return 1;
        }else{
            return 2;
        }

        
    }

    public function getProduct(){
        $stmte = array();
        $stmt = $this->con->prepare("SELECT * FROM product");
        $stmt->execute();
        if($stmt->num_rows > 0){
            while($stmt->get_result()->fetch_assoc()){
                $stmte[]=$stmt;
            }
        }
        // $stmt->get_result()->fetch_assoc();
        return $stmte;
    }

    public function userLogin($username,$pass){
        $password = md5($pass);
        $stmt = $this->con->prepare("SELECT id FROM users WHERE username = ? AND  `password`= ?");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function getUserByUsername($username){
        $stmt = $this->con->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }


    private function isUserExist($username,$email,$phoneno){
        $stmt = $this->con->prepare("SELECT id FROM users WHERE username = ? OR email = ? OR phoneno = ?");
        $stmt->bind_param("sss",$username,$email,$phoneno);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    private function isproductexist($product_name,$category,$producer){
        $stmt = $this->con->prepare("SELECT productid FROM product WHERE product_name = ? AND category = ? AND producer = ?");
        $stmt->bind_param("sss",$product_name,$category,$producer);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
    
    private function iswishexist($productid,$id){
        $stmt = $this->con->prepare("SELECT wishid FROM wishlist WHERE productid = ? AND id = ?");
        $stmt->bind_param("ss",$productid,$id);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
    private function isbuyexist($productid,$id){
        $stmt = $this->con->prepare("SELECT buyid FROM buylist WHERE productid = ? AND id = ? AND bought = 0");
        $stmt->bind_param("ss",$productid,$id);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
}