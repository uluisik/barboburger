<?
 
class User{
    public $id,$uname,$pw,$email,$fullname,$phone,$loggedIn=false;

    public function __construct($uname="",$pw="",$fullname="",$email="",$phone=""){
      $this->set($uname,$pw,$fullname,$email,$phone);
    }


    public function insert(){
      /** @var PDO $dbh */
      global $dbh;  

      
        $sth = $dbh->prepare("insert into users set fullname=:fullname ,email=:email ,uname=:uname , pw=:pw , phone=:phone ");
        $sth->execute(array(
          "fullname"=>$this->fullname,
          "uname"=>$this->uname,
          "email"=>$this->email,
          "pw"=>$this->pw,
          "phone"=>$this->phone,
        ));
        $error=$sth->errorInfo();
        if(!isset($error[1])){
          $this->id    =  $dbh->lastInsertId();
          return $this;
        }else{
          return false;
        }

      
      
     

      
    }

    public function delete(){
      global $dbh;
  
      $sth = $dbh->prepare("delete from users where id=:id ");
      $sth->execute(array(
        "id"=>$this->id
      ));
  
      $this->set("","","","","");
      return $this;         
    }

    public function update(){
          global $dbh;
          $sth = $dbh->prepare("update users set users set fullname=:fullname ,email=:email ,uname=:uname , pw=:pw , pw=:phone ");
          $sth->execute(array(
            "id"=>$this->id,
            "fullname"=>$this->fullname,
            "uname"=>$this->uname,
            "pw"=>$this->pw,
            "pw"=>$this->phone
          ));
          return $this;
    }
    public function get($id){
      global $dbh;
      $sth = $dbh->prepare("select * from users where id=:id");
      $sth->execute(array("id"=>$id));
      $user = $sth->fetch(PDO::FETCH_ASSOC);
      if(isset($user["id"])){
        $this->id     =  $user["id"];
        $this->set( $user["uname"], $user["pw"],  $user["fullname"],$user["email"],$user["phone"]);
        return $this;
      }else{
        return false;
      }
    }
    public function login($uname,$pw){
      global $dbh;
      $sth = $dbh->prepare("select * from users where email=:email and pw=:pw ");
      $this->setPw($pw); 
      $sth->execute(array(
        "email" => $uname,
        "pw"    => $this->pw
      ));

      $user = $sth->fetch(PDO::FETCH_ASSOC); 
   
      if(isset($user["id"])){
        $this->set( $user["uname"], $user["pw"],  $user["fullname"],$user["email"],$user["phone"]);
        $this->id     =  $user["id"]; 
        $this->loggedIn=true;
        return $this;
      }else{
        return false;
      }

    }

    public function set($uname,$pw,$fullname,$email,$phone){
      $this->id="";
      $this->uname  = $uname;
      $this->setPw($pw); 
      $this->fullname     = $fullname; 
      $this->email  = $email; 
      $this->phone  = $phone; 
      return $this;
   }

    public function setPw($pw){
      $this->pw = md5($pw); 
      return $this;
    }

}



?>