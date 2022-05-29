<html>
    <!-- 
        Create a class account(accNo, custName). Derive two classes from accounts as savingAcc(balance, minAmount)
        and currentAcc(balance, minAmount) 
        a. Display a menu
        b. Saving account
        c. current account

        for each of this display a menu with following options
        a. create acc
        2. deposit 
        3. withdrawal 
     -->
     <form method="post" action="./que1.php">
        <label for="dispmenu">Display Menu</label>
        <input type="radio" name="disp" id="DisplayMenu" value="DisplayMenu">
        <br>
        <label for="savingacc">Saving Account</label>
        <input type="radio" name="disp" id="SavingAc" value="SavingAc">
        <br>
        <label for="currentacc">Current Account</label>
        <input type="radio" name="disp" id="CurrentAc" value="CurrentAc">
        <br>
        <label for="CreateAcc">Create Account</label>
        <input type="radio" name="disp" id="ca" value="ca">
        <br>
        <label for="Dep">deposit</label>
        <input type="radio" name="disp" id="dep" value="dep">
        <br>
        <label for="withdrawal">withdrawal</label>
        <input type="radio" name="disp" id="withd" value="withd">
        <br>
        <input type="submit">
     </form>
</html>
<?php
    $m = 0;
    if(isset($_POST['disp']))
    {
        $m = $_POST['disp'];
    }
    
    class account
    {
        protected $accountno, $custNo;
        public function getDetails($accuntNo,$custno)
        {
            $this -> accountno = $accountNo;
            $this ->custNo = $custno;
        }
        public function display()
        {
            
        }
    }
    class saving extends account
    {
        private  $balance,$minAmount;
        public function viw()
        {
            echo "Balance : ".$this->balance."<br>";
        }
        public function depositsav()
        {
            
        }
        
    }
    class current extends account
    {
        private $balance,$minAmount;
    }
    switch($m)
    {
        case "DisplayMenu":
            {
                
            }
            break;
        case "SavingAc":
            {
                viw();
            }
            break;
        case "CurrentAc":
            {

            }
            break;
        case "ca":
            {

            }
            break;
        case "dep":
            {

            }
            break;
        case "withd":
            {
                
            }
            break;

    }
?>