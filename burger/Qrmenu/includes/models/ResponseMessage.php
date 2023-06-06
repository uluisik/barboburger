<?

class ResponseMessage{
    public $message,$code;
    private $successcode="s0";
    private $errorcode="e0";
    public function __construct(){

    }
    public function success($message){
        $this->code=$this->successcode;
        $this->message=$message;
        return $this;
    }


    public function error($message){
        $this->code=$this->errorcode;
        $this->message=$message;
        return $this;
    }

    public function toJson(){
        return json_encode($this);
    }
}

?>