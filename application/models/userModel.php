<?php


class userModel extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function fetchUsers(){
        $res  = $this->db->get("users");
        return $res->result_array();
    }

    public function fetchWaitingTransaction(){
    $res =    $this->db->get_where("transaction","status = 'waiting'");
    return $res->result_array();
    }

        public function fetchPendingTransaction(){
    $res =    $this->db->get_where("transaction","status = 'pending' AND type = 'registration' ");
    return $res->result_array();
    }

        public function fetchWithdrawTransaction(){
    $res =    $this->db->get_where("transaction","status = 'pending' AND type = 'withdrawal'");
    return $res->result_array();
    }

    public function checkrefferal($id){
       $res = $this->db->get_where("users","refid = $id");
       $result = $res->result_array();
       if(sizeof($result) < 5){
            return true;
       }
       else if(sizeof($result == 5)){
            return false;
       }
    }

    public function registerTransaction($username,$type,$amount=0){
            
            $this->db->select("id,package,first_name,last_name,email");
            $res = $this->db->get_where("users","username = '$username'");
            $result = $res->result_array();
            $id = $result[0]['id'];
            $package = $result[0]['package'];
            $name = $result[0]['first_name'] . $result[0]['last_name'];
            $email = $result[0]['email'];
            $cost;
            $transType;
            if($type == "1"){
            $transType = "registration";
           if($package === "basic")
                $cost = 2;
            else{
                $cost = 3;
            }
            $data = array('id'=>null,'userid'=>$id,'name'=>"$name",'email'=>"$email",'amount'=>$cost,'username'=>$username,'status'=>'waiting','type'=>$transType,'date'=>date('y-m-d'));            }
            elseif($type == "0"){
            $transType = "withdrawal";
            $cost = $amount;
            $data = array('id'=>null,'userid'=>$id,'name'=>"$name",'email'=>"$email",'amount'=>$cost,'username'=>$username,'status'=>'pending','type'=>$transType,'date'=>date('y-m-d'));    
            }
            $ins = $this->db->insert_string("transaction",$data);
            $this->db->simple_query($ins);
            // insert an empty registertrans detail
                if($type == "1")
                $this->transDetail(2,$this->db->insert_id());
                elseif($type == "0"){
                $this->transDetail(3,$this->db->insert_id());
                }

            return true;
    }

    public function fetchTransDetail($id,$type){
        if($type === "registration"){
         $res =   $this->db->get_where('registertrans',"transid = $id");
         $result = array(0,$res->result_array());   
         return $result;
        }
        elseif($type === "withdrawal"){
         $res =   $this->db->get_where('withdrawtrans',"transid = $id");
         $result = array(1,$res->result_array());   
         return $result;
        }
    }

    public function transDetail($type,$transid = 0){

        // type = 1 payment details being sent
        // type = 2 intilize initial transdetail 
        // type = 3 withdraw payment detail being sent

            if($type == 1){
            $emal = $this->input->post('email');    
            $dat = array('status'=>'pending');
            $this->db->update('transaction',$dat,"email = '$emal'");
            $this->db->select("id");
            $res = $this->db->get_where("transaction","email = '$emal'");
            $result = $res->result_array();
            $transid = $result[0]['id'];
            $data = array('trx'=>$this->input->post("trxid"),'cnic'=>$this->input->post("cnic"),'phone'=>$this->input->post("phone"),'code'=>$this->input->post("code"));                
            $this->db->update('registertrans',$data,"transid = $transid");
            return true;
                }
            elseif($type == 2){
            $data = array('transid'=>$transid,'trx'=>0,'cnic'=>0,'phone'=>0,'code'=>0,'id'=>null);                
            $this->db->insert('registertrans',$data);    
            }
            elseif($type ==3){
            $data = array('transid'=>$transid,'cnic'=>$this->input->post("wcnic"),'phone'=>$this->input->post("wphone"),'id'=>null);                
            $this->db->insert('withdrawtrans',$data);    
            }    
    }

    public function completeTrans($id){
            $dat = array('status'=>'complete');
            $this->db->update("transaction",$dat,"userid = $id");
            return true;
    }

    public function initilizeAccount($username){
            
            // intilizing the account with zero balance first
            $this->db->select("id");
            $res = $this->db->get_where("users","username = '$username'");
            $result = $res->result_array();
            $id = $result[0]['id'];
            $data = array('userid'=>$id,'Amount'=>0.00,'id'=>null);
            $ins = $this->db->insert_string("accounts",$data);
            $this->db->simple_query($ins);

            // giving bonus to parents
            $this->refBonus($id);
    }

    public function withdrawAmount($id,$withdraw){

// update accounts

        $this->db->select("Amount");
        $res = $this->db->get_where("accounts","userid = $id");
        $result = $res->result_array();
        $amount = $result[0]['Amount'];
        $amount -= $amount - $withdraw;
        $dat = array("Amount"=>$amount);
        $this->db->update("accounts",$dat,"userid = $id");
        
// insert a withdraw transaction
        
        $this->db->select("username");
        $res = $this->db->get_where("users","id = $id");
        $result = $res->result_array();
        $this->registerTransaction($result[0]['username'],"0",$withdraw);
        return true;    
    }

    public function fetchAmount($id){
          $this->db->select("Amount");
          $res =  $this->db->get_where('accounts',"userid = $id");
          return $res->result_array();  
    }

    public function fetchRefs($id){

        $res = $this->db->get_where('users',"refid = $id");
        $result = $res->result_array();
        $secreffs = array();
        foreach ($result as $key => $value) {
        $ref =  $this->db->get_where("users","refid = ".$value['id']);
        $secreffs[] = $ref->result_array();
        }
        $reffs['firstlevel'] = $res->result_array();
        $reffs['secondlevel'] = $secreffs;
        return $reffs;
    }

    public function refBonus($id){
            $firstParentBonus = (2/100)*20;
            $secondParentBonus = (2/100)*10;
        // two tier bonus
          $this->db->select("refid");
          $res =  $this->db->get_where("users","id = $id");
          $refs = $res->result_array();
            // first parent bonus
            foreach ($refs as $key => $value) {
                $this->db->select("amount");
                $fpr = $this->db->get_where("accounts","userid = ".$value['refid']);
                $fp = $fpr->result_array();
                if(!empty($fp)){
                $amount = $fp[0]['amount'];
                $amount += $firstParentBonus;
                $dat = array("amount"=>$amount);
                $this->db->update("accounts",$dat,"userid = ".$value['refid']);

                // second parent bonus
                $this->db->select("refid");
                $resu = $this->db->get_where("users","id = ".$value['refid']);
                $fp = $resu->result_array();
                foreach ($fp as $key => $val) {
                    $this->db->select("amount");
                    $spr = $this->db->get_where("accounts","userid = ".$val['refid']);
                    $sp = $spr->result_array();
                    if(!empty($sp)){
                    $amount = $sp[0]['amount'];
                    $amount += $secondParentBonus;
                    $dat = array("amount"=>$amount);
                    $this->db->update("accounts",$dat,"userid = ".$val['refid']);
                    }
                }
            }
       }
    }

}


?>