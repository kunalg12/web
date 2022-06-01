<html>
    <!-- 
        Write class declarations and member function definitions for Teacher ( code, name, qualification)
        Derive teach_account(accountNo,joiningDate) from Teacher and teachSal(basicPay, earnings, deducation)
        from tech account . 
        Write a menu driven program
        a. To build a master table
        b. To sort all entries
        c. To search an entry
        d. Dsiplay salary of all teacher
        
     -->
     <form action="./fact.php" method="post">
         <label for="mast">build a master table</label>
         <input type="radio" name="mast" id="mast" value="t">
<br>
         <label for="sort">sort all entries</label>
         <input type="radio" name="mast" id="sort" value="sort">

       
       
        <br>
         <label for="search"> search an entry</label>
         <input type="radio" name="mast" id="search" value="search">
        <input type ="text" name ="se" >
         <br>
         <label for="disp">Dsiplay salary of all teacher</label>
         <input type="radio" name="mast" id="disp" value="disp">
        
         <br>
         <input type="submit">
     </form>
</html>

<?php
    $t = 0;
    $s = 0;
    
    if(isset( $_POST['mast']))
    {
        $t = $_POST['mast'];
    }
    if(isset ($_POST['se']))
    {
        $s = $_POST['se'];
    }

    class Teacher
    {
        protected  $code,$name,$qualification;
        public  function getDetails($c,$n,$q)
        {
            $this ->code = $c;
            $this ->name = $n;
            $this ->qualification =$q;
        }
        public function display()
        {
           echo "  <table>
           <tr>

           <th>Code</th>
           <th>Name</th>
           <th>Qualification</th>
           </tr>
           <tr>
           <td>$this->code</td>
           <td>$this->name</td>
           <td>$this->qualification</td>
           </tr>
           
       </table>";
            
        }
        public function getName()
        {
            return $this->name;
        }
        public function getcode()
        {
            return $this->code;
        }
        public function getqual()
        {
            return $this->qualification;
        }
    }
    class teachAc extends Teacher
    {
         protected $accno,$joinDate;
         public function getDetailsAc($acc,$join)
         {
             $this ->accno= $acc;
             $this ->joinDate = $join;
         }

           
         
        }
    class teachSal extends teachAc
    {
        private $basicPay,$earning,$education;
        public function getDetailSal($bpay,$earn,$edu)
        {
            $this->basicPay = $bpay;
            $this->earning = $earn;
            $this->education = $edu;
        }
        public function disp()
        {
            echo "
            <table>
            <tr>
            <th>Basic Pay</th>
            <th>Earning</th>
            <th>Education</th>


            </tr>
            <tr>
            <td>".$this->basicPay."</td>
            <td>".$this->earning."</td>
            <td>".$this->education."</td>
            </tr>
         <table>
            <tr>
 
            <th>Ac No</th>
            <th>Join Date</th>
            </tr>
            <tr>
            <td>$this->accno</td>
            <td>$this->joinDate</td>
            </tr>
            
        </table>
		<table>
           <tr>

           <th>Code</th>
           <th>Name</th>
           <th>Qualification</th>
           </tr>
           <tr>
           <td>$this->code</td>
           <td>$this->name</td>
           <td>$this->qualification</td>
            </table>
           
            ";
			
        }
      
    }
	
	$arr  = array();
    switch ($t) {
        case 't':
            {
				$tsal = new teachSal();
				$tsal->getDetails(1,"kolteyaaa",3);
                $tsal ->getDetailsAc("23","12 May 2001");
                $tsal ->getDetailSal("10000","4000","3000");
				$tsal ->disp();
				
				
				
            }
            break;
      
        case "search":
            {
               if($s == '1')
               {
              $tsal = new teachSal();
				$tsal->getDetails(1,"kolteyaaa",3);
                $tsal ->getDetailsAc("23","12 May 2001");
                $tsal ->getDetailSal("10000","4000","3000");
				$tsal ->disp();
               }
               else if($s == '2')
               {
            $tsal = new teachSal();
				$tsal->getDetails(1,"kolteyaaa",3);
                $tsal ->getDetailsAc("23","12 May 2001");
                $tsal ->getDetailSal("10000","4000","3000");
				$tsal ->disp();
               }
            }
            break;
        case "disp":
            {
             $tsal = new teachSal();
				$tsal->getDetails(1,"kolteyaaa",3);
                $tsal ->getDetailsAc("23","12 May 2001");
                $tsal ->getDetailSal("10000","4000","3000");
				$tsal ->disp();
            }
            break;
        default:
            echo "invalid";
            break;
    }
	
   
?>
